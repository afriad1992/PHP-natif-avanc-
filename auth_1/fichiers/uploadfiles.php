<?php
    // Ouverture de http://bienvu.net/misc/customers.csv et affichage du contenu
    // sous forme de tableau
    $csv=file('http://bienvu.net/misc/customers.csv'); // Contenu du fichier distant dans un tableau
?>
<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial-scal=1, shrink-to-fit=no">
        <link href="/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
        <title>Tableau d'utilisateurs</title>        
    </head>
    <body>
        <table class="table-responsive table-bordered table-striped">
            <thead>
                <tr>
                    <th class="col s1">Surname</th>
                    <th class="col-2">Firstname</th>
                    <th class="col-4">Email</th>
                    <th class="col-2">Phone</th>
                    <th class="col-2">City</th>
                    <th class="col s1">State</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($csv as $line){
                ?>
                <tr>
                <?php
                    $arrLine=explode(',',$line);
                    foreach ($arrLine as $cell){
                ?>
                    <td>
                    <?= $cell; ?>
                    </td>
                <?php
                    }
                ?>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <script src="/assets/js/jquery-3.3.1.slim.min.js"></script>
        <script src="/assets/js/popper.1.14.7.min.js"></script>
        <script src="/assets/js/bootstrap/bootstrap.min.js"></script>        
    </body>
</html> 