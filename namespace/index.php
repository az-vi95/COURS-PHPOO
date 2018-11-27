<?php
require_once 'Foo/A.php';
require_once 'Bar/A.php';

//$a = new A(); -> error : la classe A n'existe pas

// le nom complet (nom pleintement qualifié / fully qualified name)
// de la classe A qui a le namespace Foo est Foo\A
$a = new Foo\A();
// instanciation de la classe A qui a le namspace Bar
$a = new Bar\A();