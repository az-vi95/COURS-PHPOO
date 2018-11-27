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

require 'Moto.php';
require 'Voiture.php';
require_once 'Pompe.php';


//$voiture = new Voiture();
// error grace au controle dans le setter
//$voiture->setTypeCarburant('eau');

$voiture = new Voiture('diesel', 180, 80, 20);
$moto = new Moto('essence', 200, 40, 10);


/*
 * ajouter 2 attributs contenanceReservoir et contenuReservoir
 *
 *
 *
 * créer une classe Pompe ( à essence )
 * avec 3 attributs typeCarburant,contenance et contenu
 * dans un véhicule ajouter une méthode fairePlein() qui prend
 * une pompe en parametre qui remplit le réservoir du véhicule
 * et qui enleve autant d'essence à la pompe
 *
 * Bonus :
 * 1 - jeter une erreur si le type de carburant n'est pas le bon
 * 2 - gérer le cas ou la pompe ne contient pas assez d'essence
 */
$voiture = new Voiture('diesel', 180, 80, 20);
$moto = new Moto('essence', 200, 40, 10);
$voiture2 = new Voiture('essence', 200, 100, 10);
$pompeDiesel = new Pompe('diesel', 10000, 5000);
$pompeEssence = new Pompe('essence', 8000, 1000 );
$pompeASec = new Pompe('essence', 6000, 10);

echo 'avant: <br>'
    . 'vehicule :' . $voiture->getContenuReservoir() .'/'
    . $voiture->getContenanceReservoir()
    . '<br>pompe:' . $pompeDiesel->getContenu()
    . '/' .$pompeDiesel->getContenance();

$voiture->fairePlein($pompeDiesel);

echo 'apres: <br>'
    . 'vehicule :' . $voiture->getContenuReservoir() .'/'
    . $voiture->getContenanceReservoir()
    . '<br>pompe:' . $pompeDiesel->getContenu()
    . '/' .$pompeDiesel->getContenance();



echo '<br>';
$moto->fairePlein($pompeDiesel);



echo 'avant: <br>'
    . 'vehicule :' . $voiture2->getContenuReservoir() .'/'
    . $voiture2->getContenanceReservoir()
    . '<br>pompe:' . $pompeASec->getContenu()
    . '/' .$pompeASec->getContenance();

$voiture2->fairePlein($pompeASec);

echo 'apres: <br>'
    . 'vehicule :' . $voiture2->getContenuReservoir() .'/'
    . $voiture2->getContenanceReservoir()
    . '<br>pompe:' . $pompeASec->getContenu()
    . '/' .$pompeASec->getContenance();

echo '<br>';
