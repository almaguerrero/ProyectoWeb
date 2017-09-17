<?php
include '../db/LinkDB.php';

$database = LinkDB::connection();
$idMateria = null;
$query = $query = sprintf("select a.idAlumnos, a.nombre, a.apellido, g.Descripcion, m.nombre_materia, ma.calificacion
        from Alumnos a, Materias m, Materias_has_Alumnos ma, Grupos g, Grupos_has_Alumnos ga
        where ma.Materias_idMaterias=m.idMaterias AND a.idAlumnos = ma.Alumnos_idAlumnos
	    AND g.idGrupos = ga.Grupos_idGrupos AND a.idAlumnos = ga.Alumnos_idAlumnos AND m.idMaterias=".$_GET["idMaterias"]);
$misAlumnos=mysqli_query($database, $query);
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="../libs/bootstrap/css/bootstrap.min.css">
		<script src="../libs/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../libs/boostrap/js/boostrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<table class="table table-bordered table-hover">
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Grupo</th>
		<th>Materia</th>
		<th>Calificación</th>
		<th>Capturar Calificación</th>
	</thead>
	<?php while ($row = mysqli_fetch_array($misAlumnos)):?>
	<tr>
		<td><?php echo $row["idAlumnos"];?></td>
		<td><?php echo $row["nombre"]?></td>
		<td><?php echo $row["apellido"] ?></td>
		<td><?php echo $row["Descripcion"]?></td>
		<td><?php echo $row["nombre_materia"]?></td>
		<td><?php echo $row["calificacion"]?></td>
		<td style="width:150px;">
			<a href="../controllers/MisAlumnosReporteProfesor.php?idMaterias=<?php echo $row["idMaterias"];?>" class="btn btn-sm btn-warning">Capturar</a>
		</td>
</tr>
<?php endwhile;?>
	
</table>
</div>
</div>
</div>
</body>

</html>