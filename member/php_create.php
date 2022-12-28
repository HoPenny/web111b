<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>會員管理系統</title>
</head>

<body>
  <h1 align='center'>會員管理系統 - 新增資料 </h1>
  <p align='center'><a href="php_login.php">回主畫面</a></p>
  <form action="" method="POST" name="formAdd">
    <table border="1" align="center" cellpadding=4>
      <tr>
        <th>欄位</th>
        <th>資料</th>
      </tr>
      <tr>
        <td>姓名</td>
        <td><input type="text" name="m_name" required></td>
      </tr>
      <tr>
        <td>使用者名稱</td>
        <td><input type="text" name="m_username" required></td>
      </tr>
      <tr>
        <td>密碼</td>
        <td><input type="text" name="m_passwd" required>
        </td>
      </tr>
      <tr>
        <td>性別</td>
        <td><input type="radio" name="m_sex" value='男' checked>男
          <input type="radio" name="m_sex" value='女'>女
        </td>
      </tr>
      <tr>
        <td>生日</td>
        <td><input type="date" name="m_birthday" required></td>
      </tr>
      <tr>
        <td>層級</td>
        <td><input type="radio" name="m_level" value='admin' checked>管理者
          <input type="radio" name="m_level" value='member'>一般使用者
        </td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" name="m_email" required></td>

      </tr>
      <tr>
        <td>連結</td>
        <td><input type="text" name="m_url" required></td>
      </tr>
      <tr>
        <td>電話</td>
        <td><input type="tel" name="m_phone" required></td>
      </tr>
      <tr>
        <td>住址</td>
        <td><input type="text" name="m_address" size="50" required></td>
      </tr>
      <tr>
        <td>登入次數</td>
        <td><input type="number" name="m_login" required></td>
      </tr>
      <tr>
        <td>登入時間</td>
        <td><input type="date" name="m_logintime" size="10" required></td>
      </tr>
      <tr>
        <td>加入時間</td>
        <td><input type="date" name="m_jointime" size="10" required></td>
      </tr>
      <tr>
        <td colspan=2 align="center">
          <input type="hidden" name="action" value="addnew">
          <input type="submit" name="button" value="新增資料">
          <input type="reset" name="button" value="重新填寫">
        </td>
      </tr>


    </table>
  </form>
</body>

</html>
<?php
if (isset($_POST['action']) && $_POST['action'] == "addnew") {
    require_once "connDB.php";
    $sql_query = "INSERT INTO `members` (`m_name`, `m_username`, `m_passwd`, `m_sex`, `m_birthday`, `m_level`, `m_email`, `m_url`, `m_phone`, `m_address`, `m_login`, `m_logintime`, `m_jointime`)values(";
    // echo "me";

    $sql_query .= "'" . $_POST['m_name'] . "',";
    $sql_query .= "'" . $_POST['m_username'] . "',";
    $sql_query .= "'" . $_POST['m_passwd'] . "',";
    $sql_query .= "'" . $_POST['m_sex'] . "',";
    $sql_query .= "'" . $_POST['m_birthday'] . "',";
    $sql_query .= "'" . $_POST['m_level'] . "',";
    $sql_query .= "'" . $_POST['m_email'] . "',";
    $sql_query .= "'" . $_POST['m_url'] . "',";
    $sql_query .= "'" . $_POST['m_phone'] . "',";
    $sql_query .= "'" . $_POST['m_address'] . "',";
    $sql_query .= "'" . $_POST['m_login'] . "',";
    $sql_query .= "'" . $_POST['m_logintime'] . "',";
    $sql_query .= "'" . $_POST['m_jointime'] . "')";
    // echo $sql_query;
    // exit;
    mysqli_query($conn, $sql_query);
    mysqli_close($conn);
    header('Location: php_login.php');

}