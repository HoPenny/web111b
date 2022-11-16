<?php
// Array用法:一般陣列
$name[] = 1;
$name[] = "str";
$name[] = true;
echo $name[1] . "<br>";

$name1[0] = 2;
$name1[1] = "啾咪";
$name1[2] = false;
echo $name1[1] . "<br>";

$name2 = [3, "upup", true];
echo $name2[2] . "<br>";

$name3 = array(4, "哈哈", true);
echo $name3[1] . "<br>";

print_r($name3);
echo "<br>";
var_dump($name3);
echo "<br>";

//陣列拜訪
for ($i = 0; $i < count($name3); $i++) {
    echo $name3[$i] . "<br>";
}
foreach ($name3 as $value) {
    echo $value . "<br>";

}