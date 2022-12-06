<?php
function fun_a($n1)
{
    echo "A Function n1 * n1 =" . $n1 * $n1 . "<br>";
}

function fun_b($n1)
{
    echo "B Function n1 + n1 =" . $n1 + $n1 . "<br>";
}
$func = 'fun_a';
$func(10);
$func = 'fun_b';
$func(8);