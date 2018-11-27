<?php
require_once 'Chien.php';

class Humain
{   
    public function donnerSucre(Chien $chien)
    {   
        /**
         * typage de parametre par nom de classe
         */
        $chien->crier();
    }

    /**
     * $animal doit etre une instance d'une classe qui hérite d'Animal
     */
    public function caresser(Animal $animal)
    {   
        // comme la méthode crier() est définie dans la classe Animal
        // (en méthode abstraite) , on est sur que l'animal contient 
        // la méthode crier()
        $animal->crier();
    }
}