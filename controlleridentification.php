<?php

if (isset($_POST["con"])) {
    require_once "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
    $db = connexionBase(); // Appel de la fonction de connexion
    $requete = "SELECT * FROM clients WHERE email='".$_POST["email"]."'";
    $result = $db->query($requete);
// Renvoi de l'enregistrement sous forme d'un objet
    if (!$result) {
    $tableauErreurs = $db->errorInfo();

die("Erreur dans la requête");}

else{



    
    $client = $result->fetch(PDO::FETCH_OBJ);
    $span = array();
    $span["succes"] = "";
    $erreur = 0;
    if (empty($_POST["email"])) {
        $erreur++;
        $span["email"] = "saisir votre adresse email";
   
    }elseif ($client==false) {
         $erreur++;
        $span["email"] = "compte introuvable";
    }
    else{$span["succes"] = "&#x2705";

    if(empty($_POST["password"])) { $span["password"] = "saisir un mots de passe";
      $erreur++;
      
    } elseif (!password_verify($_POST["password"], $client->password)) {
         $erreur++;
        $span["password"] = "mot de passe incorrect";
              $span["oublie"] = "<a href='email.php'>mot de passe oublié ?</a>";
          $erreur++;
    } 

    if( $erreur==0) {
        session_start();
        if (($client->role)=="administrateur"){
        $_SESSION["role"] = "admin";}
        else {$_SESSION["role"] = "client";}
        $_SESSION["login"] = $client->nom;
        header("Location: list.php");
   
}}}}

?> 