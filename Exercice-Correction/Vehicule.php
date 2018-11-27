<?php

require_once 'Pompe.php';

/** CLASS Vehicule */
abstract class Vehicule
{
    /**
     * @var string
     */
    protected $typeCarburant;

    /**
     * @var int
     */
    protected $vitesseMax;

    private static $carburantPossibles = [
        'essence',
        'diesel'
    ];

    /**
     * @var int
     */
    protected $contenanceReservoir;

    /**
     * @var int
     */

    protected $contenuReservoir;

    /**
     * Vehicule Constructor,
     * @param string $typCarburant
     * @param int $vitesseMax
     */

    public function __construct(
        string $typeCarburant,
        int $vitesseMax,
        int $contenanceReservoir,
        int $contenuReservoir)

    {
        $this->setTypeCarburant($typeCarburant);
        $this->setVitesseMax($vitesseMax);
        $this->setContenanceReservoir($contenanceReservoir);
        $this->setContenuReservoir($contenuReservoir);

    }

    /**
     * @return string
     */
    public function getTypeCarburant(): string
    {
        return $this->typeCarburant;
    }

    /**
     * @param string $typeCarburant
     * @return Vehicule
     */
    public function setTypeCarburant(string $typeCarburant): Vehicule
    {

        if (!in_array($typeCarburant, self::$carburantPossibles)) {
            trigger_error('Carburant non supporté', E_USER_ERROR);
        }

        $this->typeCarburant = $typeCarburant;
        return $this;
    }

    /**
     * @return int
     */
    public function getVitesseMax(): int
    {
        return $this->vitesseMax;
    }

    /**
     * @param int $vitesseMax
     * @return Vehicule
     */
    public function setVitesseMAx(int $vitesseMax): Vehicule
    {
        $this->vitesseMax = $vitesseMax;
        return $this;
    }

    /**
     * @return int
     */
    public function getContenanceReservoir(): int
    {
        return $this->contenanceReservoir;
    }

    /**
     * @param int $contenanceReservoir
     * @return Vehicule
     */
    public function setContenanceReservoir(int $contenanceReservoir): Vehicule
    {
        $this->contenanceReservoir = $contenanceReservoir;
        return $this;
    }

    /**
     * @return int
     */
    public function getContenuReservoir(): int
    {
        return $this->contenuReservoir;
    }

    /**
     * @param int $contenuReservoir
     * @return Vehicule
     */
    public function setContenuReservoir(int $contenuReservoir): Vehicule
    {
        $this->contenuReservoir = $contenuReservoir;
        return $this;
    }

    public function fairePlein(Pompe $pompe)
    {
        // Bonus 1
        if ($this->typeCarburant != $pompe->getTypeCarburant()){
            echo 'Surtout pas !';

            return; // arrête l'exécution de la méthode
        }

        // MAJ contenu au niveau du contenance
        //$this->contenuReservoir = $this->contenanceReservoir;
        // ou
        //$this->setContenuReservoir($this->contenanceReservoir);

        // quantiité d'essence nécessaire pour faire le plein
        $besoinEssence = $this->contenanceReservoir - $this->contenuReservoir;


        // Bonus 2

        if ($pompe->getContenu() < $besoinEssence) {
            $besoinEssence = $pompe->getContenu();

        }

        // ajout du besoin
        //$this->contenuReservoir = $this->contenuReservoir + $besoinEssence;
        // ou
        $this->setContenuReservoir($this->contenuReservoir + $besoinEssence);

        // enlever la quantité ajoutée au véhicule
        $pompe->setContenu($pompe->getContenu() - $besoinEssence);
    }



    abstract public static function getNbRoues(): int;





}