<?php
    require_once("class-conexion.php");
    class con{
        private $db;
        private $id;
        private $nombre;
        private $modulo;
        private $anno; 

        public function __construct() {
            $this->db =new con(); 
            $this->id = $id;
            $this->nombre = $nombre;
            $this->modulo = $modulo;
            $this->anno = $anno;
        }
        public function listarAsig(){
            try {
                $sent ="SELECT DISTINCT modulo ,año FROM asignaturas "
                $consulta = $this->db->getCon()->prepare($sent);
                $consulta->bind_result($this->modulo,$this->anno);
                $consulta->execute();
                $asignaturas = [];
                while($consulta->fetch()){
                    $asignaturas[$anno] = $modulo;
                }
                return $asignaturas;
            } catch (Exeception $e) {
                echo "no se a podido listar ";
            }
        }
        public function ponerNota($id_alumn,$asig,$nota){
            try {
                $sent ="UPDATE alum_asig set nota=? where id_alumno=? and id_asig=?";
                $consulta=$this->db->getCon()->prepare($sent);
                $consulta->bind_param("dii",$nota,$id_alumn,$asig);
                $consulta->execute();
            } catch (Exeception $e) {
                echo " no se a podido introducir la nota "
            }
        }
        public function expediente(){
            try {
                $sent ="INSERT INTO alum_asig (id_alumno, id_asig, nota) VALUES (?,?,?)";
                $consulta=$this->db->getCon()->prepare($sent);
                $consulta->bind_param("iid",$id_alumn,$asig,$nota);
                $consulta->execute();
            } catch (Exeception $e) {
                echo " no se a podido introducir la nota "
            }
        }
        
    }






















?>