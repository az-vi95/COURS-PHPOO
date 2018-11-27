<?php
class Config
{
    const RACINE_WEB = '/php/boutique';

    public function getPath($file)
    {   
        // $this fait référence à 'lobjet instancié
        // self fait référence à la classe elle-même 
        return self::RACINE_WEB . '/' . $file; 
    }
}