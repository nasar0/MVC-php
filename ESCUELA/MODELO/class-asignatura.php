<?php
    require_once("class-conexion.php");
    class asignatura{
        private $db;
        private $id;
        private $nombre;
        private $modulo;
        private $anno; 

        public function __construct() {
            $this->db =new con(); 
            $this->id = 0;
            $this->nombre = "";
            $this->modulo = "";
            $this->anno = 0;
        }
        public function listarAsig(){
            
            $sent ="SELECT DISTINCT modulo FROM asignaturas; ";
            $consulta = $this->db->getCon()->prepare($sent);
            $consulta->bind_result($this->modulo);
            $consulta->execute();
            $asignaturas = [];
            while($consulta->fetch()){
                $asignaturas[$this->modulo] = $this->modulo;
            }
            return $asignaturas;
           
        }
        public function listarAsig1($md,$annoU){
            
            $sent ="SELECT DISTINCT id ,nombre FROM asignaturas where modulo=? and anno=? ";
            $consulta = $this->db->getCon()->prepare($sent);
            $consulta->bind_result($this->id,$this->modulo);
            $consulta->bind_param("ss",$md,$annoU);
            $consulta->execute();
            $asignaturas = [];
            while($consulta->fetch()){
                $asignaturas[$this->id] = $this->modulo;
            }
            return $asignaturas;
           
        }
        public function ponerNota($id_alumn,$asig,$nota){
            try {
                $sent ="UPDATE alum_asig set nota=? where id_alumno=? and id_asig=?";
                $consulta=$this->db->getCon()->prepare($sent);
                $consulta->bind_param("dii",$nota,$id_alumn,$asig);
                $consulta->execute();
            } catch (Exeception $e) {
                echo " no se a podido introducir la nota ";
            }
        }
        public function expediente(){
            try {
                $sent ="INSERT INTO alum_asig (id_alumno, id_asig, nota) VALUES (?,?,?)";
                $consulta=$this->db->getCon()->prepare($sent);
                $consulta->bind_param("iid",$id_alumn,$asig,$nota);
                $consulta->execute();
            } catch (Exeception $e) {
                echo " no se a podido introducir la nota ";
            }
        }
        
    }






















?>