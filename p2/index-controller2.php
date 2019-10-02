<?php

$primaryArray = ['red', 'blue', 'yellow'];

$totalCounts = [
    0 => [0, 'Green'],
    1 => [0, 'Orange'],
    2 => [0, 'Purple'],
];

$matchingCounts = 0;

for ($a = 1; $a <= 50; $a++) { 

    for ($i = 0; $i <= 1; $i++) {
        $primarySelected[0] = $primaryArray[rand(0, 2)];
        $primarySelected[1] = $primaryArray[rand(0, 2)];
    }

    if ($primarySelected[0] == $primarySelected[1]) {
        $matchingCounts++;
    }
    if ($primarySelected[0] == 'red' and $primarySelected[1] == 'blue') {
        $totalCounts[2][0]++;
    }
    if ($primarySelected[0] == 'blue' and $primarySelected[1] == 'red') {
        $totalCounts[2][0]++;
    }
    if ($primarySelected[0] == 'red' and $primarySelected[1] == 'yellow') {
        $totalCounts[1][0]++;
    }
    if ($primarySelected[0] == 'yellow' and $primarySelected[1] == 'red') {
        $totalCounts[1][0]++;
    }
    if ($primarySelected[0] == 'blue' and $primarySelected[1] == 'yellow') {
        $totalCounts[0][0]++;
    }
    if ($primarySelected[0] == 'yellow' and $primarySelected[1] == 'blue') {
        $totalCounts[0][0]++;
    }
}