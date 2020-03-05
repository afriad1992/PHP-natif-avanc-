<?php
require "controlleridentification.php";
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="assets\css\list.css" rel="stylesheet">
        <link href="assets\css\mediaqueries.css" rel="stylesheet">
        <title>Atelier PHP N°4 - Affichage de la liste</title>
        <?php
// Inclusion de notre bibliothèque de fonctions
// Appel de la fonction de connexion
        ?>
    </head>
    <body >
        <div class="container">

            <form class="form container" id="form" action="#" method="POST" style="position:relative;botom:2em;">

                <div class="row" >
                    
                    <div class="col-4 offset-4" style="border: solid 0.5em;" >
<img src="assets\img\jarditou_logo.jpg" class="img-fluid " alt="promotion" title="Image responsive" >
                        <p style="font-size: 3em;"> Identifiez-vous </p>
                        <div class="form-group row">
                            <label class='col-form-label offset-1 lab' for='mail'  > adresse e-mail</label>
                            <input type='text' class='form-control col-10 offset-1 inp' id='mail' name='email' value="<?= ((isset($_POST["email"])) ? $_POST["email"] : ""); ?>">
                            <span> <?= ((isset($span["succes"])) ? $span["succes"] : "") ?></span>
                            <span class="col-12" style="color:red;"><?= ((isset($span["email"])) ? $span["email"] : "") ?></span> 
                        </div>

                        <div class="form-group row "> 
                            <label class='col-form-label offset-1 lab' for='passe'> Entrez le mot de passe </label>
                            <input type='password' class='form-control col-10 offset-1 inp' id='passe' name='password' value="<?= ((isset($_POST["password"])) ? $_POST["password"] : ""); ?>" >

                            <span style="color:red;" class="col-12"><?= ((isset($span["password"])) ? $span["password"] : "") ?></span> 

                            <span class="col-12" style="color:red;"><?= ((isset($span["oublie"])) ? $span["oublie"] : "") ?></span> 
                        </div>

                        <div class="form-group row ">
                            <button type="submit" class="btn btn-success col-10 offset-1 " id="valider" name="con"  >se connecter</button>

                            <p class="  offset-1 mr-1" style="font-size: 0.8em;">Lorsque vous vous identifiez, vous acceptez les Conditions générales de vente d’Amazon. Veuillez consulter notre Notice Protection de vos Informations Personnelles, notre Notice Cookies et notre Notice Annonces publicitaires basées sur vos centres d’intérêt.
                            </p>
                            <p class=" offset-1" style="font-size: 0.8em;"> Nouveau chez Jarditou? </p>
                            <a type="button"  href="creationuncompte.php" class="btn btn-success col-10 offset-1 " id="valider" name="con"  >creer votre compte Jarditoo</a>

                        </div>
                        <br>


                    </div>


                </div>

            </form>
        </div>
        <footer class="row" style="background-color: #f0f3f4  ;position:relative; top:6em;height:100em;">
            <div class=" offset-4 mr-2" style="font-size: 0.8em;color:blue;">Conditions d'utilisation</div> 
            <div class="mr-1"style="font-size: 0.8em;color:blue;"> Protection de vos informations personnelles <p style="position:relative;top:2em;color:black;">© 1996-2020, jarditoo.com, Inc. ou ses filiales.</p> </div> 
            <div class="mr-1 " style="font-size: 0.8em;color:blue;"> Aide</div> 
            <div class=" mr-3" style="font-size: 0.8em;color:blue;">  Annonces basées sur vos centres d’intérêt</div> 
           
        </footer>
        <?php
        require "footer.php";
        ?>