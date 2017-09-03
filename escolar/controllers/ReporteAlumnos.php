<?php
require '../db/LinkDB.php';
require '../libs/fpdf/fpdf.php';
$database = LinkDB::connection();

$query = sprintf("select a.idAlumnos, a.nombre, a.apellido, g.Descripcion, m.nombre_materia, ma.calificacion
from Alumnos a, Materias m, Materias_has_Alumnos ma, Grupos g, Grupos_has_Alumnos ga
where ma.Materias_idMaterias=m.idMaterias AND a.idAlumnos = ma.Alumnos_idAlumnos 
	AND g.idGrupos = ga.Grupos_idGrupos AND a.idAlumnos = ga.Alumnos_idAlumnos");
$qAlumnos=mysqli_query($database, $query);

class PDF extends FPDF 
{
    function Header()
    {
        $this->Image('../views/assets/img/itqnn.jpg',10,8,33);
        $this->SetFont('Arial', 'B', 16);
        $this->Cell(80);
        $this->Cell(30,10,'Instituto Tecnológico de Querétaro',0,0,'C');
        $this->Ln();
        $this->Cell(80);
        $this->Cell(30,10,'Reporte de Calificaciones',0,0,'C');
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
                $this->Cell(30,7,$row["idAlumnos"],1);
                $this->Cell(30,7, $row["nombre"],1);
                $this->Cell(30,7, $row["apellido"],1);
                $this->Cell(30,7, $row["Descripcion"],1);
                $this->Cell(30,7, $row["nombre_materia"],1);
                $this->Cell(30,7, $row["calificacion"],1);
                $this->Ln();
            }
    }
}
$pdf = new PDF();
$header = array('ID', 'NOMBRE', 'APELLIDO', 'GRUPO', 'MATERIA', 'CALIFICACION');

$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->BasicTable($header,$qAlumnos);
$pdf->Output();
?>