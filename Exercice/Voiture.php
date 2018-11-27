<?php
require_once 'Vehicule.php';
/**
 * La classe Voiture héritée de Vehicule
 */

class Voiture extends Vehicule
{
    public function identifier()
    {
        return parent::identifier() . 'et elle a 4 roues';
    }

    public function carburant()
    {
        echo 'Diesel';
    }

    public function vitesse()
    {
        echo 'Elle a 7CV';
    }

}