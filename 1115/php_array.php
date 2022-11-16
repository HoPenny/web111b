<?php
//結合陣列
$arr = array("color" => "紅色", "name" => "penny", "shape" => "圓形", 100, 200, 300);
if (!isset($arr["type"])) {
    $arr["type"] = "PHP";
}
foreach ($arr as $key => $value) {
    echo "$key => $value" . "<br>";
}
unset($arr["type"]); //刪除陣列元素

$a = ["HTML", "CSS", "JS", "PHP"];
echo $a[0] . "<br>";
echo $a[1] . "<br>";
echo $a[2] . "<br>";
echo $a[3] . "<br>";
$members = ["Jhon" => "20", "Mary" => "19", "Penny" => "18"];
foreach ($members as $name => $age) {
    echo $name . "=>" . $age . "<br>";

}
