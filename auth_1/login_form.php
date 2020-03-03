<?php
    

session_start();
if(isset($_POST['Envoyer'])){ // Si une requête post avec Envoyer est reçue
    if($_POST['login']==='admin' && $_POST['pass']==='admin'){  // Si l'utilisateur est admin:admin
        $_SESSION['auth']='ok'; // La session contient une variable auth de valeur ok

    } else { // Sinon on supprime auth de la session
        if(isset($_SESSION['auth'])){
            unset($_SESSION['auth']); 
        }
    }
    header('location: login_script.php'); // Et on appelle le script de login
} // Sinon on charge le formulaire
?>
<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial-scal=1, shrink-to-fit=no">
        <title>Formulaire d'authentification V.1</title>

        
    </head>
    <body>
        <form method="POST" target="#">
            <label for="user">Nom d'utilisateur</label>
            <input type="text" id="user" placeholder="Utilisateur" name="login">
            <br>
            <label for="pass">Mot de passe</label>
            <input type="password" placeholder="azerty" id="pass" name="pass"><br>
            <button type="submit" name="Envoyer">Envoyer</button>
        </form>
    </body>
</html> 