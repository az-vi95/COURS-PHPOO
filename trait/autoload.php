<?php
/**
 * Cette fonction est automatiquement appelée
 * au moment de l'utilisation d'une classe contenue
 * dans un fichier qui n'a pas été inclus
 *
 * $classname est le nom complte de la classe
 */

spl_autoload_register(function ($classname) {
    // chemin du fichier qui contient la classe à charger
    $file = __DIR__ . DIRECTORY_SEPARATOR
        . str_replace('\\',DIRECTORY_SEPARATOR, $classname)
        .'.php';


    echo $file . '<br>';

    //inclusion du fichier
    require_once $file;

});