<?php
/**
 * Affiche les données entrées par l'utilisateur
 *
 * @author: LR
 * @date : 2015.03.19
 */
 // 

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title> Les données de l'utilisateur </title>
  </head>
  <body>
    <form name="FORM1" action="ajout_utilisateur_post.php" method="post">
        <fieldset id="formulaire"> 
                <p><label> Login </label></p>
                <p><input type="text" name="login"/></p>
                <p><label> Mot de passe </label></p>
                <p><input type="password" name="motdepasse"/></p>
                <p><label> Majeur </label></p>
                <p><select  name="majeur"></p>
                <option value="1"> Oui </option>
                <option value="0"> Non </option></select>
                <p> Type 
                    <p><input type="checkbox" name="sexe" value="Femme"/> Femme </p>
                    <p></p><input type="checkbox" name="sexe" value="Homme"/> Homme </p>
                </p>
                <p> Options
                    <br/>
                    <input type="radio" name="options" value="1"/> Lettre de nouvelle
                    <input type="radio" name="options" value="1"/> Membre de soutien 
                </p>
        </fieldset>
        <button id="envoi" class="grid_2"> S'inscire </button> 
    </form>
  </body>
</html> 
