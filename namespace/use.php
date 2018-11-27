<?php

// le 'use' permet d'appeler la classe par son nom court
// (sans le namespace) dans le reste du fichier
use Foo\A; // namspace\nomdeclasse

// Sans Alias de A de Bar il y aura conflit
// Comme on utilise 2 class dont le nom court est A
// dans le fichier , on aliase l'une des 2
use Bar\A as BA;

// user sur un namespace et non sur une classe
use Animal\Continent;
/*
require_once 'Foo/A.php';
require_once 'Bar/A.php';
*/

require_once 'autoload.php';
// instanciation de la classe A qui a le namespace Foo
$a = new A();
// instanciation de la classe A qui a le namespace Bar
// en utilisant l'alias déclaré dans le 'use'
$b = new BA();


// parce que l'on a un 'use' sur Animal\Continent
// Continent\Afrique\Elephant est Animal\Continent\Afrique\Elephant
$elephantAfrique = new Continent\Afrique\Elephant();
$elephantAsie = new Continent\Asie\Elephant();