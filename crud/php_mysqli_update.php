<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>學生資料管理系統</title>
</head>
<?php
require_once "connDB.php";
$cid = $_GET['cID'];
// echo $cid;
$sql = "SELECT * FROM  `students` WHERE `cID` = $cid";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>

<body>
  <h1 align='center'>學生資料管理系統 - 修改資料 </h1>
  <p align='center'><a href="php_mysqli_read.php">回主畫面</a></p>
  <form action="" method="POST" name="formUpdate">
    <table border="1" align="center" cellpadding=4>
      <tr>
        <th>欄位</th>
        <th>資料</th>
      </tr>
      <input type="hidden" name="cID" value="<?=$row['cID'];?>">
      <tr>
        <td>姓名</td>
        <td><input type="text" name="cName" value="<?=$row['cName'];?>" required></td>
      </tr>
      <tr>
        <td>性別</td>
        <td>
          <input type="radio" name="cSex" value='M' <?php if ($row['cSex'] == 'M') {
    echo " checked";
}

?>>男
          <input type="radio" name="cSex" value='F' <?php if ($row['cSex'] == 'F') {
    echo " checked";
}

?>>女

        </td>
      </tr>
      <tr>
        <td>生日</td>
        <td><input type="date" name="cBirthday" value="<?=$row['cBirthday'];?>" required></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" name="cEmail" value="<?=$row['cEmail'];?>" required></td>
      </tr>
      <tr>
        <td>電話</td>
        <td><input type="tel" name="cPhone" value="<?=$row['cPhone'];?>" required></td>
      </tr>
      <tr>
        <td>住址</td>
        <td><input type="text" name="cAddr" size="50" value="<?=$row['cAddr'];?>" required></td>
      </tr>
      <tr>
        <td>身高</td>
        <td><input type="number" name="cHeight" size="10" value="<?=$row['cHeight'];?>" required></td>
      </tr>
      <tr>
        <td>體重</td>
        <td><input type="number" name="cWeight" size="10" value="<?=$row['cWeight'];?>" required></td>
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
    $sql_query = "UPDATE `students` SET `cID`='" . $_POST['cID'] . "',";
    $sql_query .= "`cName`='" . $_POST['cName'] . "',`cSex`='" . $_POST['cSex'] . "',";
    $sql_query .= "`cBirthday`='" . $_POST['cBirthday'] . "',`cEmail`='" . $_POST['cEmail'] . "',";
    $sql_query .= "`cPhone`='" . $_POST['cPhone'] . "',";
    $sql_query .= "`cAddr`='" . $_POST['cAddr'] . "',`cHeight`='" . $_POST['cHeight'] . "',";
    $sql_query .= "`cWeight`='" . $_POST['cWeight'] . "' WHERE `cID`= '" . $_POST['cID'] . "' ";
    // echo $sql_query;
    // exit;
    mysqli_query($conn, $sql_query);
    mysqli_close($conn);
    header('Location: php_mysqli_read.php');

}
