<?php
/* Menu es usado para seleccionar el menu que se mostrara a el usuario dependiendo del tipo de usuario
 * con el uso de las variables de Session creamos el menu dinamico*/
session_start();
class menu
{
    
    function defineMenu()
    {
        if($_SESSION["TYPE"]==4)
        {
            //alumno
            echo "<li><a href=\"Calificaciones.php\" class=\"waves-effect waves-light\">Mis Calificaciones</a></li>";
        }
        elseif ($_SESSION["TYPE"]==3)
        {
            //profesor
            echo "<li><a href=# class=\"waves-effect waves-light\">Mis Grupos</a></li>";
            echo "<li><a href=\"../controllers/ReporteAlumnos.php\" class=\"waves-effect waves-light\">Mis Alumnos</a></li>";
            
        }
        elseif ($_SESSION["TYPE"]==2)
        {
            //coordinador
            echo "<li><a href=# class=\"waves-effect waves-light\">Mi perfil</a></li>";
            echo "<li><a href=# class=\"waves-effect waves-light\">Registrar Alumno</a></li>";
            echo "<li><a href=# class=\"waves-effect waves-light\">Registrar Profesor</a></li>";
            echo "<li><a href=# class=\"waves-effect waves-light\">Reportes</a></li>";
            
        }
        elseif ($_SESSION["TYPE"]==1)
        {
            //director
            echo "<li><a href=\"crudCoordinador.php\" class=\"waves-effect waves-light\">Registrar Coordinador</a></li>";
            echo "<li><a href=# class=\"waves-effect waves-light\">Registrar Profesor</a></li>";
            echo "<li><a href=# class=\"waves-effect waves-light\">Registrar Alumno</a></li>";
            echo "<li><a href=# class=\"waves-effect waves-light\">Reportes</a></li>";
            
        }
    }
    function nombrarCargo ()
    {
        if($_SESSION["TYPE"]==4)
        {
            //alumno
            echo "Alumno:";
        }
        elseif ($_SESSION["TYPE"]==3)
        {
            //profesor
            echo "Profesor:";
            
        }
        elseif ($_SESSION["TYPE"]==2)
        {
            //coordinador
            echo "Coordinador:";
            
        }
        elseif ($_SESSION["TYPE"]==1)
        {
            //director
            echo "Director:";
            
        }
    }
}
?>