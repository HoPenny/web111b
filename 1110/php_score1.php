<?php

$score = [101, 102, 104, 105, 106];
$sum = 0;
$total = 0;

for ($i = 0; $i < count($score); $i++) {
    $sum += $score[$i];
    if ($i == count($score) - 1) {
        echo $score[$i] . "=" . $sum;
    } else {
        echo $score[$i] . "+";

    }
}