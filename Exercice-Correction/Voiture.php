<?php
require_once 'Vehicule.php';


class Voiture extends Vehicule
{
    const NB_ROUES=4;

    public static function getNbRoues(): int
    {
        return self::NB_ROUES;
    }



}