<?php

?>

<html>
<head>
</head>
<body>
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