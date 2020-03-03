<?php
require_once '../controllers/create_user.php';
?>
<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial-scal=1, shrink-to-fit=no">
        <title>Formulaire de création d'utilisateur</title>
    </head>
    <body>
        <form name="ajout" method="POST" action="#">
            <label for="firstname">Prénom : </label>
            <input name="fname" type="text" id="firstname" placeholder="dave" required>
            <label for="lastname">Nom : </label>
            <input name="lname" type="text" id="lastname" placeholder="loper" required>
            <div><?= (isset($errMsg['name'])?$errMsg['name']:''); ?></div>
            <label for="email">E-mail : </label>
            <input name="mail" id="email" type="email" placeholder="d.loper@afpa.fr" required>
            <div><?= (isset($errMsg['mail'])?$errMsg['mail']:''); ?></div>
            <label for="pwd">Mot de passe (8 caractères min avec une majuscule, une minuscule et un chiffre): </label>
            <input name="pass" id="pwd" type="password" placeholder="azerty" required>
            <label for="pwd2">Retapez votre mot de passe: </label>
            <input name="pass2" id="pwd2" type="password" placeholder="azerty" required>
            <div><?= (isset($errMsg['passEasy'])?$errMsg['passEasy']:''); ?><?= (isset($errMsg['passDiff'])?$errMsg['passDiff']:'');?></div>
            <button type="submit" name="Envoyer" value="Envoyer">Envoyer</button>
                
        </form>
    </body>
</html> 