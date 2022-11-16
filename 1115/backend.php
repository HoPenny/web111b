<?php

$user = $_GET["user"];
$email = $_GET["email"];
$edu = $_GET["edu"];
$hobbys = $_GET["hobbys"];

$h = implode("、", $hobbys);

echo "使用者:{$user} 他的emal:{$email} 學歷是 {$edu} 嗜好是{$h}";
