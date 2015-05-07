<?php
/* ---------------------------------------------------------------------
 * Test pratique                         
 * Nom du fichier: formulaire.php
 * Auteur: LR 
 * Date: 04 mai 2015
 * Description: Un utilisateur entrez un chiffre de 2 à 16 et l'application va lui permettre d'accéder à une table de multiplication et une table d'addition pour la base de ce chiffre. L'application doit également traiter les cas d'erreurs.                            
 * ---------------------------------------------------------------------
 */
// Déclaration des variables
//  
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title> Test pratique </title>
	</head>
	<body>
		<!-- J'écris ci-dessous le formulaire où l'utilisateur pourra rentrer son chiffre!-->
		<h1> Des mathématiques en passant par le PHP </h1>
		<form name="formulaire" method="post" action="resul.php">
			<p> Entrez un chiffre de 2 à 16 : </p>
			<input type="number" name="chiffre">
		</form>
	</body>
</html> 
