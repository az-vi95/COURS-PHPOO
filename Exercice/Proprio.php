<?php
require_once 'Vehicule.php';

class Proprio
{
    private $proprio;

    public function getVehicule(): ?Vehicule
    {
        return $this->proprio;
    }

    public function setVehicule(Vehicule $proprio): Proprio
    {
        $this->proprio = $proprio;

        return $this;
    }

}