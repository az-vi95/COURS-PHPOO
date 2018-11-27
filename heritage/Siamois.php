<?php
require_once 'Chat.php';
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 20/11/2018
 * Time: 10:42
 */

/**
 * Class Siamois
 * Une classe déclarée finale ne peut pas être surchargée
 */

final class Siamois extends Chat
{
    /**
     * Fatal error:La méthode ronronner est déclarée final
     * dans Chat,donc on ne peut pas la surcharger

    public function ronronner()
    {
        echo 'Ronronron';
    }
    */
}