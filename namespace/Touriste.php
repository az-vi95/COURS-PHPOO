<?php


class Touriste
{
    private $nbPhotos = 0;

    public function prendrePhoto()
    {
        $this->nbPhotos++;
    }

    /**
     * @return int
     */
    public function getNbPhotos(): int
    {
        return $this->nbPhotos;
    }


}