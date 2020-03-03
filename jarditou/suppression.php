<?php
    require_once 'assets/php/globals.php';
    require_once $libs.'dbconnect.php';
    $db = connexionBase(); // Appel de la fonction de connexion
    $pro_id = $_GET["id"];
    $delete = "DELETE FROM produits WHERE pro_id=".$pro_id;
    $result = $db->query($delete);
    header("location:index.php");
?>