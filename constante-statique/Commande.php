<?php
class Commande
{
    /**
     * Attribut statique
     * Appartient à la classe et non aux objets instanciés
     */
    public static $defaultStatus = 'en cours';

    private static $nbCommandes = 0;

    public function __construct()
    {
        self::$nbCommandes++;
    }

    public static function getNbCommandes()
    {
        return self::$nbCommandes;
    }

    public static function dummy()
    {   
        // Fatal error : $this n'a pas de sens
        // dans une méthode statique car $this fat référence à un objet instancié
        return $this;
    }
}