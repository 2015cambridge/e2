<?php


session_start();


if(isset($_SESSION['results'])){
    $artist_color= $_SESSION['results']['final'];
       $first= $_SESSION['results']['first'];
       $second= $_SESSION['results']['second'];
       $third= $_SESSION['results']['third'];
       $error= $_SESSION['results']['error'];




}



require 'index-view.php';