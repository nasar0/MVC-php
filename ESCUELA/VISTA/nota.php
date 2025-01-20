<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    require_once("../MODELO/class-asignatura.php");
    require_once("../MODELO/class-alumno.php");
   
    if (isset($alumn)) {
            ?>
            <form action="../CONTROLADOR/ponerNota.php?action=cambiarNota" method="post">
                <select name="alumn" id="">
                        <?php 
                            foreach ($alumn as $id=>$nombre) {
                                echo "<option value=".$id.">$nombre</option>";
                            }
                        ?>
                </select>
                <select name="asig">
                        <?php 
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
        }else{
        ?>
        <form action="../CONTROLADOR/ponerNota.php?action=formAlumn" method="post">
            <select name="modulo" id="">
                    <?php 
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

</body>
</html>