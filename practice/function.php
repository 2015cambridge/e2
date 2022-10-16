<?php


function vowelCount($word)
{

    $count=0;
    $lenght = strlen($word);
    $result= str_split($word);
    for ($i= 0; $i<$lenght; $i++) {
        if ($word[$i] =='a' ||  $word[$i]=='e' || $word[$i] =='u' ||  $word[$i]=='i' || $word[$i]=='0'  ) {
       $count+=1;
    
        } else {
          Echo 'No vowels found';
          return;
        }
    }
echo "Number of Vowels is: $count ";

}
vowelCount('ddd');
 
?>