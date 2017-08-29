<?php 
class connect {
    private static $link;
    public static function connection ()
    {
        $host_db = "localhost";
        $user_db = "root";
        $pass_db = "martinez";
        $db_name = "mydb";

        $link = mysqli_connect($host_db, $user_db, $pass_db, $db_name);
        
        if(!$link){
            echo "Error: No se pudo conectar a mysql." . PHP_EOL;
            exit;
    }
    echo "Información de host: " . mysqli_get_host_info($link);
    return $link;
    }
    public static function close_connection(){
        mysqli_close($link);
    }
}
?>
