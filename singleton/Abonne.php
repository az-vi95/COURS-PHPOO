<?php
require_once 'Cnx.php';


class Abonne
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Abonne
     */
    public function setId(int $id): Abonne
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     * @return Abonne
     */
    public function setPrenom(string $prenom): Abonne
    {
        $this->prenom = $prenom;
        return $this;
    }


    public static function findAll()
    {
        $pdo = CNX::getInstance(); // récupération de la bdd

        $stmt = $pdo->query('SELECT * FROM abonne ORDER BY prenom'); // requete
        $abonnes = [];

        while ($dbAbonne = $stmt->fetch()) { // boucle sur les résulats de la requete et a chaue tour de                //boucle on crée un abonne
            $abonne = new self(); // $abonne : objet
            $abonne
                ->setId($dbAbonne['id_abonne']) // id_abonne : attribut
                ->setPrenom($dbAbonne['prenom']) // attribut : prenom
            ;

            $abonnes[] = $abonne;

        }

        return $abonnes;
    }

}