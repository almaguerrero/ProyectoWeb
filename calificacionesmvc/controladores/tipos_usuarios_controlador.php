<?php

    require_once("../modelo/tipo_usuarios_modelo.php");
    $tipos= new tipo_usuarios_modelo();
    $datos= $tipos->get_tipos_usuarios();

    require_once("../vista/tipos_usuarios_vista.php");

?>