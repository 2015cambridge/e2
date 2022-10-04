


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
h1{
  color:brown
}

  img{
    border-radius:50%;
    position:relative;
  top:10px
  }
</style>

<body>


 <h1> Artist Palette - CMYK</h1> <br>


<?php foreach($colors as $color) { ?>

<p>The artist picked the: &nbsp <img src='<?php echo $color['first'] ?>'>  &nbsp &nbsp
  Then added the: &nbsp <img src='<?php echo $color['second'] ?>'> &nbsp &nbsp
  So the artsit gets : &nbsp <img src='<?php echo $color['final'] ?>'></p>  &nbsp &nbsp
<br>

  
 
<?php } ?>















<body>
 <html>

