<?php
$num = 100;
function fun1()
{
    global $num;
    echo $num . '<br>';
}
fun1();

function eat($a, $b)
{
    echo $a . '、' . $b . '<br>';
}
eat('icecream', 'meat');
function eat2($a = '牛排', $b = '雞排')
{
    echo $a . '、' . $b . '<br>';
}
eat2();