<?php
    require_once("class-conexion.php");
    class alumno{
        private $db;
        private $id;
        private $dni;
        private $nombre;
        
        public function __construct() {
            $this->db =new con(); 
            $this->id = 0;
            $this->dni = "";
            $this->nombre = "";
        }
        public function listarAlum($asig){
                $sent =" select DISTINCT a.id,a.nombre from alumnos a , asignaturas aa ,alum_asig asi WHERE a.id=asi.id_alumno and aa.id=asi.id_asig and aa.modulo = ?";
                $consulta = $this->db->getCon()->prepare($sent);
                $consulta->bind_result($this->id,$this->nombre);
                $consulta->bind_param("s",$asig);
                $consulta->execute();
                $alumnos = [];
                while($consulta->fetch()){
                    $alumnos[$this->id] = $this->nombre;
                }
                return $alumnos;
        }
        public function listarAlum1(){
            $sent =" select DISTINCT a.id,a.nombre from alumnos a ";
            $consulta = $this->db->getCon()->prepare($sent);
            $consulta->bind_result($this->id,$this->nombre);
            $consulta->execute();
            $alumnos = [];
            while($consulta->fetch()){
                $alumnos[$this->id] = $this->nombre;
            }
            return $alumnos;
        }
        public function expediente($idalum){
            $sent =" SELECT s.nombre , g.nombre ,g.modulo ,g.anno ,mg.nota FROM asignaturas g ,alumnos s,alum_asig mg WHERE mg.id_alumno=s.id AND mg.id_asig=g.id and s.id=?;";
            $consulta = $this->db->getCon()->prepare($sent);
            $consulta->bind_result($alumno_nombre, $asignatura_nombre, $modulo, $anno, $nota);
            $consulta->bind_param("i",$idalum);
            $consulta->execute();
            $array= array();
            while($consulta->fetch()){
                $array[]=["Alumno"=> $alumno_nombre, "Asignatura" => $asignatura_nombre," Módulo"=> $modulo, "Año"=> $anno, "Nota"=> $nota];
            }

            $consulta->close();

            return $array;
        }
        
        
    }






















?>