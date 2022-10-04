<?php


// assign placeholder images links to variables
$Green="https://via.placeholder.com/50/5BE810/5BE810";
$Blue="https://via.placeholder.com/50/31A2FF/31A2FF";
$Purple="https://via.placeholder.com/50/E63BFF/E63BFF";
$Yellow="https://via.placeholder.com/50/FFCE00/FFCE00";
$Red="https://via.placeholder.com/50/EF4136/EF4136";
$Orange="https://via.placeholder.com/50/FF8B00/FF8B00";

// Create two color-arrays, each with three possible colors to mix
$colors_1 =["$Blue", "$Yellow", "$Red"];
$colors_2 =["$Blue", "$Yellow", "$Red"];

// loop through the statments below and displaying them three times
for ($c=0; $c<3; $c++) {

// Let the computer choose arandom array position to grab a random color from the two colors-arrays created above
    $Mixer_1=$colors_1[rand(0, 2)];
    $Mixer_2=$colors_2[rand(0, 2)];

// The last result is when two colors are identicals, one of them will be pickeras a result
// First condition
if ($Mixer_1=="$Blue" && $Mixer_2 == "$Yellow" || $Mixer_1=="$Yellow" && $Mixer_2=="$Blue") {
        $artist_color= $Green;
    } 
// Second condition   
elseif ($Mixer_1=="$Blue" && $Mixer_2=="$Red" || $Mixer_1=="$Red" && $Mixer_2=="$Blue") {
       $artist_color= $Purple;
    } 
// Third condition   
elseif ($Mixer_1=="$Yellow" && $Mixer_2 == "$Red" || $Mixer_1=="$Red"  && $Mixer_2=="$Yellow") {
    $artist_color= $Orange;

// The last condition  is when two colors are identicals, one of them will be pickeras a result
    } else {
        $artist_color=$Mixer_1;
    }

// Storing the results in an array so we can call them from the view file

    $colors[]=[
'first' => $Mixer_1,
'second' => $Mixer_2,
'final' =>$artist_color,
    ];
}

require 'index-view.php';




