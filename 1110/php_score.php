<?php

$score = [[101, 102, 104, 105, 106], [200, 201, 203, 205, 300]];

$total = 0;

for ($i = 0; $i < count($score); $i++) { //
    $sum = 0;
    for ($j = 0; $j < count($score[$i]); $j++) {
        $sum += $score[$i][$j];
    }
    $total += $sum;
    echo "小計:" . $sum . "<br>";
}
echo "總計:" . $total . "<br>";