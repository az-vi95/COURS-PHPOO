<?php
require_once 'Animal.php';

class Chien extends Animal
{   
    /**
     * Implémentation de la méthode abstraite définie dans Animal
     */
    public function crier()
    {
        echo 'Ouaf';
    }

    public function affichePrive()
    {
        // l'attribut n'est pas accessible dans les classes filles
        // car déclaré private dans Animal
        echo $this->prive;
    }

    public function afficheRegne()
    {
        // un attribut ou une méthode protectes est accessible dans les méthodes
        // des classes filles
        echo $this->regne;
    }
}