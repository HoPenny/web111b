<?php
session_start();
$username = $_SESSION['admin'];
echo "$username 你好";