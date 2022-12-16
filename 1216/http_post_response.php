<?php
//不同網域 CROS從後端做
header('Access-Control-Allow-Origin: http://localhost:6080');
//只允許 http://localhost:6080 CROS
// header('Access-Control-Allow-Origin: *');  // 允許 任何網站 CROS
// header('Access-Control-Allow-Credentials:true');  //cookie

$uname = $_POST["username"];
$upws = $_POST["password"];

if ($uname == "web111bn" && $upws == "1qaz@wsx") {
    setcookie('username', $uname, time() + 24 * 60 * 60);
    setcookie('password', $upws, time() + 24 * 60 * 60);
    $success = ['msg' => 'OK', 'info' => 'Hello'];
    echo json_encode($success);
} else {
    $success = ['msg' => 'Fail', 'info' => '喔喔!'];
    echo json_encode($success);
}