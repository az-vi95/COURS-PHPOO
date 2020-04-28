<?php
class User
{
    /**
     * attribut de classe avec une valeur par défaut
     * @var string 
     */
    public $firstname = 'Jax1'; //  $firstname est une variable

    /**
     *  attribut sans valeur par défaut (=null)
     */
    public $lastname;

    /**
     * Un attribut privé n'est accessible qu'à l'intérieur de la classe
     * 
     * @var int
     */
    private $age = 42;
    
    /**
     * Une méthode est une fonction interne à la classe
     * 
     */
    public function displayName()
    {
        // $this fait référence à l'objet qui appelle la méthode
        echo trim($this->firstname . ' ' . $this->lastname);
    }

    public function displayInfo()
    {
        $this->displayName();
        // l'attribut privé est accessible dans les méthodes de la classe
        echo ', ' . $this->age . ' ans';
    }

    // écrire une méthode qui fait vieillier un utilisateur d'un an 
    // et l'utliser
    public function growOld()
    {
        $this->age++; // modification de valeur de l'attribut $age
        
    }
}

// instanciation de la classe User
// $user est un objet instance de la classe User
$user = new User(); // $user est un objet de la ckasse User
// la fleche permet d'acceder à un attribut de la classe
echo $user->firstname;
echo'<br>';
var_dump($user->lastname); // null
// modification de la valeur d'un attribut d'objet ( ici lastname)
$user->lastname = 'TELLER';
var_dump($user->lastname); // TELLER

// Création d'un nouvel attribut à la voléé = mauvaise pratique
$user->newAttribute = 'Une valeur';
echo $user->newAttribute;
echo '<br>';
// $user2 est un autre objet instance de la classe User
// la valeur de ses attributs n'est pas liée à celle de $user
$user2 = new User();
var_dump($user2->lastname); // null

// appel de la méthode displayName
echo'<br>';
$user->displayName(); // Jax TELLER
echo'<br>';
$user2->displayName(); // Jax

// var_dump($user->age);  -> Résultat : FATAL ERROR : un attribut privé est inaccessible en dehors de la classe
echo '<br>';
$user->displayInfo();
$user->growOld(); // il n'affiche rien
echo '<br>';
$user->displayInfo(); // 



