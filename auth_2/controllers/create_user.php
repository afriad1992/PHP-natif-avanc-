<?php
    require_once 'dbconnect.php';   //connexion bdd
    require_once 'controls.php';    // Vérifications
    
    if(isset($_POST['Envoyer'])){ // Si le bouton a été cliqué, on initialise les variables
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $mail=$_POST['mail'];
        $pass=$_POST['pass'];
        $pass2=$_POST['pass2'];
        if(isset($errMsg)){
            unset($errMsg);
        }
        $errMsg=array();
        
        $db = connectBase('auth'); 
        // Requête pour vérifier si l'user existe
        $req=$db->prepare('SELECT * FROM `user` WHERE `u_fname`=:fname AND `u_lname`=:lname');
        $req->bindValue(':fname', $fname);
        $req->bindValue(':lname', $lname);
        $req->execute();
        
        if ($req->rowCount()!==0){
            $errMsg['name']='Ce nom est déjà utilisé';
        }
        $req->closeCursor();
        
        // Requête pour vérifier si le ail existe
        $req=$db->prepare('SELECT * FROM `user` WHERE `u_mail`=:mail;');
        $req->bindValue(':mail', $mail);
        $req->execute();
                
        if($req->rowCount()!==0){
            $errMsg['mail']='Cet e-mail est déjà utilisé';
        } else if (!isMail($mail)){
            $errMsg['mail']='Format invalide';
        }
        $req->closeCursor();
        // Vérification du mot de passe
        if($pass!==$pass2){
            $errMsg['passDiff']='Les mots de passe ne correspondent pas ';
        }
        if(passComplex($_POST['pass'])){
            $hash= password_hash($_POST['pass'], PASSWORD_DEFAULT);
        } else {
            $errMsg['passEasy']='Ce mot de passe est trop simple ';
        }
        // Si pas d'erreur, on enregistre l'utilisateur et le hash de son mot de passe
        if(count($errMsg)===0){
            $req=$db->prepare('INSERT INTO `user` VALUES (:fname, :lname, :mail, :hash);');
            $req->bindValue(':fname', $fname);
            $req->bindValue(':lname', $lname);
            $req->bindValue(':mail', $mail);
            $req->bindValue(':hash', $hash);
            $req->execute();
            $req->closeCursor();
            // Et on retourne à l'accueil
            header('location: ../index.php');
        }        
    }
?>