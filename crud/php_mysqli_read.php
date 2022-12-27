<?php

echo "
    <style>
      table,td{
        border-collapse:collapse;
      }
    </style>

";
require_once "connDB.php";

$sql = "SELECT * FROM  `students`";
$result = mysqli_query($conn, $sql);
$rowcount = mysqli_num_rows($result);
//預設每頁筆數
$per_page = 5;
//取得總頁數
$total_page = ceil($rowcount / $per_page);
//取得所在頁數
if (isset($_GET['page'])) {
    $page = intVal($_GET['page']);
} else {
    $page = 1;
}
//每頁起始號
$start_row = $per_page * ($page - 1);
$sql = "SELECT * FROM  `students` LIMIT {$start_row},{$per_page}";
$result = mysqli_query($conn, $sql);

// foreach ($result as $row) {
// echo "
//資料呈現
//clospan佔幾格

echo "<h1 align='center'>學生資料管理系統</h1>";
echo "<p align=center>總共:{$rowcount}筆資料,目前在第:{$page}頁</p>";
echo "<p align=center><a href='php_mysqli_create.php'>新增學生資料</a></p>";
echo "<p><table align=center border=1>
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
    <td colspan='2'>功能</td>
    </tr><br>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr >
    <td align = center>" . $row['cID'] . "</td>
    <td align = center>" . $row['cName'] . "</td>
    <td align = center>" . $row['cSex'] . "</td>
    <td>" . $row['cBirthday'] . "</td>
    <td>" . $row['cEmail'] . "</td>
    <td>" . $row['cPhone'] . "</td>
    <td>" . $row['cAddr'] . "</td>
    <td align = center>" . $row['cHeight'] . "</td>
    <td align = center>" . $row['cWeight'] . "</td>
    <td><a href='php_mysqli_update.php?cID=" . $row['cID'] . "'>修改</a></td>
    <td><a href='php_mysqli_delete.php?cID=" . $row['cID'] . "'>刪除</a></td>
    </tr>";
}
echo "</table></p>";
echo "<table align='center'>";
echo "<tr align='center'><td>";
$prev = $page - 1;
$next = $page + 1;
if ($page > 1) {
    echo "<a href='?page=1'>首頁 </a>&emsp;
    <a href='?page=$prev'> 上一頁 </a>&emsp;";
}

if ($page < $total_page) {
    echo "<a href='?page=$next'> 下一頁 </a>&emsp; <a href='?page=$total_page'> 末頁 </a>&emsp;";
}
echo "</td></tr></table>";
// .<br>";
mysqli_free_result($result);
mysqli_close($conn);