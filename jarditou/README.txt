Configuration:

Base de données:

Pour créer la base de données
	Lancer le script jarditou.sql

dans assets/php/dbconnect.php

Par défaut la connexion à la base de données se fait avec le compte root.
Si un autre utilisateur MySQL doit être utilisé
	Modifier la valeur de $login
Sur wampserver, le port utilisé par MariaDB est le 3307.
Si le port doit être changé
	Modifier la valeur de $port
