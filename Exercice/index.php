<?php
/**
 *  créer une classe abstraite Véhicule
 *  2 classes qui en héritent : Voiture et Moto
 *  qui vont contenir des méthodes pour retourner
 * - le nombre de roues (lié au type de véhicule)
 * - type de carburant (diesel ou essence)
 * - la vitesse maximale
 * instancier un véhicule de chaque
 */

require 'Voiture.php';
require 'Moto.php';
require 'Proprio.php';

$voiture = new Voiture();

echo $voiture->identifier();
echo'<br>';

$moto = new Moto();
echo $moto->identifier();

echo'<br>';
echo $moto->carburant();
echo'<br>';
echo $voiture->carburant();
echo'<br>';
echo $voiture->vitesse();

echo'<br>';
echo $moto->vitesse();

echo '<br>';
$proprio = new Proprio();
$proprio->setVehicule($voiture);
$proprio->getVehicule()->carburant();
