<?php

/**
 * Une classe abstrait ne peut pas être instanciée, 
 * elle ne sert que dans le cadre de l'héritage
 */
abstract class Animal
{
    /**
     * Attribut privé : accessible uniquement
     * dans Animal et pas dans les classes filles
     *
     * @var string
     */
    private $prive = 'attribut propre à animal';

    protected $regne = 'animal';

    public function identifier()
    {
        return 'Je suis un animal';
    }

    /**
     * Méthode abstraite
     * 
     * Toutes les classes qui héritent d'Animal doivent implémenter
     * (définir concrétement) cette méthode.
     * 
     * Une méthode abstraite ne peut être définie que dans une classe abstraite
     */
    abstract public function crier();
}