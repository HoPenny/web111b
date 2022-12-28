<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>會員管理系統</title>
</head>
<?php
require_once "connDB.php";
$cid = $_GET['id'];
// echo $cid;
$sql = "SELECT * FROM  `members` WHERE `id` = $cid";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>

<body>
  <h1 align='center'>學生資料管理系統 - 修改資料 </h1>
  <p align='center'><a href="php_login.php">回主畫面</a></p>
  <form action="" method="POST" name="formUpdate">
    <table border="1" align="center" cellpadding=4>
      <tr>
        <th>欄位</th>
        <th>資料</th>
      </tr>
      <input type="hidden" name="id" value="<?=$row['id'];?>">
      <tr>
        <td>姓名</td>
        <td><input type="text" name="m_name" value="<?=$row['m_name'];?>" required></td>
      </tr>
      <tr>
        <td>使用者名稱</td>
        <td><input type="text" name="m_username" value="<?=$row['m_username'];?>" required></td>
      </tr>
      <tr>
        <td>性別</td>
        <td>
          <input type="radio" name="m_sex" value='男' <?php if ($row['m_sex'] == '男') {
    echo " checked";
}

?>>男
          <input type="radio" name="m_sex" value='女' <?php if ($row['m_sex'] == '女') {
    echo " checked";
}

?>>女

        </td>
      </tr>
      <tr>
        <td>生日</td>
        <td><input type="date" name="m_birthday" value="<?=$row['m_birthday'];?>" required></td>
      </tr>
      <tr>
        <td>層級</td>
        <td>
          <input type="radio" name="m_level" value='admin' <?php if ($row['m_level'] == 'admin') {
    echo " checked";
}

?>>管理者
          <input type="radio" name="m_level" value='member' <?php if ($row['m_level'] == 'member') {
    echo " checked";
}

?>>一般使用者

        </td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" name="m_email" value="<?=$row['m_email'];?>" required></td>
      </tr>
      <tr>
        <td>連結</td>
        <td><input type="text" name="m_url" value="<?=$row['m_url'];?>" required></td>
      </tr>
      <tr>
        <td>電話</td>
        <td><input type="tel" name="m_phone" value="<?=$row['m_phone'];?>" required></td>
      </tr>
      <tr>
        <td>住址</td>
        <td><input type="text" name="m_address" size="50" value="<?=$row['m_address'];?>" required></td>
      </tr>
      <tr>
        <td>登入次數</td>
        <td><input type="number" name="m_login" value="<?=$row['m_login'];?>" required></td>
      </tr>
      <tr>
        <td>登入時間</td>
        <td><input type="datetime" name="m_logintime" size="10" value="<?=$row['m_logintime'];?>" required></td>
      </tr>
      <tr>
        <td>加入時間</td>
        <td><input type="datetime" name="m_jointime" size="10" value="<?=$row['m_jointime'];?>" required></td>
      </tr>
      <tr>
        <td colspan=2 align="center">
          <input type="hidden" name="action" value="update">
          <input type="submit" name="button" value="修改資料">
          <input type="reset" name="button" value="取消">
        </td>
      </tr>


    </table>
  </form>
</body>

</html>
<?php
if (isset($_POST['action']) && $_POST['action'] == "update") {
    require_once "connDB.php";
    $sql_query = "UPDATE `members` SET `id`='" . $_POST['id'] . "',";
    $sql_query .= "`m_name`='" . $_POST['m_name'] . "',`m_username`='" . $_POST['m_username'] . "',";
    $sql_query .= "`m_passwd`='" . $_POST['m_passwd'] . "',`m_sex`='" . $_POST['m_sex'] . "',";
    $sql_query .= "`m_birthday`='" . $_POST['m_birthday'] . "',";
    $sql_query .= "`m_level`='" . $_POST['m_level'] . "',`m_email`='" . $_POST['m_email'] . "',";
    $sql_query .= "`m_url`='" . $_POST['m_url'] . "',`m_phone`='" . $_POST['m_phone'] . "',";
    $sql_query .= "`m_address`='" . $_POST['m_address'] . "',`m_login`='" . $_POST['m_login'] . "',";
    $sql_query .= "`m_logintime`='" . $_POST['m_logintime'] . "',";
    $sql_query .= "`m_jointime`='" . $_POST['m_jointime'] . "' WHERE `id`= '" . $_POST['id'] . "' ";

    // echo $sql_query;
    // exit;
    mysqli_query($conn, $sql_query);
    mysqli_close($conn);
    header('Location: php_login.php');

}