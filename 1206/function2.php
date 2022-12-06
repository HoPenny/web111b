<?php
$bbb = true;
if ($bbb) {
    function f1()
    {
        echo '條件函數要在前再呼叫函數<br>';
    }
}
f1();

function s1()
{
    function s2()
    {
        echo '函數包函數要先呼叫外層<br>';
    }
}
s1();
s2();