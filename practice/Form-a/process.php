<?php

$words = [
    'one' => 'eins',
    'two' => 'zwei',
    'three' => 'drei',
 
];

$nana=shuffle($words);

$firstKey = array_key_first($nana);
$firstValue = $nana[$firstKey];

$answer = $_POST['answer'];

$haveAnswer = true;

if ($answer == '') {
    $haveAnswer = false;
 
} elseif ($answer == $firstKey ) {
    $correct = true;
} else {
    $correct = false;
}
       

require 'process-view.php';