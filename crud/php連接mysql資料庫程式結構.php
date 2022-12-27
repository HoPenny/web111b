<?php
//告訴瀏覽器這頁面是uft8編碼
header("contect-type:text/html; charset=utf-8");
date_default_timezone_set("Asia/Taipei");

$user = "root";
$password = "1qaz@wsx";
$host = "localhost";
$db = "class";
$port = "3306";
//建立連結
$conn = mysqli_connect($host, $user, $password, $db);
//保險
if ($conn) {
    //判斷是否連接
    //設置編碼
    mysqli_query($conn, 'set names utf8');
    mysqli_set_charset($conn, "utf8");
    //創建sql子句
    $sql = "SELECT * FROM `students` WHERE 1";
    $result = mysqli_query($conn, $sql);
    // print_r($result);
    if (mysqli_num_rows($result) > 0) {
        $info = [];
        // for ($i = 0; $row = $result->fetch_assoc(); $i++) {
        //     $info[] = $row;
        // }
        foreach ($result as $value) {
            $info[] = $value;
        }
        echo "<pre>";
        print_r($info);
    }

}
