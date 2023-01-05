<?php
$user = "root";
$pwd = "";
try {
    new PDO("mysql:host=localhost;dbname=class", $user, $pwd);
} catch (PDOException $e) {
    echo $e->getMessage();
}
