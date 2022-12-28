<?php
require_once "connDB.php";
$del = $_POST['del'];
// var_dump($del);
foreach ($del as $value) {
    mysqli_query($conn, "DELETE FROM `members` WHERE `id`='" . $value . "'");
}

mysqli_close($conn);
header('Location: php_login.php');