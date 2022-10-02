

<?php
// 
$test='one';
$Blue= 'https://via.placeholder.com/150/0000FF/0000FF';
$Red= 'https://via.placeholder.com/150/FF0000/FF0000';
$Yellow = 'https://via.placeholder.com/150/FFFF00/FFFF00';
$Purple = 'https://via.placeholder.com/150/800080/800080';
$Orange= 'https://via.placeholder.com/150/FFA500/FFA500';
$Green = 'https://via.placeholder.com/150/00FF00/00FF00';


$colors_1=[$Blue, $Yellow, $Red];
$colors_2=[$Blue, $Yellow, $Red];



$Mixer_1=$colors_1[rand(0,2)];
$Mixer_2=$colors_2[rand(0,2)];

// All positbilities of color mixing: "if statment"

if ( $Mixer_1=='$Blue' && $Mixer_2=='$Yellow'){
   $Result= $Green;

}
elseif ($Mixer_1=='$Yellow' && $Mixer_2=='$Blue'){
   $Result= $Green;
}

elseif ( $Mixer_1=='$Blue' && $Mixer_2=='$Red'){
        $Result=  $Purple;
}
elseif ($Mixer_1=='$Red' && $Mixer_2=='$Blue'){
        $Result=  $Purple;
}

elseif ($Mixer_1=='$Yellow' && $Mixer_2=='$Red'){
        $Result= $Orange;
}
elseif ( $Mixer_1=='$Red' && $Mixer_2=='$Yellow'){
        $Result= $Orange;
}

// if none of the above poibilities take plave then it default to the same color:either Mixer_2 or Mixer_2

else  {
    $Result=$Mixer_1 ;
}




require 'index-view.php';


