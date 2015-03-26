<?php
/**
 */
// Variables
    $nom = "Gaston Lagaffe"; 
    $var1 = 10; 
    $var2 = 3.3; 
    $operation = 0;
?>
<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <title> Variables </title>
    </head>
    <body>
        <?php
            echo "<strong>Bonjour $nom !</strong><br>";
            $operation = $var1 + $var2;
            echo "var1 + var2 = $operation<br>"; 
            $operation = $var1 % $var2;
            echo "var1 % var2 = $operation<br>"; 
            $operation = round($var1 / $var2);
            echo "var1 / var2 = $operation<br>"; 
            $operation = $var1 + 20;
            echo "Incrémentation de 20 pour var1 = $operation<br>";
            $operation = $var1 + 1;
            echo "Incrémentation de 1 pour var1 = $operation<br>";
            $operation = (int)$var2;
            echo "var1 vaut la valeur entière de var2 = $operation<br>";
        ?>
    </body>
</html> 
