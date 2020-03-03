<?php
    // Calcul de la prochaine année bissextile
    $interv=new DateInterval('P1Y');
    $curDate=new DateTime(); // Date courante
    while($curDate->format('L')=='0'){ // Tant que l'année n'est pas bissextile
        $curDate->add($interv);
    }
    echo $curDate->format('Y');
?>