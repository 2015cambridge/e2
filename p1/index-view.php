


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
/* styling the header */
h1{
  color:brown
}
/* styling the images  */
img{
    border-radius:50%;
    position:relative;
  top:10px
  }
</style>

<body>


 <h1> Artist Palette - CMY</h1> <br>

<!-- looping through all the the stored array  from the index file and acccessing all data stored in that array -->
<?php foreach($colors as $color) { ?>

<p>The artist picked the: &nbsp <img src='<?php echo $color['first'] ?>'>  &nbsp &nbsp
  Then added the: &nbsp <img src='<?php echo $color['second'] ?>'> &nbsp &nbsp
  So the artsit gets : &nbsp <img src='<?php echo $color['final'] ?>'></p>  &nbsp &nbsp
<br>

  
 
<?php } ?>















<body>
 <html>

