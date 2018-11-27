<?php


namespace Animal;


class Fourmi
{
    public function voirElephantAfrique()
    {
        // le nom de la classe par rapport au namespace dans lequel on est
        $elephant = new Continent\Afrique\Elephant();

        echo 'Je vois un éléphant avec de '
            . $elephant->getTailleOreilles()
            . 'oreilles'
        ;
    }



}