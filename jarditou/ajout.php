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
    include_once $skel.'head.inc'; // Tout j'usqu'au <body>
?>
        <form class="row" action="exec_ajout.php" method="POST" enctype="multipart/form-data">
            <div class="col-lg-4">
                <label for="id" id="hidLbl">Identifiant du nouvel article :</label><br>
                <input class="form-control" id="id" type="number" name="pro_id">
                <label for="cat">Catégorie</label>
                <input class="form-control" id="cat" type="number" min="1" max="30" step="1" name="pro_cat_id">
                <label for="ref">Référence</label>
                <input class="form-control" id="ref" name="pro_ref">
                <label for="lib">Libellé</label>
                <input class="form-control" id="lib" name="pro_libelle">
                <label for="descr">Description</label>
                <textarea class="form-control" id="descr" name="pro_description"></textarea>
                <label for="prix">Prix</label>
                <input class="form-control" type="number" id="prix" name="pro_prix" min="0" max="9999.99" step="0.01">
            </div>
            <div class="col-lg-4">
                <label for="stock">Stock</label>
                <input class="form-control" id="stock" type="number" min="0" step="1" name="pro_stock"> 
                <label for="couleur">Couleur</label>
                <input class="form-control" type="text" id="couleur" name="pro_couleur">
                <label for="photo">Image du produit</label>
                <input class="form-control" id="photo" name="image" type="file">
                <label for="bloque">Bloqué</label>
                <input type="checkbox" id="bloque" name="pro_bloque" value="1">
                <div>
                    <button type="submit" class="btn btn-secondary">Envoyer</button>&nbsp;<button type="reset" class="btn btn-secondary">Annuler</button>
                </div>
            </div>
        </form>

<?php
    include_once $skel.'foot.inc'; // Le pied de page
?>