<?php
    // Ajouter 1 mois à la date courante
    $interv=new DateInterval('P1M');
    $curDate=new DateTime();
    $curDate->add($interv);
    echo $curDate->format('j/m/Y');
?>