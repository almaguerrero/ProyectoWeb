<?php

?>

<html>
<head>
    <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>Bienvenido</title>

    <!-- boostrap -->
    <link href="../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

     <!-- Normalize CSS -->
<link rel="stylesheet" href="css/normalize.css">
     <!-- Materialize CSS -->
        <link rel="stylesheet" href="css/materialize.min.css">
     <!-- Material Design Iconic Font CSS -->
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <!-- Malihu jQuery custom content scroller CSS -->
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="css/sweetalert.css">
    <!-- MaterialDark CSS -->
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <section class="NavLateral full-width">

        <div class="NavLateral-FontMenu full-width ShowHideMenu"></div>

        <div class="NavLateral-content full-width">

            <header class="NavLateral-title full-width center-align">

                TecNM <i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu"></i>

            </header>

            <figure class="full-width NavLateral-logo">

                <img src="assets/img/itqnn.jpg" alt="material-logo" class="responsive-img center-box">

                <figcaption class="center-align">Instituto Tecnológico de Querétaro</figcaption>

            </figure> 
    </section>

    <section class="ContentPage full-width">
  <div class="ContentPage-Nav full-width">
        </div>  
        <div class="NavLateralDivider"></div>
            <div class="footer-copyright">
                <div class="container center-align">
<div class="div_usu">
    <form id="formulario" class="form-horizontal" role="form" >
        <div id="alerta" class="alert alert-danger" role="alert"></div>
        <label for="Usuario" >Usuario:</label>
        <input id="Usuario" name="Usuario" type="text" class="form-control" placeholder="Usuario" required value="<?php echo $Usuario; ?>"/>
        
        <label for="Password" >Password:</label>
        <input id="Password" name="Password" type="text" class="form-control" placeholder="Password" required value="<?php echo $Password; ?>"/>
        
        <label for="tipoUsuario" >Tipo de Usuario:</label>
        <input id="tipoUsuario" name="tipoUsuario" type="text" class="form-control" placeholder="Tipo de Usuario" required value="<?php echo $tipoUsuario; ?>"/>
        
         <label for="correo" >Correo:</label>
        <input id="correo" name="correo" type="text" class="form-control" placeholder="Correo" required value="<?php echo $correo; ?>"/>
        
        <label for="estatus" >Activo:</label>
        <input id="estatus" name="estatus" type="text" class="form-control" placeholder="Activo" required value="<?php echo $estatus; ?>"/>
        
        <label for="nombre" >Nombre:</label>
        <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre" required value="<?php echo $nombre; ?>"/>
        
        <label for="apellido" >Apellido:</label>
        <input id="apellido" name="apellido" type="text" class="form-control" placeholder="Apellido" required value="<?php echo $apellido; ?>"/>
        
        <br/>
        <input type="submit" value="Guardar" class="btn btn-primary"/>
        <input id="btn_cancelar" type="button" class="btn btn-primary" value="Cancelar"/>
    </form>
</div>
</body>
</html>
