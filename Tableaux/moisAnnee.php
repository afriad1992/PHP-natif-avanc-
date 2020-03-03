<?php
    $mois = array(
        'Janvier'   => 31,
        'Février'   => 28,
        'Mars'      => 31,
        'Avril'     => 30,
        'Mai'       => 31,
        'Juin'      => 30,
        'Juillet'   => 31,
        'Août'      => 31,
        'Septembre' => 30,
        'Octobre'   => 31,
        'Novembre'  => 30,
        'Décembre'  => 31
    );
?>
<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial-scal=1, shrink-to-fit=no">
        <title>Mois de l'année</title>

    </head>
    <body>
        <table>
            <thead>
            <th>Mois</th>
            <th>Nb Jours</th>
            </thead>
            <tbody>
                <?php
                    foreach($mois as $name => $nbDays){
                ?>
                <tr>
                    <td><?= $name; ?></td>
                    <td><?= $nbDays; ?></td>
                </tr>
                <?php
                    }     
                    asort($mois); // Pour le tableau suivant, tri en conservant les associations clés/valeurs
                ?>
            </tbody>
        </table>
        <p>Tableau trié par nb jours</p>
        <table>
            <thead>
                <tr>
                    <th>Mois</th>
                    <th>Nb jours</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($mois as $name => $nbDays){
                ?>
                <tr>
                    <td><?= $name; ?></td>
                    <td><?= $nbDays; ?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </body>
</html> 