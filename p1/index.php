<?php

$colors_1=['Blue', 'Yellow', 'Red'];
$colors_2=['Blue', 'Yellow', 'Red'];


$Mixer_1=$colors_1[rand(0,2)];
$Mixer_2=$colors_2[rand(0,2)];



// All positbilities of color mixing: "if statment"

if ( $Mixer_1=='Blue' && $Mixer_2=='Yellow'){
$nana= 'Green color';
}
if ( $Mixer_1=='Yellow' && $Mixer_2=='Blue'){
$nana= 'Green color';
}

elseif ( $Mixer_1=='Blue' && $Mixer_2=='Red'){
   $nana= 'Purple color';
}
elseif ($Mixer_1=='$Red' && $Mixer_2=='$Blue'){
    $nana= 'Purple color'; 
}

elseif ($Mixer_1=='Yellow' && $Mixer_2=='Red'){
  $nana= 'Orange color';
}
elseif ( $Mixer_1=='Red' && $Mixer_2=='Yellow'){
$nana= 'Orange color';
}

elseif ($Mixer_1===$Mixer_2){
$nana=$Mixer_1;
}


require 'index-view.php';


