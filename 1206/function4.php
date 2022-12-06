<?php
//傳值function
$num1 = 1;
$num2 = 100;
function change_num($n1, $n2)
{
    $tmp = $n1;
    $n1 = $n2;
    $n2 = $tmp;
    echo "n1 = $n1 n2 = $n2" . "<br>";

}
change_num($num1, $num2);
echo "num1 = $num1 " . "<br>";
echo "num2 = $num2" . "<br>";

$num1 = 1;
$num2 = 100;
//傳址function 參數前加&
function change_num2(&$n1, &$n2)
{
    $tmp = $n1;
    $n1 = $n2;
    $n2 = $tmp;
    echo "n1 = $n1 n2 = $n2" . "<br>";

}
change_num2($num1, $num2);
echo "num1 = $num1 " . "<br>";
echo "num2 = $num2" . "<br>";