<?php
require 'Chien.php';
require 'Chat.php';
require 'Humain.php';
require 'Maitre.php';
require 'Siamois.php';
//require 'SiamoisAngora.php';

$chien = new Chien();

// on peut appeler la méthode identifier() définie dans Animal
// depuis un objet Chien car la classe Chien hérite d'Animal
echo $chien->identifier();
echo '<br>';

$chat = new Chat();
echo '<br>' . $chat->identifier();


/*
 *  Fatal error : La classe animal est devenue abstraite 
 * du coup on ne peut pas l'instancié
 * ex : $animal = new Animal()
 * echo '<br>' . $animal->identifier();
 */

echo'<br>'; 
$humain = new Humain();
$humain->donnerSucre($chien);
/**
 * Fatal error : le parametre de la méthode donnerSucre()
 * doit etre une instance de la classe Chien
 * $humain->donnerSucre($chat);
 */

 echo'<br>';
 // get_class() retourne le nom de la classe de l'objet
 echo get_class($chien); // Chien

 echo'<br>';
 // instanceof NOMCLASSE ,nous renvoie un booléen
 // permet de savoir si une variable contient un objet instance d'une classe donnée
 var_dump($chien instanceof Chien); // true
 var_dump($chien instanceof Chat); // false
 
 echo'<br>';
 // un objet instance de Chien ou de Chat est aussi instance d'Animal 
 // car Chien et Chat héritent d'Animal
 var_dump($chien instanceof Animal); // true
 var_dump($chat instanceof Animal); // true

 echo '<br>';
 $humain->caresser($chien); // Ouaf
 echo '<br>';
 $humain->caresser($chat); // Miaouw
 echo'<hr>';
 echo '<br>';
 $maitre = new Maitre();
 $maitre->setAnimal($chat);
 $maitre->getAnimal()->crier();

 echo '<br>';
 $siamois = new Siamois();
 $siamois->ronronner();

 //$chien->affichePrive();

//echo $chien->regne; -> Fatal error : on ne peut pas accéder à un attribut protégé(protected)

