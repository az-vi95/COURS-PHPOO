<?php
require 'Member.php';

$me = new Member();
var_dump($me->getFirstname()); // NULL : pas de valeur par défaut dans la classe pour cet attribut
echo '<br>';
// setter pour modifier la valeur de l'attribut
$me->setFirstname('Jax');
var_dump($me->getFirstname()); // Jax
$me->setLastname('Teller');
$me->setAge(31);

//$me->setFirstname(new Datetime());
// var_dump($me->getFirstname('JaxJaxJaxJax');

//var_dump($me->getFirstname());

$him = new Member();

// le 'return this' dans les setters permet de chainer
// les appels aux setters = interface fluide (fluent setters)
$him
    ->setFirstname('Clay')
    ->setLastname('Morrow')
    ->setAge(44)
;




