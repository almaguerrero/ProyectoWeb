<?php
require '../db/LinkDB.php';
require '../libs/fpdf/fpdf.php';
session_start();
function  obtenerDatos ()
{
    $database = LinkDB::connection();
    $query = sprintf("select g.idGrupos, g.Descripcion, m.nombre_materia, ma.calificacion
        from Alumnos a, Materias m, Materias_has_Alumnos ma, Grupos g, Grupos_has_Alumnos ga
        where ma.Materias_idMaterias=m.idMaterias AND a.idAlumnos = ma.Alumnos_idAlumnos
	   AND g.idGrupos = ga.Grupos_idGrupos AND a.idAlumnos = ga.Alumnos_idAlumnos AND a.idAlumnos=".htmlentities($_SESSION["ID"]));
    $qAlumnos=mysqli_query($database, $query);
    return $qAlumnos;
}

class MisCalificaciones
{
    function mostrarCalificaciones()
    {
        $result = obtenerDatos();
        if (mysqli_num_rows($result) > 0)
        {
            while ($row = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo '<td>' . $row['idGrupos'] . '</td>';
                echo '<td>' . $row['Descripcion'] . '</td>';
                echo '<td>' . $row['nombre_materia'] . '</td>';
                echo '<td>' . $row['calificacion'] . '</td>';
                echo '</tr>';
            }
        }
        else
        {
            echo "0 results";
        }
    }
}
?>