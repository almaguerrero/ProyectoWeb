<?php
// Usaremos session_start() para saber si hay una sesiÃ³n iniciada.
session_start();

	// SI NO HAY SESSION vamos redireccionados a index.php
    if (!isset($_SESSION['usuario2'])) {
      header("location:inicio.php");

    // SI HAY SESSION iniciada, continuamos el script
    } else {
    	// Declaramos una variable. Le decimos que le asigne a $usuario lo que hay en $_SESSION...
    	$usuario = $_SESSION['usuario2'];
      
?>
 <!DOCTYPE html>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/bootstrao.js"></script>
 <html>
 <head>
 	<title ALIGN=center>Alumno</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
 	<STYLE type="text/css">
        h1,h3{ text-align: center }
       body {
          background-image: url("fondo2.JPG")
         }        
 </STYLE>
 </head>
 <body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="inicio.php">Regresar</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active">
      <li><a href="BajaUsuario.php">Baja Usuario</a></li>
      <li><a href="ModificarUsuario.php">Modificar Usuario</a></li>
    </ul>
  </div>
</nav>
                </form>  
               
                </body>    
 <?php
 	// Cerramos el ELSE
    }

?>