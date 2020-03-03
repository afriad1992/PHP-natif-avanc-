<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial-scal=1, shrink-to-fit=no">
        <title>Bienvenue chez Jarditou</title>
        <!--
            Utilisation de plusieurs balises link au lieu de la directive @import de css
            suite à la lecture de l'article :
            https://www.alsacreations.com/actu/lire/695-utilisation-style-css-import-link.html
            TOUJOURS IMPORTER LES CSS DU FRAMEWORK EN PREMIER
        -->
        <link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
        <!-- J'ai fait le choix de DL les sources de bootstap et ses dépendances pour pouvoir faire tourner mon code si un des CDN est tombé -->
        <link href="assets/css/main.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <!-- Bandeau Logo + légende -->
            <figure class="Logo row align-items-center">
                <img src="assets/img/jarditou_logo.jpg" alt="logo Jarditou" class="col-6 responsive-img"
                        srcset="assets/img/jarditou_logo_50.jpg 640w,
                                assets/img/jarditou_logo_25.jpg 320w">
                <figcaption class="col-6 h1">Tout le jardin</figcaption>
            </figure>
            <!-- navbar pour le menu burger -->
            <nav id="navbarHaut" class="navbar navbar-expand-md bg-dark navbar-dark">
                <!-- bouton burger -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#burgerHaut">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Contenu du menu -->
                <div class="navbar navbar-expand-md bg-dark navbar-dark" id="burgerHaut">
                    <ul class="navbar-nav listeMenu">
                        <li class="nav-item menuspc">
                            <a href="index.php" class="text-white">Accueil&nbsp;</a>
                        </li>
                        <!--<li class="nav-item menuspc">
                            <a href="tableau.html" class="text-white">Tableau&nbsp;</a>
                        </li>-->
                        <li class="nav-item menuspc">
                            <a href="contact.html" class="text-white">Contact&nbsp;</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="row Pub">
                <img src="assets/img/promotion.jpg" class="Pub responsive-img col" alt="Promotion sur lames de terrasse"
                srcset="assets/img/promotion_50.jpg 640w,
                        assets/img/promotion_25.jpg 320w">
            </div>
        </header>
        <main>
