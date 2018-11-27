<?php
require_once 'Volume.php';
require 'Cube.php';
require 'Sphere.php';
require 'De.php';

function afficheForme(Volume $volume)
{
    echo ' La forme du volume est : ' . $volume->getForme();
}

$cube = new Cube();
$sphere = new Sphere();

var_dump($cube instanceof Volume); // true

// Cube et Sphere implément Volume
// donc on peut les passer en parametre à la fonction afficheForme()
echo '<br>';
afficheForme($cube); //La forme du volume est : cube
echo '<br>';
afficheForme($sphere); //La forme du volume est : sphere

echo '<br>';
$de = new De();
var_dump($de instanceof De); // true
echo '<br>';
// par héritage de Cube
var_dump($de instanceof Cube); // true par héritage extends
echo '<br>';
// par implémentation de Texture :
var_dump($de instanceof Texture); // true
echo '<br>';
// par héritage de Cube qui implémente Volume :
var_dump($de instanceof Volume); // true