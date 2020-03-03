<?php
    require_once 'assets/php/globals.php';  // Variables communes à tous les scripts
    require_once $libs.'dbconnect.php';     // Connexion à la base de données
    require_once $libs.'getimg.php';        // Fonction de gestion des images
    // Initialisation des variables globales propres au script
    $errMsg=null; // Par défaut pas d'erreur
    $dbImg=null; // Par défaut pas d'image
    $db=connexionBase(); 
    $prod=$db->query("SELECT * FROM produits WHERE pro_id=".$_POST['pro_id']);

    if($prod->rowCount()==0){ // Si le produit à modifier n'est pas dispo dans la base, on affiche une erreur
        include_once $skel."head.inc";
        echo "<h1>Désolé</h1>\n<p>Le produit que vous voulez modifier n'est pas disponible dans la base de données";
        include_once $skel."foot.inc";
        header('refresh:5;url=index.php');
    } else {
        $curValues=$prod->fetchObject(); // Sauvegarde des valeurs actuelles du produit
        $updReq=$db->prepare('UPDATE produits SET 
                pro_cat_id      = :pro_cat_id,
                pro_ref         = :pro_ref,
                pro_libelle     = :pro_libelle,
                pro_description = :pro_description,
                pro_prix        = :pro_prix,
                pro_stock       = :pro_stock,
                pro_couleur     = :pro_couleur,
                pro_photo       = :pro_photo,
                pro_d_modif     = :pro_d_modif
            WHERE pro_id = :pro_id'); // Préparation de la requête
        
        $req[':pro_id']=$_POST['pro_id'];

        /*  Pour tester si les chaines envoyées par post sont des nombres,
            on va convertir la chaîne en nombre, puis le nombre en chaîne
            et enfin tester l'égalité des deux. En effet is_int ne fait
            pas de conversion de chaîne vers numérique.
        */
        if($_POST['pro_cat_id']==strval(intval($_POST['pro_cat_id']))){
            $req[':pro_cat_id']=intval($_POST['pro_cat_id']);
        } else if(empty($_POST['pro_cat_id'])){
            $req[':pro_cat_id']=$curValues->pro_cat_id;
        } else {
            $errMsg.="<h1>Erreur</h1>\n<p>le champ catégorie doit être de type entier</p>";
        }

        if(!empty($_POST['pro_ref'])){
            $req[':pro_ref']=$_POST['pro_ref'];
        } else {
            $req[':pro_ref']=$curValues->pro_ref;
        }

        if(!empty($_POST['pro_libelle'])){
            $req[':pro_libelle']=$_POST['pro_libelle'];
        } else {
            $req[':pro_libelle']=$curValues->pro_libelle;
        }

        if(!empty($_POST['pro_description'])){
            $req[':pro_description']=$_POST['pro_description'];
        } else {
            $req[':pro_description']=$curValues->pro_description;
        }

        if($_POST['pro_prix']==strval(floatval($_POST['pro_prix']))){
            $req[':pro_prix']=floatval($_POST['pro_prix']);
        } else if (empty($_POST['pro_prix'])){
            $req[':pro_prix']=$curValues->pro_prix;
        } else {
            $errMsg.="<h1>Erreur</h1>\n<p>le champ prix doit être de type flottant</p>\n";
        }

        if($_POST['pro_stock']==strval(intval($_POST['pro_stock']))){
            $req[':pro_stock']=intval($_POST['pro_stock']);
        } else if(empty($_POST['pro_stock'])){
            $req[':pro_stock']=$curValues->pro_prix;
        } else {
            $errMsg.="<h1>Erreur</h1>\n<p>Le champ stock doit être de type entier</p>\n";
        }

        if(!empty($_POST['pro_couleur'])){
            $req[':pro_couleur']=$_POST['pro_couleur'];
        } else {
            $req[':pro_couleur']=$curValues->pro_couleur;
        }

        if(!is_null($errMsg)){
            include_once $skel."head.inc";
            echo $errMsg;
            include_once $skel."foot.inc";
            header('refresh:5;url=index.php');
        }

        // Si toutes les vérifs ci-dessus sont bonnes, on charge l'image
        $arrImg=readFileInfo($_FILES['image'],$_POST['pro_id']);
        if(moveTmpFile($arrImg)){
            $dbImg=substr($arrImg['ext'],1);
        } else {
            $dbImg=$curValues->pro_photo;
        }

        $req[':pro_photo']=$dbImg;
        $req[':pro_d_modif']=date($dtFormat,$_SERVER['REQUEST_TIME']);
        $updReq->execute($req);

    }
   header('Location: index.php');
?>