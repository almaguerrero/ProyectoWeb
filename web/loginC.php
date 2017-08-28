<?php

// DEFINIREMOS las constantes para conectarnos a Mysql
define('servidor', 'localhost');
define('usuariodb', 'root'); 
define('usuariopass', 'root'); 
define('nombrebase', 'mydb');

// Inicio del proceso Try... Catch.


try {
	// Instanciaremos una nueva conexion PDO que abrirá nuestra DB
	$base = new PDO('mysql:host='.servidor.'; dbname='.nombrebase, usuariodb, usuariopass);
	$base -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// le asignamos una variable a la consulta
	//nyan: se debe modificar la tabla de usuarios a autores o agregar usuarios a la base de
	$sql = "SELECT * FROM empresas WHERE nombre = :login AND clave = :password";

	//$sql = "SELECT * FROM empresas WHERE nombreE = :login AND claveE= :password";
	// Nótese que estamos utilizando :login y :password en los campos WHERE. 
	// Estas son  las variables que llamaremos luego y que obtenemos a traves del método POST

	// Declaramos las variables que obtenemos desde el formulario de login
	$login = htmlentities(addslashes($_POST['login']));
	$password = htmlentities(addslashes($_POST['password']));

	// Utilizamos $resultado para almacenar la consulta preparada
	$resultado = $base -> prepare($sql);

	// Utilizaremos bindValue() en esta ejecución ya que no necesitamos manejar ninguna variable, 
	// solo asignar un objeto específico

	$resultado -> bindValue(":login", $login);
	$resultado -> bindValue(":password", $password);

	// Ejecutamos la consulta
	$resultado -> execute();

	// Creamos una variable y le asignamos la cantidad de resultados que extrajo la consulta
	$numregistros = $resultado -> rowCount();

	// Y generamos un IF para ver si nos arroja algún resultado y en base a ello tomar una decisión

if ($numregistros!=0) { 				// SI $numregistros NO ES IGUAL a 0 entonces hacemos esto
		session_start();			// Iniciamos una sesión

		$_SESSION['usuario2']=$_POST['login'];	// Y le decimos a PHP que la SESSION debe ser asignada al 
							// que ingresó por el método POST con 'login'
		header('location:index.php');		// Con esta funcion redireccionamos al usuario logueado al archivo index.php

	} else {		// PERO SI $numregistros ES IGUAL A 0 entonces...

		header('location:index.php');		// Devolvemos al usuario denegado a index.php 
							// pero volverá a su estado original, es decir, como invitado

	}


} catch (Exception $e) {
	die("Se ha detectado un error en: " .$e->getMessage()); // Matamos al proceso con DIE y le pedimos que nos muestre la EXCEPTION a traves de getMessage	
}

?>