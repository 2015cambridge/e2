<?php
// Create two color-arrays, each with three possible colors to mix
$colors_1=['Blue', 'Yellow', 'Red'];
$colors_2=['Blue', 'Yellow', 'Red'];


for ($c=0; $c<3; $c++) {
// Let the computer choose arandom array position to gran a random color from the two color-arrays created
    $Mixer_1=$colors_1[rand(0, 2)];
    $Mixer_2=$colors_2[rand(0, 2)];


// All positbilities of color mixing - the same result can have two possibilites i.e.,  blue+yellow is a possibility and yellow+blue is another posibility

    if ($Mixer_1=='Blue' && $Mixer_2=='Yellow' ||  $Mixer_1=='Yellow' && $Mixer_2=='Blue') {
        $artist_color= 'Green';
    } elseif ($Mixer_1=='Blue' && $Mixer_2=='Red' || $Mixer_1=='Red' && $Mixer_2=='Blue') {
        $artist_color= 'Purple';
    } elseif ($Mixer_1=='Yellow' && $Mixer_2=='Red' ||$Mixer_1=='Red' && $Mixer_2=='Yellow') {
        $artist_color= 'Orange';

// The last result is when two colors are identicals, one of them will be pickeras a result
    } else {
        $artist_color=$Mixer_1;
    }

// Storing the results in an array so we can call them from the view file
    $colors[]=[
    'first' => $Mixer_1,
      'second' => $Mixer_2,
      'final' =>$artist_color
    ];
}

require 'index-view.php';


