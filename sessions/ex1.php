<?php
/*
 * Création d'une session :
 * session_start();
 * 
 * Création d'une variable de session:
 * $_SESSION['key']='value;
 * 
 * Destruction de la session:
 * foreach ($_SESSION as $k=>$v){
 *  unset($_SESSION[$k]);
 * }
 * if(ini_get("session.use_cookies")){
 *  setcookie(session_name(),time - 42000);
 * }
 * session_destroy();
 */
?>