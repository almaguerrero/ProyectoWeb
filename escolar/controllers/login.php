<?php
/* En este script llevamos el control para los usuarios que inician sesion
 * en el sistema, se realiza una estancia de la base de datos para realizar las consultas 
 * necesarias*/
require '../db/LinkDB.php';

$database = LinkDB::connection();


$query = sprintf("SELECT User FROM Usuarios WHERE User= '".htmlentities($_POST["UserName"]) ."'");

$myusuario = mysqli_query($database, $query);
$nmyusuario= mysqli_num_rows($myusuario);
if($nmyusuario==0)
{
    /* Si no es un usuario de personal se realiza una consulta a la tabla alumnos y obtener
     * la contraseña usuario y iniciamos las variables de sesión para tener control sobre los alumnos en sesión
     *  */
    $queryAlumno = sprintf("SELECT user FROM Alumnos WHERE user= '".htmlentities($_POST["UserName"])."'");
    $myAlumno = mysqli_query($database, $queryAlumno);
    $nmyAlumno= mysqli_num_rows($myAlumno);
    if($nmyAlumno!=0)
    {
        $queryClaveAlumno =sprintf("SELECT idAlumnos, user, nombre FROM  Alumnos WHERE user = '".htmlentities($_POST["UserName"]).
            "' AND password = '".htmlentities($_POST["Password"])."'");
        $claveAlumno = mysqli_query($database, $queryClaveAlumno);
        $numeroClaveAlumno = mysqli_num_rows($claveAlumno);
        if($numeroClaveAlumno != 0)
        {
            session_start();
            $_SESSION["TYPE"]=4;
            $fila = mysqli_fetch_assoc($claveAlumno);
            $_SESSION["usuarioActual"] = $fila['nombre']; //nombre del usuario logueado.
            $_SESSION["ID"]= $fila['idAlumnos'];
            //print $_SESSION["ID"];
            header("Location: ../views/inicio.php");
        }
        else
        {
           header("Location: ../index.html");
        }
    }
    else
    {
       header("Location: ../index.html");
    }
}
else {
    /* Se ejecuta cuando existe un usuario de personal
     * administrativo obtenemos las variables de sesión y contraseña*/
    
    $sql =sprintf("SELECT User, nombre FROM  Usuarios WHERE User = '".htmlentities($_POST["UserName"])."' AND password = '".htmlentities($_POST["Password"])."'");
    $clavePersonal = mysqli_query($database, $sql);
    $numeroClavePersonal = mysqli_num_rows($clavePersonal);
    
    //Si usuario y clave son correctos
    if($numeroClavePersonal != 0)
    {
        session_start();
        $fila = mysqli_fetch_assoc($clavePersonal);
        $_SESSION["usuarioActual"] = $fila['nombre']; //nombre del usuario logueado.
        $queryTipoUsuario = sprintf("SELECT tipo_usuario_idtipo_usuario FROM Usuarios WHERE User='" .htmlentities($_POST["UserName"]) ."'");
        $tipoUsuario = mysqli_query($database, $queryTipoUsuario);
        $rowUsuarioInicio = mysqli_fetch_assoc($tipoUsuario);
        $_SESSION["TYPE"] = $rowUsuarioInicio["tipo_usuario_idtipo_usuario"];
        header("Location: ../views/inicio.php");
    }
    
}


$db->close();


?>