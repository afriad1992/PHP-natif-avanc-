<?php
    require_once 'assets/php/globals.php';
    require_once $libs.'dbconnect.php';
    /*
     *
     *  Contient les fonctions de récupération d'un fichier depuis un formulaire
     * 
     */
        /*
        strrchr recherche dans la chaine param1 la dernière occurence du caractère param2
        renvoie la sous-chaîne commençant à la dernière occurence de param2
        si param2 n'est pas trouvé, strrchr renvoie false.
        Pour commencer de la première occurence de param2, on utiliserait strstr
    */
    function readFileInfo($fic,$id){
        $rst=array(    'name'      => $id,                                     // Le nom du fichier envoyé dans le formulaire
                        'ext'       => strrchr($fic['name'],'.'),               // Tous les caractères du strrchr
                        'tmp'       => $fic['tmp_name'],                        // Le fichier temporaire reçu
                        'mimeType'  => mime_content_type($fic['tmp_name']));    // le type mime du fichier temporaire
        echo var_dump($rst);
        return $rst;
    }

    function moveTmpFile($fic){
        if(preg_match('/^image/',$fic['mimeType'])){                             // Si le fichier est une image
            move_uploaded_file($fic['tmp'], "assets/img/jarditou_photos/".$fic['name'].$fic['ext']);  // On déplace le fichier temporaire en le renommant
            return true;
        } else {
            return false;
        }
    }
?>