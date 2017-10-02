<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "martinez";
    $dbname = "mydb";

    // Se crea la conexion a base de datos
    $link = mysqli_connect($servername, $username, $password, $dbname);
    
    $query = sprintf("select a.idAlumnos, a.nombre, a.apellido, g.Descripcion, m.nombre_materia, ma.calificacion
from Alumnos a, Materias m, Materias_has_Alumnos ma, Grupos g, Grupos_has_Alumnos ga
where ma.Materias_idMaterias=m.idMaterias AND a.idAlumnos = ma.Alumnos_idAlumnos
	AND g.idGrupos = ga.Grupos_idGrupos AND a.idAlumnos = ga.Alumnos_idAlumnos AND m.idMaterias=".$_GET["idMaterias"]);
    $qAlumnos=mysqli_query($link, $query);
    $numAlumnos = mysqli_num_rows($qAlumnos);
    
    if($numAlumnos!=0)
    {
        /** Error reporting */
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        date_default_timezone_set('America/Mexico_City');
        
        if (PHP_SAPI == 'cli')
            die('This example should only be run from a Web Browser');
            
            /** Include PHPExcel */
            require '../libs/PHPExcel.php';
            
            
            // Create new PHPExcel object
            $objPHPExcel = new PHPExcel();
            
            // Set document properties
            $objPHPExcel->getProperties()->setCreator("Rolando Castillo")
            ->setLastModifiedBy("Rolando Castillo")
            ->setTitle("Office 2007 XLSX Test Document")
            ->setSubject("Office 2007 XLSX Test Document")
            ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
            ->setKeywords("office 2007 openxml php")
            ->setCategory("Test result file");
            
            
            $tituloReporte = "Instituto Tecnológico de Querétaro\nReporte de Alumnos";
            // Add some data
            $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', $tituloReporte)
            ->setCellValue('A2', 'ID')
            ->setCellValue('B2', 'NOMBRE')
            ->setCellValue('C2', 'APELLIDO')
            ->setCellValue('D2', 'GRUPO')
            ->setCellValue('E2', 'MATERIA')
            ->setCellValue('F2', 'CALIFICACION');
            
            $objPHPExcel->setActiveSheetIndex(0)
                ->mergeCells('A1:F1');
            
            // Miscellaneous glyphs, UTF-8
            $i=3;
            while ($row = mysqli_fetch_assoc($qAlumnos))
            {
                $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A'.$i, $row['idAlumnos'])
                ->setCellValue('B'.$i, $row['nombre'])
                ->setCellValue('C'.$i, $row['apellido'])
                ->setCellValue('D'.$i, $row['Descripcion'])
                ->setCellValue('E'.$i, $row['nombre_materia'])
                ->setCellValue('F'.$i, $row['calificacion']);
                $i++;
            }
            
            // Rename worksheet
            $objPHPExcel->getActiveSheet()->setTitle('Alumnos');
            
            
            // Set active sheet index to the first sheet, so Excel opens this as the first sheet
            $objPHPExcel->setActiveSheetIndex(0);
            
            
            // Redirect output to a client’s web browser (Excel5)
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="Reporte Alumnos.xls"');
            header('Cache-Control: max-age=0');
            // If you're serving to IE 9, then the following may be needed
            header('Cache-Control: max-age=1');
            
            // If you're serving to IE over SSL, then the following may be needed
            header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
            header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
            header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
            header ('Pragma: public'); // HTTP/1.0
            
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
            $objWriter->save('php://output');
            exit;
            mysqli_close($link);
    }
    else {
        print "no hay resultados";
    }

?>