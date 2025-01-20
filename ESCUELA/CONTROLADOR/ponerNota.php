<?php 
    require_once("../MODELO/class-asignatura.php");
    require_once("../MODELO/class-alumno.php");
    /*
*/

    function listarModulo(){
        $asignaturas = new asignatura();
        $asig=$asignaturas->listarAsig();
        require_once('../VISTA/nota.php');
    }

    function formAlumn(){
        $asignaturas = new asignatura();
        $asig=$asignaturas->listarAsig1($_POST["modulo"],$_POST["anno"]);
        $alumos = new alumno();
        $alumn=$alumos->listarAlum($_POST['modulo']);
        
        require_once('../VISTA/nota.php');
    }
    
    function cambiarNota(){
        echo "se cambio todo correctamente visite el expediente ";
        echo'<a href="expediente.php">Expediente</a>';
        $asignaturas = new asignatura();
        $asignaturas->ponerNota($_POST['alumn'],$_POST["asig"],$_POST["nota"]);
    }

    if(isset($_REQUEST['action'])){
        $action = $_REQUEST['action'];
        $action();
        
    }else{
        listarModulo();
    }

    
?>
