<?php
    // Afficher l'heure au format 11h25
    $d=new DateTime();
    echo "Il est : ".$d->format("h\hm");
?>