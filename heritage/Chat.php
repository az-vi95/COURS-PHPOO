<?php
require_once 'Animal.php';


class Chat extends Animal
{   
    /**
     * Surcharge (=rdéfinition ) de la méthode définie dans Animal
     */
    public function identifier()
    {   
        // parent fait référence à la classe mère
        // on utilise toujours :: avec parent
        return parent::identifier() . ' et je suis un chat';
    }

    /**
     * Implémentation de la méthode abstraite définie dans Animal
     */
    public function crier()
    {
        echo 'Miaouw';
    }

    final public function ronronner()
    {
        echo 'Ronron';
    }
}