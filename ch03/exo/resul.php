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
// J'utilise cette manière de faire car elle est plus sécurisée que la technique de GET_POST 
	//$chiffre = filter_input(INPUT_POST, 'chiffre', FILTER_SANITIZE_NUMBER_FLOAT); 
    $chiffre = $_POST['chiffre']; // essai car n'arrive pas à récupérer le chiffre saisi
	
// Je vais créer une variable pour la table de multiplication et une pour celle de l'addition.
	$tableM = 0; 
	$tableA = 0;  
    $i = 0; 
    $y = 0; 
    $cal = 0; 

// Je construis mes boucles imbriquées, où vont se passer toutes les opérations afin d'afficher les tables.
	echo '<table border=1 style="width:100%">'; //début de la table

	echo '<tr>'; //début de la ligne d'entete
	echo '<th>x</th>'; //affiche x pour la première colonne
	for($i=0; $i < $chiffre; $i++){ //$i représente le numéro de la colonne
		echo '<th>'.$i.'</th>'; //affiche le numéro de la colonne en commencant par 0
	}
	echo '</tr>'; //fin de la ligne d'entete

	for($i=0; $i < $chiffre; $i++){ //$i représente le numéro de la ligne
		echo '<tr>'; //début de la ligne
		echo '<th>'.$i.'</th>'; //affiche le numéro de la ligne en commencant par 0
		
		for($y=0; $y < $chiffre; $y++){
			echo '<td>'.$i*$y.'</td>';
            echo $conversion = base_convert=($cal, 10, $chiffre); 
		}
		
		echo '</tr>'; //fin de la ligne
	}

	echo '</table>'; //fin de la table
?> 
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title> Test pratique </title>
	</head>
	<body>
		<!-- J'écris ci-dessous le formulaire où l'utilisateur pourra rentrer son chiffre!-->
		<h1> Voici vos tables </h1>
        <p> Table de multiplication : <?= $tableM?>  </p>
        <p> Table d'addition </p>
	</body>
</html> 
