<?php
/*
 *
 * Page d'accueil du projet :
 * Affichage sous forme de tableau des données contenues dans la base produits
 * liens pour afficher & modifier les items enregistrés dans la base
 * lien pour la suppression d'un item
 * 
 */

// Répertoires par défaut :
    require_once 'assets/php/globals.php';

// Bibliothèque de connexion :
    require_once $libs.'dbconnect.php';

// le <body> et ce qui le précède
    include_once $skel.'head.inc';

// Code du tableau
    $cols=array('Photo'=>'col-2', 'ID'=>'col s1', 'Référence'=>'col s1', 'Libellé'=>'col s1', 'Prix'=>'col s1', 'Stock'=>'col s1', 'Couleur'=>'col s1', 'Ajout'=>'col s1', 'Modif'=>'col-2', 'Bloqué'=>'col s1'); // entêtes de colonnes du tableau, associées aux classes css/bootstrap
    
    $db=connexionBase(); 
    $produits=$db->query('SELECT pro_id, pro_photo, pro_ref, pro_libelle, pro_prix, pro_stock, pro_couleur, pro_d_ajout, pro_d_modif, pro_bloque FROM produits');
    if($produits->rowCount()!=0){// Si la table n'est pas vide
    // Création du tableau
        echo "\t\t\t<table class=\"table table-bordered table-responsive my-3\">\n\t\t\t\t<thead>\n";
        echo "\t\t\t\t\t<tr>\n";
        foreach($cols as $col=>$classe){ // Création de l'entête du tableau
            echo "\t\t\t\t\t\t<th class=\"".$classe."\">".$col."</th>\n";
        }
        echo "\t\t\t\t\t</tr>\n\t\t\t\t</thead>\n";
        $td="\t\t\t\t\t\t<td>";
    // Boucle de création des lignes du tableau
        while($row=$produits->fetchObject()){ 
            // création des balises img et a
            $balImg='<img src="'.$photos.$row->pro_id.'.'.$row->pro_photo.'" class="responsive-img" alt="Photo de '.$row->pro_libelle.'">';
            $balLnk='<a href="detail.php?pro_id='.$row->pro_id.'">';
            if(!is_null($row->pro_bloque)){
                $estBloque="Oui";
            } else {
                $estBloque="";
            }
            echo "\t\t\t\t\t<tr>\n";
            echo $td.$balImg."</td>\n";
            echo $td.$row->pro_id."</td>\n";
            echo $td.$row->pro_ref."</td>\n";
            echo $td.$balLnk.$row->pro_libelle."</a></td>\n";
            echo $td.$row->pro_prix." €</td>\n";
            echo $td.$row->pro_stock."</td>\n";
            echo $td.$row->pro_couleur."</td>\n";
            echo $td.$row->pro_d_ajout."</td>\n";
            echo $td.$row->pro_d_modif."</td>\n";
            echo $td.$estBloque."</td>\n";
            echo "\t\t\t\t\t</tr>\n";
        }
        echo "\t\t\t</table>";
    } 
?>
    <div class="row">
        <a class="offset-lg-1" href="ajout.php">Ajouter un article</a>
    </div>
<?php
    include_once $skel.'foot.inc'; // Le pied de page
?>