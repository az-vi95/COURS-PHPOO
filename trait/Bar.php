<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 22/11/2018
 * Time: 16:14
 */

class Bar
{
    use Dumper;

    private $baz;

    /**
     * @return mixed
     */
    public function getBaz()
    {
        return $this->baz;
    }

    /**
     * @param mixed $baz
     * @return Bar
     */
    public function setBaz($baz)
    {
        $this->baz = $baz;
        return $this;
    }

    public function dumpBaz()
    {
        $this->dump($this->baz);
    }
}