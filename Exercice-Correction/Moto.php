<?php
require_once 'Vehicule.php';


class Moto extends Vehicule
{
    const NB_ROUES=2;

    public static function getNbRoues(): int
    {
        return self::NB_ROUES;
    }


}