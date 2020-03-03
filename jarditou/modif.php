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
    include_once $skel.'head.inc'; // Tout j'usqu'au <body>
    $id=$_GET['pro_id'];
    $db=connexionBase(); // Connexion avec l'utilisateur n'ayant que les droits update et select (pour lire les données à modifier)
    $res=$db->query('SELECT * FROM produits WHERE pro_id='.$id);
    if($res->rowCount()!=0){
        $row=$res->fetchObject();
        $img=$photos.$id.'.'.$row->pro_photo;
        $altPhoto="Image de ".$row->pro_libelle;
?>
        <form class="row" action="exec_modif.php" method="POST" enctype="multipart/form-data">
            <div class="col-lg-4">
                <label for="id" id="hidLbl">Modification de l'article n° <?= $id; ?></label><br>
                <input class="form-control" id="id" type="hidden" name="pro_id" value="<?= $id; ?>"><!-- La notation < ?= est un raccourci de code pour < ?php echo -->
                <label for="cat">Catégorie</label>
                <input class="form-control" id="cat" type="number" min="1" max="30" step="1" name="pro_cat_id" value="<?= $row->pro_cat_id?>">
                <label for="ref">Référence</label>
                <input class="form-control" id="ref" name="pro_ref" value="<?= $row->pro_ref?>">
                <label for="lib">Libellé</label>
                <input class="form-control" id="lib" name="pro_libelle" value="<?= $row->pro_libelle?>">
                <label for="descr">Description</label>
                <textarea class="form-control" id="descr" name="pro_description"><?= $row->pro_description ?></textarea>
                <label for="prix">Prix</label>
                <input class="form-control" type="number" id="prix" name="pro_prix" value="<?= $row->pro_prix ?>" min="0" max="9999.99" step="0.01">
            </div>
            <div class="col-lg-4">
                <label for="stock">Stock</label>
                <input class="form-control" id="stock" type="number" min="0" step="1" name="pro_stock" value="<?= $row->pro_stock?>"> 
                <label for="couleur">Couleur</label>
                <input class="form-control" type="text" id="couleur" name="pro_couleur" value="<?= $row->pro_couleur?>">
                <label for="photo"><img src="<?= $img ?>" alt="<?= $altPhoto?>"></label>
                <input class="form-control" id="photo" name="image" type="file">
                <label for="bloque">Bloqué</label>
                <input type="checkbox" id="bloque" name="pro_bloque" value="1"<?php if(!is_null($row->pro_bloque)){echo 'checked';}?>>
                <div>
                    <button type="submit" class="btn btn-secondary">Envoyer</button>&nbsp;<button type="reset" class="btn btn-secondary">Annuler</button>
                </div>
            </div>
        </form>
<?php
    } else {
       echo "<h1>Erreur de base de données :</h1>\n<p> l'article ne semble pas exister</p>" ;
    }
    include_once $skel.'foot.inc'; // Le pied de page
?>