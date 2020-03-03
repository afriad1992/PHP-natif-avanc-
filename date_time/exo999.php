<?php
// Afficher la date au format 'Lundi 18 novembre 2019'
// Utilisation de l'objet DateTime obligatoire

// Que s'est-il passé au timecode 1000200000
    $d=new DateTime();
    $d->setTimestamp(1000200000);
    echo $d->format('j/n/Y')." L'urbanisme new-yorkais a profondément été transformé";

?>