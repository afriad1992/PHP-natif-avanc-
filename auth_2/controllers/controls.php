<?php
       
    function passComplex($str){ // Contôle de complexité du mot de passe
        $rx=array(
            'cap' => '/[A-Z]+/',    // Au moins 1 majuscule
            'number' => '/\d+/',    // Au moins 1 chiffre
            'min'   => '/[a-z]+/'   // Au moins 1  minuscule
        );
        $result=(strlen($str)>=8?true:false);   // Vrai si longueur >=8
        foreach($rx as $r){
            $result=$result && preg_match($r, $str);    // On teste chaque regex
        }
        return $result;
    }
    
    function isMail($str){  //Si str matche la regex, on renvoie true, sinon false
        // Commence par au moins une lettre, un chiffre ou _
        // Contient 0 ou plus groupes commençants par un point suivis d'au moins 1lettre, chiffre ou _
        // Contient une arobase, les mêmes groupes que précédemment
        // Finit avec un . et 2 à 4 lettres
        return preg_match('/^[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/', $str);
    }
?>