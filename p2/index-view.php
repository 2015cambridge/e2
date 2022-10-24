<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href='styles.css' rel='stylesheet'>
</head>
<body>


<h1>Project 2 - Artist Palette</h1>
<div class='form'>
<form method='POST' action='process.php'>



<div class='box'>
    
<h3>Pick at least two color to mix them</h3>

<input class='red' type='checkbox' id='red' name ='color1' value='red' <?php echo ( $color1 == 'red') ? 'checked' : '' ?> ><label for='red'>Red</label>
<input class='blue'  type='checkbox' id='blue' name ='color2' value='blue' <?php echo ( $color2 == 'blue') ? 'checked' : '' ?> ><label for='blue'>blue</label></div>
<input class='yellow'  type='checkbox' id='yellow' name ='color3' value='yellow' <?php echo ( $color3 == 'yellow') ? 'checked' : '' ?> ><label for='yellow'>Yellow</label></div>






  


<button type='submit'>Click to Mix</button>
<div class='box'>
<h3>Your final mix:</h3>

 <div > <img src='<?php echo $artist_color ?>'></div>
 </div>
</form>



</div>
  

      

</body>
</html>


 






