<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 22/11/2018
 * Time: 15:58
 */

class Foo
{
    // use , dans le corps de la classe permet d'intégrer
    // un ou plusieurs traits à la classe
    use Dumper, Displayer;

    private $attr;

    /**
     * @return mixed
     */
    public function getAttr()
    {
        return $this->attr;
    }

    /**
     * @param mixed $attr
     * @return Foo
     */
    public function setAttr($attr)
    {
        $this->attr = $attr;
        return $this;
    }

    public function dummpAttr()
    {
        // méthode dump() venant du trait Dumper
        $this->dump($this->attr);
    }

    public function displayAttr($color = null)
    {
        // méthode display() qui vient du trait Displayer
        $this->display($this->attr, $color);
    }


}