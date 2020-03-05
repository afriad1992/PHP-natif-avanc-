<?php
session_start();
if(isset($_SESSION["role"])){
    unset($_SESSION["role"]);}
 if(isset($_SESSION["compteur"])){    unset($_SESSION["compteur"]);}
   if(isset($_SESSION["achat"])){     unset($_SESSION["achat"]); }
 
    if (ini_get("session.use_cookies")) 
    {
        setcookie(session_name(), '', time()-42000);
    }
 
    session_destroy();
header("Location: list.php");
    ?>