<?php
require_once 'Animal.php';

class Maitre
{   
    /**
     * @var Animal
     */
    private $animal;

    /**
     * Getter de l'attribut $animal
     * Retourne une instance d'Animal ou null (?)
     */
    public function getAnimal(): ?Animal
    {
        return $this->animal;
    }

    /**
     * Setter de l'attribut $animal
     * Prend un objet instance d'une classe fille d'Animal
     * en parametre et retourne l'objet Maitre qui l'appelle
     */
    public function setAnimal(Animal $animal): Maitre
    {
        $this->animal = $animal;
        
        return $this;
    }
}