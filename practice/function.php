<?php

function vowelCount($word)
{

    $result= str_split($word);
  


    $i=0;
    
    for ($i= 0; $i<10; $i++) {
        if ($result[$i] =='a' ||  $result[$i]=='e' || $result[$i] =='u' ||  $result[$i]=='i' ||  $result[$i]=='0'  ) {
       $i++;
           return;

        } else {
   
          Echo 'No vowels found';
          return;

        };
    };


};

    
 var_dump (vowelCount('apple'));
 





?>






