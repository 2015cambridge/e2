@extends('templates/master')

@section('title')
    {{ $welcome }}
@endsection

@section('content')

<h1>Project 2 - Artist Palette</h1>
<div class='form'>
<form method='POST' action='process.php'>



<div class='box'>
    
<h3>Pick at least two color to mix them</h3>

<div><input class='red' type='checkbox' id='red' name ='color1' value='red' <?php echo (isset($first) and $first == 'red') ? 'checked' : '' ?> ><label for='red'>Red</label>
<input class='blue'  type='checkbox' id='blue' name ='color2' value='blue' <?php echo (isset($second) and $second  == 'blue') ? 'checked' : '' ?> ><label for='blue'>blue</label>
<input class='yellow'  type='checkbox' id='yellow' name ='color3' value='yellow' <?php echo (isset($third) and $third == 'yellow') ? 'checked' : '' ?> ><label for='yellow'>Yellow</label></div>

</div>

  


<button type='submit'>Click to Mix</button>
<div class='box'>
<h3>Your final mix:</h3>

 <div > <img src={{$artist_color }}></div>

</form>

@endsection
