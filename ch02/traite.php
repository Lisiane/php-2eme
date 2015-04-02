 <?php
/**
 * Affiche les données entrées par l'utilisateur
 *
 * @author: LR
 * @date : 2015.03.19
 */
 // Variables
    $nom = ''; 
    
    if (! empty($_GET['nom'])) { 
    
    $nom = $_GET['nom']; 
} else {

    // si on arrive ici, c'est que $_GET['nom'] n'est pas defini. 
    // ce qui veut dire quôn vient peut-être de post.html
    if(! empty($_POST['nom'])) {
    $nom = $_POST['nom']; 
} else { 
    
    $nom = 'nom defini'; 
}
}

?> 

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title> Exercice 3 </title> 
    
  </head>
  <body>
    Votre nom est : <?= $nom?> 
  </body>
</html>

 
