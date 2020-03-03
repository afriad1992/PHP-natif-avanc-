<?php
require_once 'dbconnect.php';
if(isset($_POST['Envoyer'])){
    $mail=$_POST['login'];
    $pass=$_POST['pass'];
    $errMsg=array();
    
    $db= connectBase('auth'); // On se connecte à la base des utilisateurs
    $req=$db->prepare('SELECT `u_mail`, `u_hash` FROM `user` WHERE `u_mail`=:mail'); // On prépare une requête de sélection sur le mail
    $req->bindValue(':mail', $mail);
    $req->execute();
    if($req->rowCount()===0){ // Si l'utilisateur est non trouvé
        $errMsg['user']='Utilisateur inconnu';
    } else {
        $row=$req->fetchObject();
        if (!password_verify($pass, $row->u_hash)){ // Si le mot de passe n'est pas bon
            $errMsg['pass']='Mot de passe invalide';
        } else { // Si tout est ok, on renvoie vers le fichier prévu
            header('location: ../vues/ok.html');
        }
    }

}  
?>