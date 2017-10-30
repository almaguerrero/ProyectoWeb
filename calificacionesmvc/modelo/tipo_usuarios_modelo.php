<?php
    class tipo_usuarios_modelo {

    private $db;
    private $tipos;

    public function __construct(){
        require_once("../modelo/conectar.php");
        $this->db=Conectar::conexion();
        $this->tipos=array();

    }

    public function get_tipos_usuarios(){
        if($consulta=$this->db->query("select * from tipo_usuario")){
        echo "se cargaron los datos";

        }else{
            echo "Error: " . PHP_EOL."<br>";

        };

        while($filas=$consulta->fetch_assoc()){
                   $this->tipos[]=$filas;
                }
                return $this->tipos;


    }



    }


?>