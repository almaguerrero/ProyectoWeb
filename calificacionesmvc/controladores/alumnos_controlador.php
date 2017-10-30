<?php



    //Llamada al modelo
    require_once("modelo/alumnos_modelo.php");
    $alumnos=new alumnos_modelo();
    $datos=$alumnos->get_alumnos();

    //Llamada a la vista
    require_once("vista/alumnos_vista.php");


?>