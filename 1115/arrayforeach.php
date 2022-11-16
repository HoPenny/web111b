<?php
$row0 = array(10, 20);
$row1 = array(110, 120);
$row2 = array(210, 220);
$rowcount = 0;
$array = array($row0, $row1, $row2);
$total = 0;
foreach ($array as $rowtotal) {
    $sum = 0;
    $rowcount++;
    foreach ($rowtotal as $e) {
        $sum += $e;
    }
    $total += $sum;
    echo "第" . $rowcount . "行小計:" . $sum . "<br>";
}
echo "總計:" . $total . "<br>";
print_r($array);