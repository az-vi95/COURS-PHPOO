<?php

use Animal\Continent\Afrique\Elephant as ElephantAfrique;;
use Animal\Continent\Afrique\Gazelle;
use Animal\Continent\Asie\Elephant as ElephantAsie;
use String\Utils;

/**
 * require_once 'Animal/Elephant.php';
 * require_once 'Animal/Continent/Afrique/Elephant.php';
 * require_once 'Animal/Continent/Asie/Elephant.php';
 */

require_once 'autoload.php';

//instancier un elephant de chaque continent
// et afficher la taille de leurs oreilles
$elephantAfrique = new ElephantAfrique();
$elephantAsie = new ElephantAsie();

echo 'Afrique : ' . $elephantAfrique->getTailleOreilles() . 'oreilles .';
echo '<br> Asie : ' . $elephantAsie->getTailleOreilles() . 'oreilles .';
echo '<br>';

Utils::scream('Afrique : ' . $elephantAfrique->getTailleOreilles() . ' oreilles'); //AFRIQUE : GRANDES OREILLES
echo'<br>';

// retourne le complet de la classe d'un objet
echo get_class($elephantAfrique); // Animal\Continent\Afrique\Elephant

echo'<br>';
// attribut statique 'class' qui existe pour toutes les classes
// et qui retourne le nom complet d'une classe à partir de son nom court
// ou de son alias
echo ElephantAsie::class; //Animal\Continent\Asie\Elephant

echo'<br>';
$gazelle = new Gazelle();
$gazelle->voirElephant();

echo'<br>';
$gazelle->etrePhotographiee();




