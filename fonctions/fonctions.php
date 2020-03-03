<?php
    function lien($addr, $msg){ //Créer un lien
        //return '<a href="'.$addr.'">'.$msg.'</a>'; // Si la fonction doit renvoyer une valeur
        /*
         * Si elle doit mettre le lien directement dans le HTML */
         ?>
            <a href="<?= $addr; ?>"><?= $msg; ?></a>
         <?php
         
    }
    
    function somme($arr){ // Faire la somme d'un tableau
        $result=0;
        foreach ($arr as $v){
            $result+=$v;
        }
        return $result;
    }
    
    function passComplex($str){
        $rx=array(
            'cap' => '/[A-Z]+/',
            'number' => '/\d+/',
            'min'   => '/[a-z]+/'
        );
        $result=(strlen($str)>=8?true:false);   // Vrai si longueur >=8
        foreach($rx as $r){
            $result=$result && preg_match($r, $str);    // On teste chaque regex
        }
        return $result;
    }
?>