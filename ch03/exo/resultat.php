<?php
/**
 * Affiche les données entrées par l'utilisateur
 *
 * @author: LR
 * @date : 2015.04.30
 */
 // variables
// à ne plus vraiment utilisé

$prixMaison = $_POST['prix']; 

$fondsPropres = $_POST['fonds']; 

// c'est plus sécurisé

$pv = filter_input(INPUT_POST, 'pv', FILTER_SANITIZE_NUMBER_FLOAT); 

$fdspropres = filter_input(INPUT_POST, 'fdspropres', FILTER_SANITIZE_NUMBER_FLOAT); 

$montantMin = $prixMaison * 0.2; 

//$montantPret = $prixMaison * 0.5;

$pret = $prixMaison - $fondsPropres; 

$fondsPropresMin = $prixMaison * (20/100); 

// TRUE si les fonds propres sont suffisants, FALSE dans le cas contraire
$fondsPropresSuffisants = $fondsPropres >= $fondsPropresMin;

$rang1 = $pret * (20/100); 

$rang2 = $pret * (80/100); 

$interet1 = $rang1 * (3.5/100); 

$interet2 = $rang2 * (2.5/100); 

$fonds_propres_ok = TRUE; 

$pv_ok = TRUE; 


?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title> Exercice 3-001</title>
  </head>
  <body>
      <?php 
        if ($fondsPropresSuffisants) {
            echo "Montant de l'emprunt : ", $pret, "<br>"; 
            echo "Montant du premier rang : ", $rang1, "<br>"; 
            echo "Montant du second rang : ", $rang2, "<br>"; 
            echo "Intérêts du premier rang à un taux de 3.5% : ", $interet1, "<br>"; 
            echo "Intérêts du second rang à un taux de 2.5% : ", $interet2, "<br>"; 
            
        } else {
            echo "Vous ne disposez pas des fonds propres nécessaires";
        }
        
        ?>

  </body>
</html> 
