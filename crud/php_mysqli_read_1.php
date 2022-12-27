<?php

echo "
    <style>
      table,td{
        border-collapse:collapse;
      }
    </style>
    <h1 align='center'>學生資料管理系統</h1>
";
require_once "connDB.php";

$sql = "SELECT * FROM  `students`";
$result = mysqli_query($conn, $sql);

// foreach ($result as $row) {
// echo "
//資料呈現
echo "<p><table align=center border=1>
    <tr>
    <td>座號</td>
    <td>姓名</td>
    <td>性別</td>
    <td>生日</td>
    <td>Email</td>
    <td>電話</td>
    <td>地址</td>
    <td>身高</td>
    <td>體重</td>
    </tr><br>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr align = center>";
    echo
        "<td>" . $row['cID'] . "</td>
    <td>" . $row['cName'] . "</td>
    <td>" . $row['cSex'] . "</td>
    <td>" . $row['cBirthday'] . "</td>
    <td>" . $row['cEmail'] . "</td>
    <td>" . $row['cPhone'] . "</td>
    <td>" . $row['cAddr'] . "</td>
    <td>" . $row['cHeight'] . "</td>
    <td>" . $row['cWeight'] . "</td>
    ";
}
echo "</tr></table></p>";
// .<br>";
mysqli_free_result($result);
mysqli_close($conn);
