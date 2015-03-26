<?php
/**
 */
// Variables
    $nom = "Charlie"; 
    $pays = "Suisse"; 
    $ville = "Vevey"; 
    $operation = "";
?>
<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <title> Variables 1-005 </title>
    </head>
    <body>
        <?php
            echo "<strong>Bonjour  $nom !</strong><br> Vous habitez en  $pays à $ville";
            echo 'Bonjour <strong>', $nom, '</strong>!<br>Vous habitez à ', $ville, ' en ', $pays, '<br><br>'; 
            printf('Bonjour <strong>%s</strong>!<br>Vous habitez à %s en %s <br><br>', 
            $nom, $ville, $pays); 
            // %s est une fonction qui sert à indiquer la position des variables. Elle est remplacée par ceux-ci. Le 3ème %s sera remplacé par la 3ème variable. 
            
        ?>
    </body>
</html>  
