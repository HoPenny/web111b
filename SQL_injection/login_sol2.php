<?php

session_start();
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    // echo "111";

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=login", "root", "");
        $pdo->query("set names utf8");
    } catch (PDOException $e) {
        echo "錯誤訊息" . $e->getMessage();

    }
    // function select($table, $cond)
    // {
    //     $sql = "SELECT * FROM `" . $table . "` WHERE " . $cond;
    //     global $pdo;
    //     return $pdo->query($sql);
    // }
    function selectV2($table, $where, $data)
    {
        global $pdo;
        $sql = "SELECT * fROM `" . $table . "` WHERE " . $where;
        $stmt = $pdo->prepare($sql);
        $stmt->execute($data);
        return $stmt->fetchAll();
    }
    $data = [$_POST['username'], $_POST['password']];

    $_POST = preg_replace("/[\'\"]+/", '', $_POST); //過濾SQLinjection狀況
    $result = selectV2("users", "username=? and password=? ", $data);

    if (count($result) > 0) {
        $_SESSION['admin'] = $_POST['username'];
        header("location:admin.php"); //轉址到其他頁面
    } else {
        echo "<script>alert('帳號或密碼錯誤');</script>";
    }

}
?>

<body align=center>
  <form action="" method="post">
    <p><span>帳號:</span><span><input type="text" name="username"></span></p>
    <p><span>密碼:</span><span><input type="text" name="password"></span></p>
    <p><button type="submit">確定</button></p>

  </form>
</body>