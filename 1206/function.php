<?php
if (!empty($_GET['meals']) && !empty($_GET['eat'])) {
    $a = $_GET["meals"];
    $b = $_GET["eat"];
}

function eat($a, $b)
{
    echo "今天" . $a . "吃" . $b . "<br>";
}
eat($a, $b);
