<?php
    // Calcul du temps de formation restant en jours (et heures)
    // Utilisation de l'objet DateTime obligatoire
    $dateFin=new DateTime('2019-11-15');
    $dateCur=new DateTime();
    $intervalle=date_diff($dateFin, $dateCur);
    echo $intervalle->d.' jours '.(intval($intervalle->h)%24).' heures ';
?>