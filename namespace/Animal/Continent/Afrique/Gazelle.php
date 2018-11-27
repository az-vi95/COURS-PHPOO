<?php


namespace Animal\Continent\Afrique;

// si on voulait utiliser l'éléphant d'asie ici
// il faudrait ajouter ce 'use' :
// use Animal\Continent\Asie\Elephant;

// pour utiliser la classe Touriste sans antislash
// on peut
// use Touriste;

class Gazelle
{
    public function  voirElephant()
    {
        /**
         * Animal\Continent\Afrique
         * car sans précisier de namespace et sans use la classe est celle qui se trouve
         * dans lel namespace dans lequel on est.
         */
        $elephant = new Elephant();

        echo 'Je vois un éléphant avec de '
            . $elephant->getTailleOreilles()
            . 'oreilles'
            ;
    }

    public function etrePhotographiee()
    {
        /*
         * sans antislash et sans use
         * ce serait Animal\Continent\Afrique\Touriste
         * (qui n'existe pas)
         */
        $touriste = new \Touriste();
        $touriste->prendrePhoto();
    }
}