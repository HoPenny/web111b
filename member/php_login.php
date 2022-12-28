<?php
echo "<script>
function delall() {
  console.log('delall')
  if (confirm('\\n是否要刪除?\\n刪除後無法恢復!\\n')){
    form1.submit();
  }
  return false;
}
</script>";
echo "
    <style>
      table,td{
        border-collapse:collapse;
      }
    </style>

";
require_once "connDB.php";

$sql = "SELECT * FROM  `members`";
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
$sql = "SELECT * FROM  `members` LIMIT {$start_row},{$per_page}";
$result = mysqli_query($conn, $sql);

// foreach ($result as $row) {
// echo "
//資料呈現
//clospan佔幾格
echo "<form align=center action='php_delete_all.php' method='post' name='form1' >";
echo "<h1 align='center'>會員管理系統</h1>";
echo "<p align=center>總共:{$rowcount}筆資料,目前在第:{$page}頁</p>";
echo "<p align=\"center\"><a href=\"php_create.php\">新增會員資料</a>&emsp;&emsp;<a href=\"#\" onclick='delall();'>刪除被選取資料</a></p>";
echo "<p><table align=center border=1>
    <tr align=center>
    <td>序號</td>
    <td>姓名</td>
    <td>使用者名稱</td>
    <td>密碼</td>
    <td>性別</td>
    <td>生日</td>
    <td>層級</td>
    <td>Email</td>
    <td>連結</td>
    <td>電話</td>
    <td>地址</td>
    <td>登入次數</td>
    <td>登入時間</td>
    <td>加入時間</td>
    <td colspan='3'>功能</td>
    </tr><br>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr >
    <td align = center>" . $row['id'] . "</td>
    <td align = center>" . $row['m_name'] . "</td>
    <td align = center>" . $row['m_username'] . "</td>
    <td >" . $row['m_passwd'] . "</td>
    <td align = center>" . $row['m_sex'] . "</td>
    <td>" . $row['m_birthday'] . "</td>
    <td align = center>" . $row['m_level'] . "</td>

    <td>" . $row['m_email'] . "</td>
    <td>" . $row['m_url'] . "</td>
    <td>" . $row['m_phone'] . "</td>
    <td>" . $row['m_address'] . "</td>
    <td align = center>" . $row['m_login'] . "</td>
    <td align = center>" . $row['m_logintime'] . "</td>
    <td align = center>" . $row['m_jointime'] . "</td>
    <td><a href='php_update.php? id=" . $row['id'] . "'>修改</a></td>
    <td><a href='php_delete.php? id=" . $row['id'] . "'>刪除</a></td>
    <td><input type=\"checkbox\" name=\"del[]\" value='{$row['id']}'></td>
    </tr>";
}
echo "</table></p>";
echo "<table align='center'>";
echo "<tr align='center'><td>";
echo "<a href='?page=1'>首頁 </a>&emsp;";

$prev = $page - 1;
$next = $page + 1;
if ($page > 1) {
    echo "<a href='?page=$prev'> 上一頁 </a>&emsp;";
}

if ($page < $total_page) {
    echo "<a href='?page=$next'> 下一頁 </a>&emsp;";
}
echo "<a href='?page=$total_page'> 末頁 </a>";

echo "</td></tr></table></form>";
// .<br>";
mysqli_free_result($result);
mysqli_close($conn);