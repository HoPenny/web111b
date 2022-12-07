<?php
echo str_replace('World', 'Penny', 'Hello World') . ;

$arr = ['red', 'blue', 'yellow', 'green'];
print_r(str_replace('red', 'pink', $arr, $i));

$arr1 = ['AAA', 'BBB', 'CCC'];
$arr2 = ['DDD'];
print_r(str_replace(['AAA', 'BBB'], $arr2, $arr1));