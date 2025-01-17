<?php 

    public function notas(){
        ?>
        <form action="" method="post">
            <select name="autor" id="">
                    
                    <?php 
                        foreach ($listaAutores as $id=>$autor) {
                            echo "<option value=".$id.">$autor</option>";
                        }

                    ?>
            </select>
            <select name="autor" id="">
                
                <?php 
                     foreach ($listaAutores as $id=>$autor) {
                        echo "<option value=".$id.">$autor</option>";
                    }

                ?>
            </select>
            <input type="submit" name="env">
        </form>
        <?php
    }

	
?>