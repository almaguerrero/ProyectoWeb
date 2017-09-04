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
class PDF extends FPDF
{
    function Header()
    {
        $this->Image('../views/assets/img/itqnn.jpg',10,8,33);
        $this->SetFont('Arial', 'B', 16);
        $this->Cell(80);
        $this->Cell(30,10,'Calificaciones',0,0,'C');
        $this->Ln(40);
    }
    function BasicTable($header, $data)
    {
        // Cabecera
        foreach($header as $col)
            $this->Cell(30,7,$col,1);
            $this->Ln();
            while ($row = mysqli_fetch_assoc($data))
            {
                $this->SetFont('Arial','',10);
                $this->Cell(30,7,$row["idGrupos"],1);
                $this->Cell(30,7, $row["Descripcion"],1);
                $this->Cell(30,7, $row["nombre_materia"],1);
                $this->Cell(30,7, $row["calificacion"],1);
            }
    }
}
$pdf = new PDF();
$header = array('ID GRUPO', 'GRUPO', 'MATERIA', 'CALIFICACION');

$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->BasicTable($header,obtenerDatos());
$pdf->Output();
?>
