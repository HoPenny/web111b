<?php
echo ("<pre>");

$fruit = ["orange", "apple", "pineapple", "banana"];
var_dump($fruit); //顯示陣列元素
sort($fruit);
foreach ($fruit as $value) {
    echo $value . "<br>";
}
//結合陣列
$members = ["Jhon" => "20", "Mary" => "19", "Penny" => "18"];
ksort($members); //顯示key值的排序
foreach ($members as $name => $age) {
    echo $name . "=>" . $age . "<br>";
}
//分割陣列
$m_value = implode('/', $members);
echo $m_value . "<br>";
$m_key = implode('/', array_keys($members));
echo $m_key . "<br>";

$m_key = array_keys($members); //取得結合陣列的Key值
foreach ($m_key as $name) {
    echo $name . "<br>";
}

echo ("</pre>");
