<?php
setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
    $d=new DateTime();
    $strDate='';
    $semaine=array('dimanche',
        'Lundi',
        'mardi',
        'mercredi',
        'jeudi',
        'vendredi',
        'samedi');
    $mois=array('janvier',
        'février',
        'mars',
        'avril',
        'mai',
        'juin',
        'juillet',
        'août',
        'septembre',
        'octobre',
        'novembre',
        'décembre');
    echo $d->format("l j F Y"); // La date s'affiche en anglais malgré le setlocale.
    $strDate.=$semaine[intval($d->format('w'))].' '; // w renvoie le numéro de jour de la semaine de 0 (dimanche) à 6 (samedi)
    $strDate.=$d->format('j').' '; // Jour du mois
    $strDate.=$mois[intval($d->format('n'))-1].' '; // mois (-1 pour recaler l'indice du tableau)
    $strDate.=$d->format('Y');
    echo $strDate;
?>