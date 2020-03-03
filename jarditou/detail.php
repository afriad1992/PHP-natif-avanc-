<?php
/*
 *
 * Page détail :
 * Affichage des données
 * Création d'un lien de modification
 * lien pour la suppression d'un item
 * 
 */
// Répertoires par défaut :
    require_once 'assets/php/globals.php';
// Bibliothèque de connexion :
    require_once $libs.'dbconnect.php';
    include_once $skel.'head.inc'; // Tout ce qui précède le <body>

//  Variables spécifiques au script
    $affItem='<dd>%s</dd>'; // Pour afficher une chaîne dans la balise <dd>
    $affImg='<dd><img src="%s" alt="%s"></dd>'; // Pour créer la balise image
    $db=connexionBase(); 
    $produit=$db->query('SELECT * from produits WHERE pro_id='.$_GET['pro_id']);
    if(!$produit->rowCount()==0){ // Si le produit existe
        $res=$produit->fetchObject(); // On va afficher le produit sous forme de liste de définitions
        echo '<dl class="row">';
        echo '<div class="col-lg-5 offset-lg-1">';
        echo '<dt>ID</dt>';
        printf($affItem,$res->pro_id);
        echo '<dt>Catégorie</dt>';
        printf($affItem,$res->pro_cat_id);
        echo '<dt>Référence</dt>';
        printf($affItem,$res->pro_ref);
        echo '<dt>Libellé</dt>';
        printf($affItem,$res->pro_libelle);
        echo '<dt>description</dt>';
        printf($affItem,$res->pro_description);
        echo '<dt>Prix</dt>';
        printf($affItem,$res->pro_prix);
        echo '<dt>Stock</dt>';
        printf($affItem,$res->pro_stock);
        echo '<dt>couleur</dt>';
        printf($affItem,$res->pro_couleur);
        echo '<dt>Date d'."'".'ajout</dt>';
        printf($affItem,$res->pro_d_ajout);
        echo '<dt>Date de dernière modification</dt>';
        printf($affItem,$res->pro_d_modif);
        echo '<dt>Bloqué</dt>';
        if($res->pro_bloque!=NULL){
            printf($affItem,'Oui');
        } else {
            printf($affItem,'Non');
        }
        echo '</div>';
        echo '<div class="col-lg-5 offset-lg-1">';
        echo '<dt>photo</dt>';
        printf($affImg,$photos.$res->pro_id.'.'.$res->pro_photo,'Image de '.$res->pro_libelle);
        echo '<p><a href="modif.php?pro_id='.$res->pro_id.'">Modifier</a></p>';
        ?>
        <div><a href="#" id="supp" onclick="suppression('<?= $res->pro_id ?>')">Supprimer</a></div>
        <script src="assets/js/suppression.js"></script>
        <?php
        echo '</div>';
        echo '</dl>';
        
    } else {
        // Ajout d'un message d'erreur
        echo "<h1>Le produit n'a pas été trouvé</h1>";
    }
    include_once $skel.'foot.inc'; // Le pied de page
?>