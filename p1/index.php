

<?php

$colors_1=['Blue', 'Red', 'Yellow'];
$colors_2=['Blue', 'Red', 'Yellow'];


$Mixer_1=$colors_1[rand(0,2)];
$Mixer_2=$colors_2[rand(0,2)];

// var_dump($Mixer_1);
// var_dump($Mixer_2);

//  $result;



// All positbilities of color mixing: "if statment"

if ($Mixer_1=='Blue' & $Mixer_2=='Yellow' || $Mixer_2=='Blue' & $Mixer_1=='Yellow' ){
    // var_dump('Green');
    $result='Green';
}

elseif ($Mixer_1=='Blue' & $Mixer_2=='Red'|| $Mixer_2=='Blue' & $Mixer_1=='Red'){
    // var_dump('Purple');
        $result='Purple';
}

elseif ($Mixer_1=='Yellow' & $Mixer_2=='Red'|| $Mixer_2=='Yellow' & $Mixer_1=='Red'){
    // var_dump('Orange');
        $result='Orange';
}

// if none of the above poibilities take plave then it default to the same color:either Mixer_2 or Mixer_2
else{
    $result=$Mixer_1;
}



require 'index-view.php';