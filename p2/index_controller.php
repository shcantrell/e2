<?php

$primaryColorArray = ['red', 'blue', 'yellow'];

$secondaryColorArray = [
    0 => [0, 'Green'],
    1 => [0, 'Orange'],
    2 => [0, 'Purple'],
];

$matchingCounts = 0;
$primaryColorSelected = [];
$selectionCount = 0;
$mostCounted = null;

for ($i = 0; $i <= 1; $i++) {
    for ($a = 1; $a <= 50; $a++) {
        $primaryColorSelected[$a][] = $primaryColorArray[rand(0, 2)];
    
        if ( (array_pad($primaryColorSelected[$a], 2, 0) == $primaryColorSelected[$a]) and ($primaryColorSelected[$a][0] == 'red' and $primaryColorSelected[$a][1] == 'blue') ) {
            $primaryColorSelected[$a][2] = $secondaryColorArray[2][1];
            $secondaryColorArray[2][0]++;
            // echo (' Answer ' . $a . ' is ' . $mixedColorResult . ' ');
        } elseif ( (array_pad($primaryColorSelected[$a], 2, 0) == $primaryColorSelected[$a]) and ($primaryColorSelected[$a][0] == 'blue' and $primaryColorSelected[$a][1] == 'red') ) {
            $primaryColorSelected[$a][2] = $secondaryColorArray[2][1];
            $secondaryColorArray[2][0]++;
            // echo (' Answer ' . $a . ' is ' . $mixedColorResult . ' ');
        } elseif ( (array_pad($primaryColorSelected[$a], 2, 0) == $primaryColorSelected[$a]) and ($primaryColorSelected[$a][0] == 'yellow' and $primaryColorSelected[$a][1] == 'blue') ) {
            $primaryColorSelected[$a][2] = $secondaryColorArray[0][1];
            $secondaryColorArray[0][0]++;
            // echo (' Answer ' . $a . ' is ' . $mixedColorResult . ' ');
        } elseif ( ( array_pad($primaryColorSelected[$a], 2, 0) == $primaryColorSelected[$a]) and ($primaryColorSelected[$a][0] == 'blue' and $primaryColorSelected[$a][1] == 'yellow') ) {
             $primaryColorSelected[$a][2] = $secondaryColorArray[0][1];
             $secondaryColorArray[0][0]++;
            // echo (' Answer ' . $a . ' is ' . $mixedColorResult . ' ');
        } elseif ( ( array_pad($primaryColorSelected[$a], 2, 0) == $primaryColorSelected[$a]) and ($primaryColorSelected[$a][0] == 'yellow' and $primaryColorSelected[$a][1] == 'red') ) {
             $primaryColorSelected[$a][2] = $secondaryColorArray[1][1];
             $secondaryColorArray[1][0]++;
            // echo (' Answer ' . $a . ' is ' . $mixedColorResult . ' ');
        } elseif ( ( array_pad($primaryColorSelected[$a], 2, 0) == $primaryColorSelected[$a]) and ($primaryColorSelected[$a][0] == 'red' and $primaryColorSelected[$a][1] == 'yellow') ) {
             $primaryColorSelected[$a][2] = $secondaryColorArray[1][1];
             $secondaryColorArray[1][0]++;
            // echo (' Answer ' . $a . ' is ' . $mixedColorResult . ' ');
        } elseif (( array_pad($primaryColorSelected[$a], 2, 0)  == $primaryColorSelected[$a]) and ($primaryColorSelected[$a][0] == $primaryColorSelected[$a][1])) {
             $primaryColorSelected[$a][2] = ('the same color ' . $primaryColorSelected[$a][0]);
             $matchingCounts++;
        }
    }
}

rsort($secondaryColorArray);
foreach ($secondaryColorArray as $position => [$counts, $name]) { 
    if (($secondaryColorArray[0][0] > $secondaryColorArray[1][0]) and ($secondaryColorArray[0][0] > $secondaryColorArray[2][0])) { 
        $mostCounted = ('The secondary color that was mixed the most is ' . $name . ', at ' . $counts . ' counts.' );
    } elseif (($secondaryColorArray[0][0] == $secondaryColorArray[1][0]) and ($secondaryColorArray[1][0] == $secondaryColorArray[2][0]) and ($secondaryColorArray[0][0] == $secondaryColorArray[2][0])) {
        $mostCounted = ('The secondary color that was mixed the most is tied between ' . $secondaryColorArray[0][1] . ',  ' . $secondaryColorArray[1][1] . ', and ' . $secondaryColorArrays[2][1] . ' at  ' . $counts . ' counts each.' );
    } elseif (($secondaryColorArray[0][0] == $secondaryColorArray[1][0]) and ($secondaryColorArray[1][0] != $secondaryColorArray[2][0])) {
        $mostCounted = ('The secondary color that was mixed the most is tied between ' . $secondaryColorArray[0][1] . ' and ' . $secondaryColorArray[1][1] . ' at  ' . $counts . ' counts each.' );
    } 
    break;
}
