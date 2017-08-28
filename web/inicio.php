<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Escuela Secundaría Técnica Número 1</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/clase2.css" rel="stylesheet">

  </head>

  <body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- NAVBAR LADO DERECHO -->
        <div class="col-md-3 text-right">
          <ul class="nav navbar-nav navbar-right">
            <?php
            // SI $usuario está vacío ejecutamos este trozo de código
            if (!$usuario) {
              ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Iniciar Sesión <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <form class="navbar-form" action="loginA.php" method="POST">

                  Alumnos

                  <li><div></div></li>

                    <li><div class="form-group">
                    <input type="text" class="form-control" placeholder="Alumno" name="login">
                  </div></li>

                  <li role="separator" class="divider"></li>

                  <li><div class="form-group">
                    <input type="password" class="form-control" placeholder="Clave" name="password">
                  </div></li>

                  <li role="separator" class="divider"></li>
                  <li class=" text-center"><button type="submit" class="btn btn-default" name="enviar" value="LOGIN">Ingresar</button></li>

                </form>

                <form class="navbar-form" action="loginM.php" method="POST">

                  Maestros

                  <li><div></div></li>

                    <li><div class="form-group">
                    <input type="text" class="form-control" placeholder="Maestros" name="login">
                  </div></li>

                  <li role="separator" class="divider"></li>

                  <li><div class="form-group">
                    <input type="password" class="form-control" placeholder="Clave " name="password">
                  </div></li>

                  <li role="separator" class="divider"></li>
                  <li class=" text-center"><button type="submit" class="btn btn-default" name="enviar" value="LOGIN">Ingresar</button></li>
                  
                </form>
                </ul>
              </li>
  
     <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  Directivos <span class="caret"></span></a>
                <ul class="dropdown-menu">
                

                <form class="navbar-form" action="loginD.php" method="POST"> 
                  <li><div></div></li>

                    <li><div class="form-group">
                    <input type="text" class="form-control" placeholder="Directivos" name="login">
                  </div></li>

                  <li role="separator" class="divider"></li>

                  <li><div class="form-group">
                    <input type="password" class="form-control" placeholder="Contraseña" name="password">
                  </div></li>

                  <li role="separator" class="divider"></li>
                  <li class=" text-center"><button type="submit" class="btn btn-default" name="enviar" value="LOGIN">Ingresar</button></li>
                  
                </form>
                </ul>
              </li>

                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  Coordinador <span class="caret"></span></a>
                <ul class="dropdown-menu">
                

                <form class="navbar-form" action="loginC.php" method="POST">
                  <li><div></div></li>

                    <li><div class="form-group">
                    <input type="text" class="form-control" placeholder="Coordinador" name="login">
                  </div></li>

                  <li role="separator" class="divider"></li>

                  <li><div class="form-group">
                    <input type="password" class="form-control" placeholder="Contraseña" name="password">
                  </div></li>

                  <li role="separator" class="divider"></li>
                  <li class=" text-center"><button type="submit" class="btn btn-default" name="enviar" value="LOGIN">Ingresar</button></li>
                  
                </form>
                </ul>
              </li>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </div>
    </nav>
    <!--  Hasta aquí la barra de navegación. -->
  </body>
</html>