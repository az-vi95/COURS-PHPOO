<?php
require_once 'Abonne.php';

$abonnes = Abonne::findAll();

foreach ($abonnes as $abonne) {
    /**
     * @var Abonne $abonne
     */
    echo $abonne->getId() . ' : ' . $abonne->getPrenom() . '<br>';
}