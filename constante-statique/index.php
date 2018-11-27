<?php
require 'Config.php';
require 'Commande.php';

// opérateur de résolution de portée :: pour accéder
// à partir du nom de la classe qui la contient
echo Config::RACINE_WEB;
echo '<br>';

// même opérateur :: pour accéder à un attribut statique
echo Commande::$defaultStatus;
echo '<br>';

// appel à une méthode statique
echo Commande::getNbCommandes();
echo '<br>';

$commande = new Commande(); // encours
// on peut y accéder aussi depuis l'objet instancié
echo $commande::$defaultStatus; // en cours

echo '<br>';
echo Commande::getNbCommandes(); // 1 

$commande2 = new Commande();
echo '<br>';
echo Commande::getNbCommandes(); // 2

echo '<br>';
// Commande::dummy(); --> Fatal Error