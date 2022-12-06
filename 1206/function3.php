<?php

function ff()
{
    $num = func_num_args(); //取得參數數量
    echo $num . '<br>';
    if ($num > 2) {
        echo func_get_arg(0) . '<br>'; //取得第n個參數

    }
}
ff(1, 2, 3);

function get_arg()
{
    if (func_num_args() <= 0) {
        echo '沒有景點';
    }
    $get_args = func_get_args();
    for ($i = 0; $i < func_num_args(); $i++) {
        echo "景點有" . func_get_arg($i) . "<br>";
        echo "(陣列)景點有" . $get_args[$i] . "<br>";

    }

}
get_arg('台南', '高雄', '外島');