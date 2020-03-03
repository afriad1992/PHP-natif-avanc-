<?php
    function litDossier ($dir){
        if (is_dir ($dir)) // si c'est un repertoire
            $dh = opendir ($dir); // on l'ouvre
        else {
            echo $dir." n'est pas un repertoire valide"
            exit;
            }
        while (($file = readdir ($dh)) !== false ) { //boucle pour parcourir le repertoire 
            if(preg_match('/^[^\.]/', $file)){ // Les fichiers commençant par . sont réputés cachés, donc une regex pour ne pas les afficher
                $path =$dir.'/'.$file; 
                if (is_dir ($path)) { //si on tombe sur un sous-repertoire 
                    echo '<p>', $path, ' -> dir</p>'; 
                    echo '<div style="margin-left: 3rem;">'; 
                    litDossier ($path); // appel recursif pour lire a l'interieur de ce sous-repertoire
                    echo '</div><br>';
                }
                else
                    echo $path, '<br>';
            }
        }
        closedir ($dh); // on ferme le repertoire courant
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php litDossier('/wamp/www'); ?>
</body>
</html>
