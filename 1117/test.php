<?php
$grade = 85;
$result = match(true) {
    $grade > 80 => "A<br/>",
    $grade >= 70 => "B<br/>",
default=> "D<br/>",

};
echo $result . "<br/>";

$hour = 20;
$time = ($hour > 12) ? $hour - 12 : $hour;
echo $time . "<br/>";