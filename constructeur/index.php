<?php
require 'Person.php';

// Fatal error : le constructeur de la classe a un parametre obligatoire
//$me = new Person(); 

// pour instancier la classe, il fait passer une valeur 
// pour le parametre obligatoire de la méthode de la méthode __construct()

$me = new Person('Jax');

// le 2e parametre du constructeur est optionnel,
// on peut choisir d'y passer une valeur ou pas
$him = new Person('Tig', ['PHP', 'Laravel']);

 
// on ne peut pas faire l'echo d'un objet  , sans méthode __toString()
// dans la classe : fatal error
echo $him;
