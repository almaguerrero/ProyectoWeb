
<?php
class LinkDB
{
	private static $conn;
	public static function connection ()
	{
		$servername = "localhost";
		$username = "root";
		$password = "martinez";
		$dbname = "mydb";
		
		// Se crea la conexion a base de datos
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// si falla la conecion
		if (!$conn) {
			
			die("Connection failed: " . mysqli_connect_error());
		}
		return $conn;
	}
	//desconecta la base de datos
	public static function desconnection()
	{
		$conn->close();
	}
}

?>