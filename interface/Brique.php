<?php
require_once 'Volume.php';
require_once 'Texture.php';
/**
 * une classe peut implément plusieurs interfaces,
 * elle doit dans ce cas implémenter les méthodes
 * de chacune des interfaces qu'elle implémente
 */

class Brique implements Volume, Texture
{
    public function getMatiere(): string
    {
        return 'terre';
    }

    public function getCouleur(): string
    {
        return 'Rouge';
    }

    public function getForme(): string
    {
        return 'parallélépipede rectangle';
    }

}