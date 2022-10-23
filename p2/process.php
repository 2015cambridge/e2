<?php

session_start();

$Green="images/green.jpg";
$Purple="images/purple.jpg";
$Orange="images/orange.jpg";
$Black="images/black.jpg";
$error="images/error.jpg";



if (sizeof($_POST) > 1 && !isset($_POST["color3"])  ) {

$artist_color=$Purple;


}
if (sizeof($_POST) > 1 && !isset($_POST["color2"])  )  {

$artist_color=$Orange;

}

if (sizeof($_POST) > 1 && !isset($_POST["color1"])  )  {

$artist_color=$Green;

}

if (sizeof($_POST) > 2 ) {

$artist_color=$Black;

}

elseif(sizeof($_POST) < 2)


{
$artist_color=$error;


}





 


$_SESSION['results']=[
'first'=>$_POST["color1"],
'second'=>$_POST["color2"],
'third'=>$_POST["color3"],
'final'=>$artist_color,
'error'=>$error,



];

header('Location:index.php');




