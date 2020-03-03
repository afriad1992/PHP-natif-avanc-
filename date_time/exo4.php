<?php
    // Test de la date du 32/17/2019
    try{
        $d=new DateTime('2019-17-32');
    } catch (Exception $e) {
        echo "La date du 17/17/2019 est invalide.";
    }
?>