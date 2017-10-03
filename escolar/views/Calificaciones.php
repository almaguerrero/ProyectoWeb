<?php
require '../controllers/misCalificacionesAlumno.php';
?>
<html>
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="css/calificaciones.css">
	<title>Aministración</title>
	
</head>
<body>

      <div class="w3-container w3-red ">
       <h1 class="w3-center w3-animate-left">Lista de Calificaciones</h1>
      </div>

		<div class="w3-container">

			<div class="w3-border">
				 <div class="w3-container w3-margin">
                  	  <table class="w3-table-all">
   						 <thead>
      						<tr class="w3-teal">
       						 <th>ID</th>
				             <th>GRUPO</th>
				             <th>MATERIA</th>
				             <th>CALIFICACION</th>
     						</tr>
    					</thead>
                      		 <tbody>
								<?php
										MisCalificaciones::mostrarCalificaciones();
								?>
                      		 </tbody>
        		      </table>
       </div>
       					 <form action="../controllers/misCalificacionesReporte.php" target="_Blank" method="POST">
            <button type="submit" class="waves-effect waves-teal btn-flat">Imprimir &nbsp; <i class="zmdi zmdi-mail-send"></i></button>
      					  </form>
                </div>
			</div>
				
</body>
</html>
