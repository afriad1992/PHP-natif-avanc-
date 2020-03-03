<?php
    require_once '../controllers/connect.php';
?>
<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial-scal=1, shrink-to-fit=no">
        <title>Formulaire d'authentification V.2</title>        
    </head>
    <body>
        <form method="POST" target="#">
            <label for="user">E-mail</label>
            <input type="text" id="user" placeholder="Utilisateur" name="login">
            <div><?= isset($errMsg['user'])?$errMsg['user']:'';?></div>
            <label for="pass">Mot de passe</label>
            <input type="password" placeholder="azerty" id="pass" name="pass">
            <div><?= isset($errMsg['pass'])?$errMsg['pass']:'';?></div>
            <button type="submit" name="Envoyer">Envoyer</button>
        </form>
    </body>
</html> 