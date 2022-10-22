<?php


require 'Person.php';



$Person= new Person('Person.json');

$name=$Person->fullName(1);

var_dump($name);






require'index-view.php';
