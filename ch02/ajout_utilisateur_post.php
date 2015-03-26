<?php
/**
 * Affiche les données entrées par l'utilisateur
 *
 * @author: LR
 * @date : 2015.03.19
 */
 // Variables
 //  
    $login = $_POST['login']; 
    $mot = $_POST['motdepasse'];
    
    $majeur = 'non renseigné' ;
    if (isset($_POST['majeur'])) {
        $majeur = $_POST['majeur']; 
    }
    
    $sexe = $_POST['sexe'];
    $options = $_POST['options'];
?> 

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title> Les données de l'utilisateur </title>
  </head>
  <body>
    <p> Voici les valeurs transmises par l'utilisateur : </p>
    <p> 
        Login : <?= $login ?> <br/>
        Mot de passe : <?= $mot ?> <br/>
        Majeur : <?= $majeur ?> <br/> 
        Type : <?= $sexe ?> <br/>
        Lettre de nouvelle : <?= $options ?> <br/>
        Membre de soutien : <?= $options ?> <br/>
    </p>
  </body>
</html>
