<!doctype html>
<html lang='en'>

<head>
    <title>Mystery Word Scramble</title>
    <meta charset='utf-8'>
    <style>

        .hint{ color :blue}
    </style>
</head>
<body>
    <form method='POST' action='process.php'>
        <h1>Mystery Word Scramble</h1>


 <?php
$words = [
    'one' => 'eins',
    'two' => 'zwei',
    'three' => 'drei',
 
];

shuffle($words);

$keys = array_keys($words);
$key = $keys[1];
echo key($words[1]);

$firstKey = array_key_first($words);
$firstValue = $words[$firstKey];


 ?> 

     
        <h3 class='hint'>Hint: <?php echo ($firstKey)?></h3> 
    
        <label for='answer'>Your guess:</label>
        <input type='text' name='answer' id='answer'>




</select>



        <button type='submi t'>Check answer</button>
    </form>
</body>
</html>



