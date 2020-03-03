<?php
    require_once 'assets/php/globals.php';  // Variables communes à tous les scripts
    require_once $libs.'dbconnect.php';     // Connexion à la base de données
    require_once $libs.'getimg.php';        // Fonction de gestion des images
    
    $errMsg=null; // Par défaut pas d'erreur
    $dbImg=null; // Par défaut pas d'image
    $db=connexionBase();
    $prod=$db->query("SELECT pro_id from produits WHERE pro_id=".$_POST['pro_id']);
    if($prod->rowCount()!=0){
        $errMsg.="<h1>Erreur</h1>\n<p>Le produit que vous voulez créer existe déjà</p>\n";
    } else {
        $insReq=$db->prepare('INSERT INTO produits (
            pro_id,
            pro_cat_id,
            pro_ref,
            pro_libelle,
            pro_description,
            pro_prix,
            pro_stock,
            pro_couleur,
            pro_photo,
            pro_d_ajout,
            pro_bloque) VALUES
            (:pro_id,
            :pro_cat_id,
            :pro_ref,
            :pro_libelle,
            :pro_description,
            :pro_prix,
            :pro_stock,
            :pro_couleur,
            :pro_photo,
            :pro_d_ajout,
            :pro_bloque)'); // Préparation de la requête. le NULL est pour la date de modif

        $req[':pro_id']=$_POST['pro_id'];
        $req[':pro_d_ajout']=date($dFormat,$_SERVER['REQUEST_TIME']);
            // Pour les ajouts de champs, j'aurais pu utiliser $bindParam(':param', $param);
            // Ou $bindValue(':param', $param, $type); avec $type pour qualifier le type avec une constante PDO::PARAM_type
        if($db->query('SELECT * from categories WHERE cat_id='.$_POST['pro_cat_id'])->rowCount()==0){
            $errMsg.="<h1>Erreur</h1>\n<p>La catégorie n'est pas valide</p>\n";
        } else {
            $req[':pro_cat_id']=$_POST['pro_cat_id'];
        }
        if(empty($_POST['pro_ref'])){
            $errMsg.="<h1>Erreur</h1>\n<p>Vous devez saisir une référence</p>";
        } else {
            $req[':pro_ref']=$_POST['pro_ref'];
        }
        if(empty($_POST['pro_libelle'])){
            $errMsg.="<h1>Erreur</h1>\n<p>Vous devez saisir un libellé</p>\n";
        } else {
            $req[':pro_libelle']=$_POST['pro_libelle'];
        }
        $req[':pro_description']=$_POST['pro_description'];
        if(empty($_POST['pro_prix'])||$_POST['pro_prix']!=strval(floatval($_POST['pro_prix']))){
            $errMsg.="<h1>Erreur</h1>\n<p>Le prix doit être renseigné et être un nombre</p>\n";
        } else {
            $req[':pro_prix']=floatval($_POST['pro_prix']);
        }
        if(empty($_POST['pro_stock'])){
            $req[':pro_stock']=0; // Vu que la valeur par défaut telle que définie dans la base de données est 0
        } else if($_POST['pro_stock']!=strval(intval($_POST['pro_stock']))){
            $errMsg.="<h1>Erreur</h1>\n<p>Vous devez entrer un nombre entier de produits disponibles</p>";           
        } else {
            $req[':pro_stock']=intval($_POST['pro_stock']);
        }
        $req[':pro_couleur']=$_POST['pro_couleur'];
        if(isset($_POST['pro_bloque'])){
            $req[':pro_bloque']=1;
        } else {
            $req[':pro_bloque']=null;
        }
        
        if(!is_null($errMsg)){
            include_once $skel."head.inc";
            echo $errMsg;
            include_once $skel."foot.inc";
            header('refresh:5;url=index.php');
        } else {

            $arrImg=readFileInfo($_FILES['image'],$_POST['pro_id']);
            if(moveTmpFile($arrImg)){
                $dbImg=substr($arrImg['ext'],1);
            } else {
                $dbImg='NULL';
            }
            $req[':pro_photo']=$dbImg;        
            $insReq->execute($req);
            header('Location: index.php');
        }
    }
?>