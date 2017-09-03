<?php
require '../controllers/misCalificacionesAlumno.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Aministración</title>
	    <!-- boostrap -->
    <link href="../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	
</head>
<body>
	<div id="contenido" >
	<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Lista de Usuarios</h3>
	</div>
	
	<div class="panel-body">
		<table class="table table-striped">
			<thead>
				<th>ID</th>
				<th>GRUPO</th>
				<th>MATERIA</th>
				<th>CALIFICACION</th>
			</thead>
			<tbody>
			<?php
				MisCalificaciones::mostrarCalificaciones();
			?>
            </tbody>
         </table>

	   <button type="button" id="btnGenerar" class="btn btn-primary btn-md" >button</button>
       </div>
    </div>
  </div>
</body>
</html>