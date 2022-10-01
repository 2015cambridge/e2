<?php

$cards = [1,2,3,4,5,6,7,8,9,10];
shuffle ($cards);


foreach ($cards as $key => $number) {
    if ($key % 2 == 0) {
        $computerCards[] = $number;
    }
    else {
        $playerCards[] = $number;
    };
};


if ($playerCards< $computerCards){
    echo("Computer Wins :(");
}
    else if ($playerCards> $computerCards){
    echo("Player Wins :)");
    };

//