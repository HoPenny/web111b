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
      <tr>
        <td>姓名</td>
        <td><input type="text" name="cName" value="<?=$row['cName'];?>"></td>
      </tr>
      <tr>
        <td>性別</td>
        <td>
          <?php
            if($row['cSex']="F"){
          ?>
          <input type="radio" name="cSex" value='M'>男
          <input type="radio" name="cSex" value='F' checked>女
          <?php
            }else {?>
          <input type="radio" name="cSex" value='M' checked>男
          <input type="radio" name="cSex" value='F'>女
          <?php }  ?>
        </td>
      </tr>
      <tr>
        <td>生日</td>
        <td><input type="date" name="cBirthday" value="<?=$row['cBirthday'];?>"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" name="cEmail" value="<?=$row['cEmail'];?>"></td>
      </tr>
      <tr>
        <td>電話</td>
        <td><input type="tel" name="cPhone" value="<?=$row['cPhone'];?>"></td>
      </tr>
      <tr>
        <td>住址</td>
        <td><input type="text" name="cAddr" size="50" value="<?=$row['cAddr'];?>"></td>
      </tr>
      <tr>
        <td>身高</td>
        <td><input type="number" name="cHeight" size="10" value="<?=$row['cHeight'];?>"></td>
      </tr>
      <tr>
        <td>體重</td>
        <td><input type="number" name="cWeight" size="10" value="<?=$row['cWeight'];?>"></td>
      </tr>
      <tr>
        <td colspan=2 align="center">
          <input type="hidden" name="action" value="update">
          <input type="submit" name="button" value="修改資料">
          <!-- <input type="reset" name="button" value="重新填寫"> -->
        </td>
      </tr>


    </table>
  </form>
</body>

</html>
<?php
// if (isset($_POST['action']) && $_POST['action'] == "update") {
//     require_once "connDB.php";
//     $sql_query = "UPDATE `students` ";
//     $sql_query .= "SET `cID`='[$_POST[']',`cName`='[value-2]',`cSex`='[value-3]',";
//     $sql_query .= "`cBirthday`='[value-4]',`cEmail`='[value-5]',`cPhone`='[value-6]',";
//     $sql_query .= "`cAddr`='[value-7]',`cHeight`='[value-8]',`cWeight`='[value-9]' WHERE `cID`= )";
//     // echo $sql_query;
//     // exit;
//     mysqli_query($conn, $sql_query);
//     mysqli_close($conn);

// }