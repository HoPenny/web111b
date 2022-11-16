<?php
$sbook = "HTML CSS JS PHP"; //分割字串
$arrbook = explode(' ', $sbook);
foreach ($arrbook as $bookvalue) {
    echo $bookvalue . "<br>";
}