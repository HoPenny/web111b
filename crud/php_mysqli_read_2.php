<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  table,
  td {
    border-collapse: collapse;
  }
  </style>

</head>

<body>
  <h1 align='center'>學生資料管理系統</h1>
  <p>
  <table align=center border=5>
    <tr align=center>
      <td>座號</td>
      <td>姓名</td>
      <td>性別</td>
      <td>生日</td>
      <td>Email</td>
      <td>電話</td>
      <td>地址</td>
      <td>身高</td>
      <td>體重</td>
    </tr><br>
    <?php
require_once "connDB.php";
$sql = "SELECT * FROM  `students`";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {?>
    <tr>
      <td align=center> <?=$row['cID'];?></td>
      <td> <?=$row['cName'];?></td>
      <td align=center> <?=$row['cSex'];?></td>
      <td align=center> <?=$row['cBirthday'];?></td>
      <td> <?=$row['cEmail'];?></td>
      <td> <?=$row['cPhone'];?></td>
      <td> <?=$row['cAddr'];?></td>
      <td align=center> <?=$row['cHeight'];?></td>
      <td align=center> <?=$row['cWeight'];?></td>
    </tr>
    <?php }?>
  </table>
  </p>

</body>

</html>






<?=
// foreach ($result as $row) {
// echo "
//資料呈現

mysqli_free_result($result);
mysqli_close($conn);
