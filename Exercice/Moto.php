<?php
require_once 'Vehicule.php';
/**
 * La classe Moto héritée de Vehicule
 *
 */

class Moto extends Vehicule
{
    public function identifier()
    {
        return parent::identifier() . 'et elle a 2 roues';
    }

    public function carburant()
    {
        echo 'Essence';
    }

    public function vitesse()
    {
        echo 'Elle a 5CV';
    }

}