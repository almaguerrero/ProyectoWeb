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
            echo "<li>
                        <a href=\"#\" class=\"NavLateral-DropDown  waves-effect waves-light\"><i class=\"zmdi zmdi-view-web zmdi-hc-fw\">
                        </i> <i class=\"zmdi zmdi-chevron-down NavLateral-CaretDown\"></i> Servicios</a>
                        <ul class=\"full-width\">";
            echo "<li><a href=\"Calificaciones.php\" class=\"waves-effect waves-light\">Mis Calificaciones</a></li>";
            echo "</ul></li>";
            echo "<li><a href=\"perfilAlumno.php\"><i class=\"zmdi zmdi-view-web zmdi-hc-fw\">
                        </i> Perfil</a></li>";
        }
        elseif ($_SESSION["TYPE"]==3)
        {
            //profesor
            echo "<li><a href=\"perfilAlumno.php\"><i class=\"zmdi zmdi-view-web zmdi-hc-fw\">
                 </i> Perfil</a></li>";
            echo "<li><a href=\"#\" class=\"NavLateral-DropDown  waves-effect waves-light\"><i class=\"zmdi zmdi-view-web zmdi-hc-fw\">
                        </i> <i class=\"zmdi zmdi-chevron-down NavLateral-CaretDown\"></i> Servicios</a><ul class=\"full-width\">";
            
            echo "<li><a href=\"MisAlumnosProfesor.php\" class=\"waves-effect waves-light\">Mis Materias</a></li>";
            echo "<li><a href=\"MisAlumnosProfesor.php\" class=\"waves-effect waves-light\">Mis Alumnos</a></li>";
            echo "</ul></li>";
            
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
            echo "<li><a href=\"crudAlumno.php\" class=\"waves-effect waves-light\">Registrar Alumno</a></li>";
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