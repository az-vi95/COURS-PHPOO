<?php
require_once 'autoload.php';

$foo = new Foo();
$foo->setAttr('exemple');
$foo->dummpAttr();

$bar = new Bar();
$bar->setBaz(10);
$bar->dumpBaz();

$foo->displayAttr('red');
$foo->display('mon texte', 'green');