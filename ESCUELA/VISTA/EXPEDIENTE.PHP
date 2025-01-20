<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../CONTROLADOR/expediente.php?action=verExpediente" method="post">
                <select name="alumn" id="">
                        <?php 
                            foreach ($alumn as $id=>$nombre) {
                                echo "<option value=".$id.">$nombre</option>";
                            }
                        ?>
            </select>
            <input type="submit" name="env" value="Enviar">
        </form>
    <?php
    if (isset($array)) {
        foreach ($array as $asignatura) {
            foreach ($asignatura as $key => $value) {
                echo $key."->".$value;
            }
        }
    }
        
    ?>    
</body>
</html>