<?php
class Person
{
    private $firstname;

    private $hobbies = [];
    /**
     * Le constructeur est appelé automatiquement
     * à l'instanciation de la classe
     * 
     * @param string $firstname
     * @param array $hobbies optionnel : tableau vide par défaut
     */

    public function __construct($firstname, array $hobbies= [])
    {
        //$this->firstname = $firstname;
        // tant qu'à faire autant utiliser le setter qui peut contenir 
        // des controles sur la valeur
        $this->setFirstname($firstname);
        $this->setHobbies($hobbies);
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getHobbies()
    {
        return $this->hobbies;
    }

    public function setHobbies($hobbies)
    {
        $this->hobbies = $hobbies;

        return $this;
    }

    /**
     * La méthode __toString() est appelée automatiquement quand on traite
     * un objet instance de la classe comme une chainte de caracteres
     * (ex : faire un echo dessus)
     */
    public function __toString()
    {
        return $this->firstname . ' ( ' . implode(' , ', $this->hobbies) . ')'; 
        // implode transforme un tableau en chaine de caractere 
    }
}