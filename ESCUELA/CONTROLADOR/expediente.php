<?php
    require_once("../MODELO/class-asignatura.php");
    require_once("../MODELO/class-alumno.php");
    

    
    function verExpediente(){
        $alumn = new alumno();
        $array=$alumn->expediente($_POST["alumn"]);
        require_once("../VISTA/EXPEDIENTE.PHP");
        

    }

    function pordefecto(){
        require_once("../MODELO/class-alumno.php");
        $alumos = new alumno();
        $alumn=$alumos->listarAlum1();
        require_once("../VISTA/EXPEDIENTE.PHP");
    }

    if(isset($_REQUEST['action'])){
        $action = $_REQUEST['action'];
        $action();
    }else{
        pordefecto();
    }





?>