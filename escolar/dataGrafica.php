<?php 
    include 'libs/charts/charts.php';
    include 'db/LinkDB.php';
    
    $link = LinkDB::connection();
    
    $query = sprintf("select nombre_materia from Materias");
    $qAlumno = sprintf("select nombre FROM Alumnos");
    
    $qData = sprintf("select ma.calificacion 
from Alumnos a, Materias m, Materias_has_Alumnos ma, Grupos g, Grupos_has_Alumnos ga
where ma.Materias_idMaterias=m.idMaterias AND a.idAlumnos = ma.Alumnos_idAlumnos 
	AND g.idGrupos = ga.Grupos_idGrupos AND a.idAlumnos = ga.Alumnos_idAlumnos");
    
    $chart['chart_data'][0][0] = "";
    
    $result=mysqli_query($link, $query);
    $alumnos = mysqli_query($link, $qAlumno);
    $data = mysqli_query($link, $qData);
    $num = mysqli_num_rows($result);
    $i=1; $j=1; $k=1;
    while ($row = mysqli_fetch_assoc($result))
    {
        $chart['chart_data'][$i][0]= $row['nombre_materia'];
        while ($col =mysqli_fetch_assoc($data) )
        {
            if($j<=$num){
                $chart['chart_data'][$i][$j]=$col['calificacion'];
            }
            $j++;
            if($j>$num){
                $j=1;
                break;
            }
        }
        $i++;
    }
    $i=1;
    while ($row = mysqli_fetch_assoc($alumnos))
    {
        $chart['chart_data'][0][$i]= $row['nombre'];
        $i++;
    }
    $link->close();
    //send the new data to charts.swf
    SendChartData ( $chart );
?>


