<?php
 // Déterminer si une année est bissextile
$d=new DateTime();
echo "l'année ".(($d->format('L')===0)?"n'est pas ":"est ")."bissextile";
?>