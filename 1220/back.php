<?php
if (isset($_GET['user']) && isset($_GET['tel']) && isset($_GET['sugestion'])
    && !empty($_GET['user']) && !empty($_GET['tel']) && !empty($_GET['sugestion'])) {
    $user = $_GET["user"];
    $tel = $_GET["tel"];
    $sugestion = $_GET["sugestion"];

    echo "姓名:{$user} . <br>";
    echo "電話:{$tel} . <br>";
    echo "意見:{$sugestion} . <br>";
}
