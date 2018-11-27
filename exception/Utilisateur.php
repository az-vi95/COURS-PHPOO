<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 22/11/2018
 * Time: 12:44
 */

class Utilisateur
{
    // 3 attributs : pseudo, age, statut (user ou admin)

    /**
     * @var string
     */
    private $pseudo;

    /**
     * @var int
     */

    private $age;

    /**
     * @var string
     */

    private $statut;

    /**
     * @var array
     */
    private static $statutAcceptes = [
        'user',
        'admin'
    ];

    /**
     * @return string
     */
    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    /**
     * @param string $pseudo
     * @return Utilisateur
     * @throws Exception
     */
    public function setPseudo(string $pseudo): Utilisateur
    {
        if(mb_strlen($pseudo) > 20) {
            throw new Exception("'$pseudo' fat plus de 20 caracteres");
        }
        $this->pseudo = $pseudo;

        return $this;
    }


    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     * @return Utilisateur
     */
    public function setAge(int $age): Utilisateur
    {
        if ($age < 0) {
            // classe d'exception pour un parametre non voulu
            throw new InvalidArgumentException("'$age' est négatif");
        }

        $this->age = $age;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatut(): string
    {
        return $this->statut;
    }

    /**
     * @param string $statut
     * @return Utilisateur
     */
    public function setStatut(string $statut): Utilisateur
    {
        if(!in_array($statut, self::$statutAcceptes)) {
            // classe d'exception en cas de valeur
            // non prise en charge par l'application
            throw new UnexpectedValueException(
                "'$statut' n'est pas reconnu, les status possibles sont : "
                .implode(', ', self::$statutAcceptes)
            );
        }

        $this->statut = $statut;
        return $this;
    }



}