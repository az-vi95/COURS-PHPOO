<?php
require_once 'Volume.php';


// dans ma classe il y a toutes les méthodes définis dans interface d'ou implements
class Cube implements Volume
{
    public function getForme(): string
    {
        return 'cube';
    }

}