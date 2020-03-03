<?php
    // Afficher le numéro de la semaine du 14 juillet 2019
    // Utilisation de l'objet DateTime obligatoire
    $d=new DateTime('2019-07-14');
    echo $d->format('W');
?>