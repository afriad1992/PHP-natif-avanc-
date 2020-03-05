<?php

if (isset($_POST["valider"])) {

    
    $span = array();
       $span["succes"]="";
           $span["succes1"]="";
    $erreur = 0;
    if (empty($_POST["password1"]) || empty($_POST["password2"])) {
        $span["password"] = "veuillez entrer un mot de passe";
        $erreur++;
    } elseif ($_POST["password1"] != $_POST["password2"]) {
        $span["password"] = "veuillez entrer un mot de passe identique";
        $erreur++;
    } else {
        $span["succes1"] = "&#x2705";
    }
     if (empty($_POST["email"]) ) {
        $span["email"] = "veuillez entrer un mot de passe";
     $erreur++;}

    if (empty($_POST["name"])) {
        $span["name"] = "veuillez entrer votre nom";
        $erreur++;
    } elseif (!preg_match('/^([a-zA-Z_éè~¨]+\s*)+$/', $_POST["name"])) {
        $erreur++;
    } else {
        $span["succes"] = "&#x2705";
    }
    

    if ($erreur == 0) {
        include_once 'connexion_bdd.php';
        $db = connexionBase();
        $password_hash = password_hash($_POST["password1"], PASSWORD_DEFAULT);
        
     
        $insert = $db->prepare("INSERT INTO `clients` (email,nom,password) VALUES (:mail,:nom,:password)");
        $insert->bindValue(':mail', $_POST["email"]);
        $insert->bindValue(':nom', $_POST["name"]);
        $insert->bindValue(':password', $password_hash);
        $insert->execute();
     header("Location: list.php");
    }
  
}

?>