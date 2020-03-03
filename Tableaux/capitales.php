<?php
function initB($str){ // Fonction de test de contenu utilisée en callback par array_filter
    return preg_match('/^B/',$str);
}
    $capitales = array(	
    "Bucarest" => "Roumanie",	
    "Bruxelles" => "Belgique",	
    "Oslo" => "Norvège",	
    "Ottawa" => "Canada",	
    "Paris" => "France",	
    "Port-au-Prince" => "Haïti",	
    "Port-d'Espagne" => "Trinité-et-Tobago",	
    "Prague" => "République tchèque",	
    "Rabat" => "Maroc",	
    "Riga" => "Lettonie",	
    "Rome" => "Italie",	
    "San José" => "Costa Rica",	
    "Santiago" => "Chili",	
    "Sofia" => "Bulgarie",	
    "Alger" => "Algérie",	
    "Amsterdam" => "Pays-Bas",	
    "Andorre-la-Vieille" => "Andorre",	
    "Asuncion" => "Paraguay",	
    "Athènes" => "Grèce",	
    "Bagdad" => "Irak",	
    "Bamako" => "Mali",	
    "Berlin" => "Allemagne",	
    "Bogota" => "Colombie",	
    "Brasilia" => "Brésil",	
    "Bratislava" => "Slovaquie",	
    "Varsovie" => "Pologne",	
    "Budapest" => "Hongrie",	
    "Le Caire" => "Egypte",	
    "Canberra" => "Australie",	
    "Caracas" => "Venezuela",	
    "Jakarta" => "Indonésie",	
    "Kiev" => "Ukraine",	
    "Kigali" => "Rwanda",	
    "Kingston" => "Jamaïque",	
    "Lima" => "Pérou",	
    "Londres" => "Royaume-Uni",	
    "Madrid" => "Espagne",	
    "Malé" => "Maldives",	
    "Mexico" => "Mexique",	
    "Minsk" => "Biélorussie",	
    "Moscou" => "Russie",	
    "Nairobi" => "Kenya",	
    "New Delhi" => "Inde",	
    "Stockholm" => "Suède",	
    "Téhéran" => "Iran",	
    "Tokyo" => "Japon",	
    "Tunis" => "Tunisie",	
    "Copenhague" => "Danemark",	
    "Dakar" => "Sénégal",	
    "Damas" => "Syrie",	
    "Dublin" => "Irlande",	
    "Erevan" => "Arménie",	
    "La Havane" => "Cuba",	
    "Helsinki" => "Finlande",	
    "Islamabad" => "Pakistan",	
    "Vienne" => "Autriche",	
    "Vilnius" => "Lituanie",	
    "Zagreb" => "Croatie"	
); //Mon code est verbeux, j'aurais pu faire 
// plus court avec un seul tableau, mais j'ai voulu tester des trucs
    $pays=array_flip($capitales); // Inverse les clés et les valeurs
    ksort($capitales);   // Tri par clé
    ksort($pays);        
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
        <h1>Tri par capitales</h1>
        <table>
            <thead>
            <th>Capitales</th>
            <th>Pays</th>
            </thead>
            <tbody>
                <?php
                    foreach($capitales as $c => $p){
                ?>
                <tr>
                    <td><?= $c; ?></td>
                    <td><?= $p; ?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <h1>Tri par pays</h1>
        <table>
            <thead>
                <tr>
                    <th>Pays</th>
                    <th>Capitales</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($pays as $p => $c){
                ?>
                <tr>
                    <td><?= $p; ?></td>
                    <td><?= $c; ?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <h1>Nombre de pays</h1>
        <p>Il y a <?= count($pays); ?> pays</p>
        <?php
        
        /*
         * Sans array_filter :
            foreach ($capitales as $c=>$p){ // Pour chaque pays
                if(!initB($c)){ // Si la capitale ne commence pas par B
                    unset($pays[$p]);          // On supprime l'entrée
                }
            }
         */
        /*
         * array_filter($array, $callback)
         * renvoie un tableau des valeurs de array pour lesquelles la fonction
         * de callback renvoie une valeur vraie.
         * Ici, $pays sera vidé des capitales ne commençant pas par B
         * 
         */
        $pays=array_filter($pays,'initB'); 
        ?>
        <h1>Pays dont la capitale commence par B</h1>
        <table>
            <thead>
                <tr>
                    <th>Pays</th>
                    <th>Capitales</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($pays as $p=>$c){
                ?>
                <tr>
                    <td><?= $p; ?></td>
                    <td><?= $c; ?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </body>
</html> 