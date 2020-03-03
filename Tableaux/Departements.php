<?php
   $departements = array(	
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),	
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),	
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),	
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")	
    );
   ksort($departements);
?>
<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial-scal=1, shrink-to-fit=no">
        <title>Départements</title>
    </head>
    <body>
        <h1>Liste des régions et départements</h1>
        
        <ul>
        <?php
            foreach($departements as $r => $arrD){ // Pour chaque région
        ?>
            <li><?= $r; ?> : <!-- Nom de la région -->
                <ul>
                <?php
                    foreach($arrD as $d){ // Pour chaque département de la région
                ?>
                    <li>
                        <?= $d; ?> <!-- Nom du département -->
                    </li>
                <?php
                    }
                ?>
                </ul>
            </li>
        <?php
            }
        ?>
        </ul>
        <h1>Nombre de départements par région :</h1>
        <ul>
            <?php
                foreach($departements as $r => $arrD){
            ?>
            <li><?= $r; ?> : <?= count($arrD); ?></li>
            <?php
                }
            ?>
        </ul>

    </body>
</html> 