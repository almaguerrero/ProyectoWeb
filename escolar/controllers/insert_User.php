<?php

if(!empty($_POST))
{
    if (isset($_POST["user"]) && isset($_POST["password"]) && isset($_POST["type_user"]) && 
        isset($_POST["mail"]) && isset($_POST["stauts"]) && isset($_POST["name"]) && isset($_POST["lastname"]))
    {
        if($_POST["user"]!="" && $_POST["password"])
        {
            include "conection.php";
            $sql = "INSERT INTO Usuarios (User, password, tipo_usuario_idtipo_usuario, correo, estatus, nombre, apellido) 
                        VALUE(\"$_POST[user]\"$_POST[password]\"$_POST[type_user]\"$_POST[mail]\"$_POST[status]\"$_POST[name]\"$_POST[lastname]\", NOW())";
            $query = $conn->query($sql);
            print "<script>alert(\"Agregado exitosamente.\");window.location='../index.html';</script>";
        }
        else 
        {
            print "<script>alert(\"No se agrego nuevo usuario\");window.location='../index.html';</script>";
        }
    }
}