<?php
include '../db/LinkDB.php';

$database = LinkDB::connection();
$idMateria = null;
$query = sprintf("SELECT * FROM Materias");
$misMaterias=mysqli_query($database, $query);
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../libs/bootstrap/css/bootstrap.min.css">
		<script src="../libs/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../libs/boostrap/js/boostrap.min.js"></script>
</head>
<table class="table table-bordered table-hover">
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Reporte Alumnos</th>
		<th>Reporte Excel</th>
		<th>Captura Calificaciones</th>
	</thead>
	<?php while ($row = mysqli_fetch_array($misMaterias)):?>
	<tr>
		<td><?php echo $row["idMaterias"];?></td>
		<td><?php echo $row["nombre_materia"]?></td>
		<td style="width:150px;">
			<a href="../controllers/MisAlumnosReporteProfesor.php?idMaterias=<?php echo $row["idMaterias"];?>" class="btn btn-sm btn-warning" target="_Blank" >Reporte</a>
		</td>
		<td style="width:150px;">
			<a href="../controllers/reporteExcel.php?idMaterias=<?php echo $row["idMaterias"];?>" class="btn btn-sm btn-warning" target="_Blank" >Reporte</a>
		</td>
		<td style="width:150px;">
			<a href="../controllers/CapturaCalifProfesor.php?idMaterias=<?php echo $row["idMaterias"];?>" class="btn btn-sm btn-warning">Capturar</a>
		</td>
</tr>
<?php endwhile;?>
	
</table>
</html>
