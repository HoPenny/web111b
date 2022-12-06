<?php
$msg = "全域變數";
echo $msg . '<br>';
msg();

function msg()
{
    $msg = '區域變數';
    echo $msg . '<br>';
}

function sta()
{
    static $num = 0; //靜態變數會占用資源記憶資料
    $num++;
    echo "靜態變數 $num <br>";
}
sta();
sta();
//匿名函數
$noname =
function ($num) {

    $num++;
    echo "匿名函數 $num <br>";
};
$noname(2);