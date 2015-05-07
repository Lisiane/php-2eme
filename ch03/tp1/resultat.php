<?php 
/* ---------------------------------------------------------------------
 * Test pratique                         
 * Nom du fichier: resultat.php
 * Auteur: LR 
 * Date: 04 mai 2015
 * Description: Cette page va récolter le chiffre que l'utilisateur aura rentré précédemment et ainsi pouvoir lui afficher la table de multiplication et celle d'addition pour la base de son chiffre. 
 * ---------------------------------------------------------------------
 */
// Déclaration des variables

    $calcul = 0; 
    $i = 0;
    $y = 0; 
    $nbSaisi = filter_input(INPUT_POST, 'nbSaisi', FILTER_SANITIZE_NUMBER_INT); // je sécurise le champ de saisie

// j'impose une condition pour que l'utilisateur ne rentre pas de faux chiffres
        
    if ($nbSaisi < 2 || $nbSaisi > 16) {
        echo 'Ce chiffre est interdit, veuillez rentrer un chiffre entre 2 et 16. ' ; 
    } else {


        // Je commcence la table de multiplication

        echo 'Votre table de multiplication :';

        echo '<table border=1 style="width:100%">'; //début de la table
        echo '<tr>'; //début de la ligne d'entete
        echo '<th>x</th>'; //affiche x pour la première colonne

        for($i=0; $i < $nbSaisi; $i++){ //$i représente le numéro de la colonne
            echo '<th>'.$i.'</th>'; //affiche le numéro de la colonne en commencant par 0
        }
        echo '</tr>'; //fin de la ligne d'entête

        for($i=0; $i < $nbSaisi; $i++){ //$i représente la numéro de la ligne
            echo '<tr>'; //début de la ligne
            echo '<th>'.$i.'</th>'; //affiche le numéro de la ligne en commencant par 0
            
            for($y=0; $y < $nbSaisi; $y++) {
                $calcul = base_convert($i * $y, 10, $nbSaisi);
                echo "<td>$calcul</td>";
            }
            
            echo '</tr>'; //fin de la ligne
        }

        echo '</table>'; //fin de la table



        // Je commence la table d'addition

        echo 'Votre table d\'addition:';

        echo '<table border=1 style="width:100%">'; //début de la table
        echo '<tr>'; //début de la ligne d'entete
        echo '<th>+</th>'; //affiche x pour la première colonne

        for($i=0; $i < $nbSaisi; $i++){ //$i représente le numéro de la colonne
            echo '<th>'.$i.'</th>'; //affiche le numéro de la colonne en commencant par 0
        }
        echo '</tr>'; //fin de la ligne d'entête

        for($i=0; $i < $nbSaisi; $i++){ //$i représente la numéro de la ligne
            echo '<tr>'; //début de la ligne
            echo '<th>'.$i.'</th>'; //affiche le numéro de la ligne en commencant par 0
            
            for($y=0; $y < $nbSaisi; $y++) {
                $calcul = base_convert($i + $y, 10, $nbSaisi);
                echo "<td>$calcul</td>";
            }
            
            echo '</tr>'; //fin de la ligne
        }

        echo '</table>'; //fin de la table

    }

?>
