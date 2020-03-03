<?php

session_start();
// Si auth est défini, on affiche ok, sinon on affiche le formulaire de connexion
isset($_SESSION['auth'])?header('location: ok.html'):header('location: login_form.php');
