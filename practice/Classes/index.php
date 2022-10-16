<?php


require 'Person.php';



$Person= new Person('Person.json');

$product=$Person->fullName(2);

var_dump($product);






require'index-view.php';
