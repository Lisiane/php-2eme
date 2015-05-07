<?php
/**
 * Affiche les données entrées par l'utilisateur
 *
 * @author: LR
 * @date : 2015.04.30
 */
 // 

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title> Exercice 3-001 </title>
  </head>
  <body>
      <h1> Calcul d'intérêt</h1>
        <form name="form1" method="post" action="resultat.php">
            <p> Prix de vente de la maison de vos rêves</p>
            <input type="number" name="prix">
            <p> Fonds propres dont vous disposez</p>
            <input type="number" name="fonds">
            <input type="submit" name="Submit" value="Calculer">
        </form>

  </body>
</html> 
