<?php

$moves = ['rock', 'paper', 'scissors'];

// var_dump($moves);


$primary = [
    0 => 'red', 
    1 => 'blue', 
    2 => 'yellow',
];

$timesColorsAreSelected = range(0, 49);

$secondary = [ 
    1 => 'purple',
    2 => 'orange',
    3 => 'green',
];

foreach ($timesColorsAreSelected as $rangeOfNumbers) {
    foreach ($primary as $arrayPosition => $colorLabel) {
        shuffle($primary);
    }
    echo ('The first primary color chosen is ' .$primary[2]. '.');
  
    foreach ($primary as $arrayPosition => $colorLabel) {
        shuffle($primary);
    }
    echo ('The second primary color chosen is ' .$primary[0]. '.');

}


// echo ('The first primary color chosen is ' .$primary[2]. '.');

// foreach ($primary as $arrayPosition => $colorLabel) {
//     shuffle($primary);
//     shuffle($primary);
// }
// echo ('The second primary color chosen is ' .$primary[2]. '.');


// $primaryColor2 = ($primary[2]);
//     shuffle($primary);
//     shuffle($primary);
// echo ('The second primary color chosen is ' .$primaryColor2. '.');



 

// $selectRandomColor = array_rand($primary, $num = 2);



// var_dump($selectRandomColor[$primary]);

// var_dump($primary[$selectRandomColor[0]]);
// var_dump($primary[$selectRandomColor[1]]);

// echo ($primary[$selectRandom[0]]);
// echo ($primary[$selectRandom[1]]);



// var_dump($secondary);
// var_dump($secondary['redBlue']);

// var_dump($secondary);
// // sort($secondary);
// // arsort($secondary);
// ksort($secondary);
// var_dump($secondary);


// $color1 = ($primary[$selectRandom[0]]);
// $color2 = ($primary[$selectRandom[1]]);

// echo $color2;

// foreach($color1) {
//     var_dump($color1);
// };