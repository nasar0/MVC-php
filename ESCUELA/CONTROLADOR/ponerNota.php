<?php 
    require_once("../MODELO/class-asignatura.php");
    require_once("../MODELO/class-alumno.php");
   
    if (isset($_POST["env"])) {
        if (isset($_POST["en1"])) {
            echo "se cambio todo correctamente visite el expediente ";
            echo'<a href="expediente.php">Expediente</a>';
            $asignaturas = new asignatura();
            $asignaturas->ponerNota($_POST['alumn'],$_POST["asig"],$_POST["nota"]);
        }else{
            ?>
            <form action="" method="post">
                <select name="alumn" id="">
                        
                        <?php 
                            $alumos = new alumno();
                            $alumn=$alumos->listarAlum($_POST['modulo']);
                            foreach ($alumn as $id=>$nombre) {
                                echo "<option value=".$id.">$nombre</option>";
                            }

                        ?>
                </select>
                <select name="asig">
                        <?php 
                            $asignaturas = new asignatura();
                            $asig=$asignaturas->listarAsig1($_POST["modulo"],$_POST["anno"]);
                            foreach ($asig as $id=>$asigN) {
                                echo "<option value=".$id.">$asigN</option>";
                            }
                        ?>
                </select>
                <input type="number" name="nota">
                <input type="hidden" name="env">
                <input type="submit" name="en1" value="Enviar">
            </form>
            <?php
            }
        }else{
        ?>
        <form action="?alumno" method="post">
            <select name="modulo" id="">
                    
                    <?php 
                        $asignaturas = new asignatura();
                        $asig=$asignaturas->listarAsig();
                        foreach ($asig as $id=>$asigN) {
                            echo "<option value=".$id.">$asigN</option>";
                        }

                    ?>
            </select>
            <select name="anno" id="">
                   <option value="1">1</option> 
                   <option value="2">2</option> 
            </select>
            <input type="submit" name="env" value="Enviar">
        </form>
        <?php
    }
?>
