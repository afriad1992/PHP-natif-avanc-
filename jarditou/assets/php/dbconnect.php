<?php
    function connexionBase(){ 
        // Définition des paramètres de connexion
        $login="tory";
        $password="natsrit";
        $host="localhost";
        $port=3306;
        $base="tory";
        $sql="mysql:host=$host";
        if(isset($port)){
            $sql.=":$port";
            }
        $sql.=";charset=utf8;dbname=$base";
        try{
            $db=new PDO($sql, $login, $password, array(PDO::ATTR_PERSISTENT => true)); // Ajout de l'attribut pour des connexions permanentes
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);            
            return $db;
        } catch (Exception $e){
            echo 'Erreur : '.$e->getMessage().'<br>';
            echo 'N° : '.$e->getCode().'<br>';
            die('Connexion au serveur impossible');
        }
    }
?>