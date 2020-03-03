<?php
    require_once 'fonctions/fonctions.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Exercices</h1>
    <h2>Tableaux</h2>
    <ol>
        <li><a href="Tableaux/moisAnnee.php">Mois de l'année</a></li>
        <li><a href="Tableaux/capitales.php">Pays & capitales</a></li>
        <li><a href="Tableaux/Departements.php">Régions & départements</a></li>
    </ol>
    <hr>
    <h2>Les fonctions</h2>
    <div>
        <?php
            highlight_file('fonctions/fonctions.php');
        ?>
        <ol>
            <li><?php lien('http://gnu.org','Lien vers gnu.org'); ?></li>
            <li>Somme de [1, 2, 3, 4] : <?php echo somme([1, 2, 3, 4]); ?></li>
            <li>Test du mot de passe :
                <ul> azerty : <?= passComplex('azerty')?'OK':'Pas ok'; ?></ul>
                <ul> 4Zerty : <?= passComplex('4Zerty')?'OK':'Pas ok'; ?></ul>
                <ul> aZertyuio : <?= passComplex('aZertyuio')?'OK':'Pas ok'; ?></ul>
                <ul> aZertyu1o : <?= passComplex('aZertyu1o')?'OK':'Pas ok'; ?></ul>
            </li>
        </ol>
    </div>
    <hr>
    <h2>Date & heure</h2>
    <ol>
        <li><a href="date_time/exo1.php">Exercice 1 : Numéro de la semaine</a></li>
        <li><a href="date_time/exo2.php">Exercice 2 : Jours de formation restants</a></li>
        <li><a href="date_time/exo3.php">Exercice 3 : L'année est-elle bissextile ?</a></li>
        <li><a href="date_time/exo4.php">Exercice 4 : Montrer que la date est invalide</a></li>
        <li><a href="date_time/exo5.php">Exercice 5 : Afficher l'heure au format 11h25</a></li>
        <li><a href="date_time/exo6.php">Exercice 8 : Ajouter un mois à la date courante</a></li>
    </ol>
    <hr>
    <h2>Fichiers</h2>
    <ol>
        <li><a href="fichiers/exo1.php">Création de liens à partir de fichiers</a></li>
        <li><a href="fichiers/scandir.php">Lecture de répertoire</a></li>
        <li><a href="fichiers/uploadfiles.php">Lecture d'un fichier distant</a></li>
    </ol>
    <hr>
    <h2>Sessions & authentification</h2>
    <ol>
        <li><a href="auth_1/login_form.php">Formulaire d'authentification</a></li>
        <li><a href="auth_2/index.php">Mot de passe</a></li>
    </ol>
    
</body>
</html>