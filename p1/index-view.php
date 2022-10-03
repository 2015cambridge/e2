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
</style>

<body>


 <h1>Artist Palette</h1>

<?php foreach($colors as $color) { ?>

<h3>The artist picked the: <?php echo $color['first']?> 
</h3>
<h3>He/she added the: <?php echo $color['second']?>
 </h3>
<h3>At the end he/she got the: <?php echo $color['final']?>
</h3>
<br>

<?php } ?>










<body>
 <html>

