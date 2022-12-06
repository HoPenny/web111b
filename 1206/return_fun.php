<?php

function ctof($no)
{
    $fno = $no * 1.8 + 32;
    echo "攝氏 $no 度華氏為 $fno 度<br>";
}
ctof(30);

function return_fun($no)
{
    $fno[0] = $no;
    $fno[1] = $no * $no;
    $fno[2] = $no * $no * $no;
    return $fno;
}
$arr = return_fun(10);
foreach ($arr as $value) {
    echo $value . '<br>';
}