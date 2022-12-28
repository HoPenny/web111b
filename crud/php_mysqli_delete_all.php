<?php
require_once "connDB.php";
$del = $_POST['del'];
var_dump($del);
foreach ($del as $value) {
    mysqli_query($conn, "DELETE FROM `students` WHERE `cID`='" . $value . "'");
}

mysqli_close($conn);
header('Location: php_mysqli_read.php');