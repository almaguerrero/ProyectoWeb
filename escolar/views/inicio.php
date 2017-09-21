<?php
require 'menu.php';
?>
<!DOCTYPE html>

<html lang="es">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<title>Bienvenido</title>

    <!-- boostrap -->
    <link href="../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

     <!-- Normalize CSS -->

	<link rel="stylesheet" href="css/normalize.css">

    

     <!-- Materialize CSS -->

	<link rel="stylesheet" href="css/materialize.min.css">

    

     <!-- Material Design Iconic Font CSS -->

	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">

    

    <!-- Malihu jQuery custom content scroller CSS -->

	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">

    

    <!-- Sweet Alert CSS -->

    <link rel="stylesheet" href="css/sweetalert.css">

    

    <!-- MaterialDark CSS -->

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	

	<style>
	.mySlides {display:none}
	.w3-left, .w3-right, .w3-badge {cursor:pointer}
	.w3-badge {height:13px;width:13px;padding:0}
	</style>
	
</head>

<body>

    <!-- Nav Lateral -->

    <section class="NavLateral full-width">

        <div class="NavLateral-FontMenu full-width ShowHideMenu"></div>

        <div class="NavLateral-content full-width">

            <header class="NavLateral-title full-width center-align">

                TecNM <i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu"></i>

            </header>

            <figure class="full-width NavLateral-logo">

                <img src="assets/img/itqnn.jpg" alt="material-logo" class="responsive-img center-box">

                <figcaption class="center-align">Instituto Tecnológico de Querétaro</figcaption>

            </figure> 

            <div class="NavLateral-Nav">

                <ul class="full-width">
                    
                           <?php
								
								menu::defineMenu();
								
							?>
                </ul>

            </div>  

        </div>  

    </section>



    <!-- Page content -->

    <section class="ContentPage full-width">

        <!-- Nav Info -->

  <div class="ContentPage-Nav full-width">

            <ul class="full-width">
                <li class="btn-MobileMenu ShowHideMenu"><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu"><i class="zmdi zmdi-more-vert"></i></a></li>

                <li><figure><img src="assets/img/th100BL4HI.jpg" alt="UserImage"></figure></li>
                <li style="padding:0 20px;">
                <?php 
					session_start();
					echo $_SESSION["usuarioActual"];
				?>
				</li>
				<li style= "padding:0 20px;"><?php menu::nombrarCargo();?></li>
                <li><a href="../controllers/exitSession.php" class="tooltipped waves-effect waves-light btn-ExitSystem" data-position="bottom" data-delay="50" data-tooltip="Logout"><i class="zmdi zmdi-power"></i></a></li>
                
            </ul>   

        </div>
	     <!--Bienvenido-->
        <div class="container">
            <div class="row">
                <h1 class="center-align">B I E N V E N I D O</h1>
                <hr>
                <div class="col s12">
                    <blockquote>
                        <h4><p>Tlalticpac Toquichtin Tiez</p></h4>
 							<p aling = right>Es un proverbio náhuatl basado en la obra literaria "Omnibus" que es parte del acervo de la poesía y 
							filosofía náhuatl y que significa:</p>
 
						<i><p aling = center>La tierra será como sean los hombres.</p></i>
                    </blockquote>
                </div>
            </div>
        </div>
		<br><br>
		<!--Slider-->
	 <div class="container">
            <div class="row">
               <hr>
                <div class="col s12">
                    <div class="w3-content w3-display-container" style="max-width:800px">
						  <img class="mySlides" src="assets/img/1.jpg" style="width:100%">
						  <img class="mySlides" src="assets/img/cabogata2ok-600x200.jpg" style="width:100%">
                           <img class="mySlides" src="assets/img/Glaciar16_600x200.jpg" style="width:100%">
						  
					 <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
					 <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
					 <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
						    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
						    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
						    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
						  </div>
						</div>
                </div>
           
        </div>
        <!-- Footer -->   

            <div class="NavLateralDivider"></div>

            <div class="footer-copyright">

                <div class="container center-align">

                    © 2017 <a>Pedro - Alma - Rolando</a>

                </div>

            </div>


    </section>

    

    <!-- Sweet Alert JS -->

    <script src="js/sweetalert.min.js"></script>

    

    <!-- jQuery -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

	<script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>

    

    <!-- Materialize JS -->

	<script src="js/materialize.min.js"></script>

    

    <!-- Malihu jQuery custom content scroller JS -->

	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

    

    <!-- MaterialDark JS -->

	<script src="js/main.js"></script>
	    
	    
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
          showDivs(slideIndex += n);
        }

        function currentDiv(n) {
          showDivs(slideIndex = n);
        }

        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          if (n > x.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
             dots[i].className = dots[i].className.replace(" w3-white", "");
          }
          x[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " w3-white";
        }
</script>

</body>

</html>
