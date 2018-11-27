<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 22/11/2018
 * Time: 11:17
 */

class Testeur
{
    /**
     * @param $nb
     * @throws Exception
     */
    public function accepteDix($nb)
    {
        if($nb != 10) {
            throw new Exception('10 expected, ' . $nb . ' given');
        }

        echo 'ok';
    }

    public function raleSiNonDix($nb)
    {
        try {
            $this->accepteDix($nb);
        } catch (Exception $e) {
            echo 'Je rale parce que je n\'ai pas reçu dix';
        }
    }
}