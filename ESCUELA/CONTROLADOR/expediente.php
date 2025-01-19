<?php
    require_once("../MODELO/class-asignatura.php");
    require_once("../MODELO/class-alumno.php");

    if (isset($_POST["env"])) {
        $alumn = new alumno();
        $alumn->expediente($_POST["alumn"]);
    }else{
        ?>
        <form action="" method="post">
                <select name="alumn" id="">
                        
                        <?php 
                            $alumos = new alumno();
                            $alumn=$alumos->listarAlum1();
                            foreach ($alumn as $id=>$nombre) {
                                echo "<option value=".$id.">$nombre</option>";
                            }

                        ?>
            </select>
            <input type="submit" name="env" value="Enviar">
        </form>
        <?php
    }








?>