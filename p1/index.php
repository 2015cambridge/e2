<?php



$Green="https://via.placeholder.com/50/5BE810/5BE810";
$Blue="https://via.placeholder.com/50/31A2FF/31A2FF";
$Purple="https://via.placeholder.com/50/E63BFF/E63BFF";
$Yellow="https://via.placeholder.com/50/FFCE00/FFCE00";
$Red="https://via.placeholder.com/50/EF4136/EF4136";
$Orange="https://via.placeholder.com/50/FF8B00/FF8B00";


$colors_1 =["$Blue", "$Yellow", "$Red"];
$colors_2 =["$Blue", "$Yellow", "$Red"];


for ($c=0; $c<3; $c++) {
    $Mixer_1=$colors_1[rand(0, 2)];
    $Mixer_2=$colors_2[rand(0, 2)];




if ($Mixer_1=="$Blue" && $Mixer_2 == "$Yellow" || $Mixer_1=="$Yellow" && $Mixer_2=="$Blue") {
        $artist_color= $Green;
    } 
    
elseif ($Mixer_1=="$Blue" && $Mixer_2=="$Red" || $Mixer_1=="$Red" && $Mixer_2=="$Blue") {
       $artist_color= $Purple;
    } 
    
elseif ($Mixer_1=="$Yellow" && $Mixer_2 == "$Red" || $Mixer_1=="$Red"  && $Mixer_2=="$Yellow") {
    $artist_color= $Orange;


    } else {
        $artist_color=$Mixer_1;
    }


    $colors[]=[
'first' => $Mixer_1,
'second' => $Mixer_2,
'final' =>$artist_color,
    ];
}

require 'index-view.php';




