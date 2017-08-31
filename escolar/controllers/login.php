<?php

class foo_mysqli extends mysqli {
    public function __construct($host, $user, $password, $database){
        parent::init();
        
        if (!parent::options(MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0')){
            die('Fallo la configuracion de MYSQLI_INIT_COMMAND');
        }
        if (!parent::options(MYSQLI_OPT_CONNECT_TIMEOUT, 5)) {
            die('Falló la configuración de MYSQLI_OPT_CONNECT_TIMEOUT');
        }
        
        if (!parent::real_connect($host, $user, $password, $database)) {
            die('Error de conexión (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        }
    }
}

$database = new foo_mysqli('localhost', 'root', 'martinez', 'mydb');

$query = sprintf("SELECT User FROM Usuarios WHERE User= '".htmlentities($_POST["UserName"]) ."'");

$myusuario = mysqli_query($database, $query);
$nmyusuario= mysqli_num_rows($myusuario);
if($nmyusuario==0)
{
    $query = sprintf("SELECT user FROM Alumnos WHERE user= '".htmlentities($_POST["UserName"]) ."'");
    $myAlumno = mysqli_query($database, $query);
    $nmyAlumno= mysqli_num_rows($myAlumno);
    if($nmyAlumno!=0)
    {
        $sql =sprintf("SELECT user FROM  Alumnos WHERE user = '".htmlentities($_POST["UserName"])."' AND password = '".htmlentities($_POST["Password"])."'");
        $myclave = mysqli_query($database, $sql);
        $nmyclave = mysqli_num_rows($myclave);
        
        //Si usuario y clave son correctos
        if($nmyclave != 0)
        {
            session_start();
            //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario
            $_SESSION["autentica"] = "SIP";
            $fila = mysqli_fetch_array($myclave);
            $_SESSION["usuarioactual"] = $fila['Nombre']; //nombre del usuario logueado.
            header("Location: ../views/inicio.html");
        }
        else
        {
            print "La contraseña o usuario son incorrectas";
        }
    }
    else
    {
        print ("El usuario no existe");
    }
}
else {
    $sql =sprintf("SELECT User FROM  Usuarios WHERE User = '".htmlentities($_POST["UserName"])."' AND password = '".htmlentities($_POST["Password"])."'");
    $myclave = mysqli_query($database, $sql);
    $nmyclave = mysqli_num_rows($myclave);
    
    //Si usuario y clave son correctos
    if($nmyclave != 0)
    {
        session_start();
        //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario
        $_SESSION["autentica"] = "SIP";
        $fila = mysqli_fetch_array($myclave);
        $_SESSION["usuarioactual"] = $fila['nombre']; //nombre del usuario logueado.
        //$query_type_user = sprintf("SELECT tipo_usuario_idtipo_usuario FROM Usuarios WHERE User='" .htmlentities($_POST["UserName"]) ."'");
        //$type_user = mysqli_query($database, $query_type_user);
        
        //$fila = mysqli_fetch_assoc($type_user);
        
        //if($fila["tipo_usuario_idtipo_usuario"]==1){
            header("Location: ../views/inicio.html");
        //}
    }
    
}


$db->close();


?>