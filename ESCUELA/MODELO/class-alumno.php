<?php
    require_once("class-conexion.php");
    class con{
        private $db;
        private $id;
        private $dni;
        private $nombre;
        
        public function __construct() {
            $this->db =new con(); 
            $this->id = $id;
            $this->dni = $dni;
            $this->nombre = $nombre;
        }
        public function listarAlum(){
            try {
                $sent =" select * from alumnos"
                $consulta = $this->db->getCon()->prepare($sent);
                $consulta->bind_result($this->id,$this->nombre);
                $consulta->execute();
                $alumnos = [];
                while($consulta->fetch()){
                    $alumnos[$id] = $nombre;
                }
                return $alumnos;
            } catch (Exeception $e) {
                echo "no se a podido listar ";
            }
        }
        
    }






















?>