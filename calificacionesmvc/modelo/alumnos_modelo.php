<?php

    class alumnos_modelo {

    private $db;
    private $alumnos;

    public function __construct(){
        require_once("modelo/Conectar.php");
        $this->db=Conectar::conexion();
        $this->alumnos=array();
    }
    public function get_alumnos(){
        if($consulta=$this->db->query("Select * from Usuarios ")){
           //echo "datos cargados"; //sólo se usa para comprobar que si se cargaron los datos
        } else{
        echo "nel";
        };

        while($filas=$consulta->fetch_assoc()){
           $this->alumnos[]=$filas;
        }
        return $this->alumnos;
    }

    /* public function agrega_alumnos($data){

        $sql ="insert into usuario (nombre_largo, usuario, contrasena, id_tipousuario) values (?,?,?,1)".$data->__GET['nombre_laro'];
        $consulta=$this->db->query($sql)


     }*/
}

?>
