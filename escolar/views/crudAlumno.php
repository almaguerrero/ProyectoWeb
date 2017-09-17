
<html>
<head>
<link href="css/usuario_css.css" rel="stylesheet" type="text/css"/>
<script src="js/usuario_js.js" type="text/javascript"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="form-group">
    <form id="formulario" class="form-horizontal" role="form" >
        <div id="alerta" class="alert alert-danger" role="alert"></div>
        <?php if ($operacion == 'update') {
            ?>
            <label for="id_user" >ID:</label>
            <input id="id_user" name="id_user" type="text" class="form-control" disabled value="<?php echo $id_user; ?>"/>
            <?php
        }
        ?>
        <label for="nombre" >Nombre:</label>
        <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre" required value="<?php echo $nombre; ?>"/>
        
        <label for="apellido" >Apellido:</label>
        <input id="apellido" name="apellido" type="text" class="form-control" placeholder="Apellido" required value="<?php echo $apellido; ?>"/>
        
         <label for="carrera" >Carrera:</label>
        <input id="carrera" name="carrera" type="text" class="form-control" placeholder="carrera" required value="<?php echo $carrera; ?>"/>
        
        <label for="correo" >Email:</label>
        <input id="correo" name="correo" type="text" class="form-control" placeholder="correo" required value="<?php echo $correo; ?>"/>
        
         <label for="proyectos_id" >Proyecto ID:</label>
        <input id="proyectos_id" name="proyectos_id" type="text" class="form-control" placeholder="proyectos_id" required value="<?php echo $proyectos_id; ?>"/>
        
        <label for="date_registro" >Fecha de Registro:</label>
        <input id="date_registro" name="date_registro" type="text" class="form-control" placeholder="date_registro" required value="<?php echo $date_registro; ?>"/>
        
         <label for="rol" >Rol:</label>
        <input id="rol" name="rol" type="text" class="form-control" placeholder="rol" required value="<?php echo $rol; ?>"/>
        
        <label for="telefono" >Telefono:</label>
        <input id="telefono" name="telefono" type="text" class="form-control" placeholder="Telefono" required value="<?php echo $telefono; ?>"/>
        
         <label for="catologo_user_id" >ID Rol:</label>
        <input id="catalogo_user_id" name="catalogo_user_id" type="text" class="form-control" placeholder="catalogo_user_id" required value="<?php echo $catalogo_user_id; ?>"/>
        
         <label for="pwd" >Contraseña:</label>
        <input id="pwd" name="pwd" type="password" class="form-control" placeholder="Contraseña" required value="<?php echo $pwd; ?>"/>
        
        <label for="ped2" >Repita la contraseña:</label>
        <input id="pwd2" type="password" class="form-control" placeholder="Repita la contraseña" required value="<?php echo $pwd; ?>"/>

        <br/>
        <input type="submit" value="Guardar" class="btn btn-primary"/>
        <input id="btn_cancelar" type="button" class="btn btn-primary" value="Cancelar"/>
    </form>
</div>
</body>
</html>
