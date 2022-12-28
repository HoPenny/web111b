<!--根據資料庫表格的metadata生成對應的新增表單-->

<?php

require "connDB.php";
echo "
<style>table,td{
    border-collapse:collapse;
}</style>
<h1 align='center'>學生資料表</h1>";

$sql = "SELECT * FROM `students`";
$result = $conn->prepare($sql);
echo "<pre>";
print_r($result);
echo "----------------";
var_dump($result);
$result->execute();
echo "<p><table align=center border=1>";
echo "<tr>";
$input = $result->result_metadata();
while ($inputMeta = $input->fetch_field()) {
    print_r($inputMeta);
    echo "<tr text-align=center>";
    echo "<th>" . $inputMeta->name . "</th>";
    echo "<td><input type=" . $inputMeta->type . "name=" . $inputMeta->name . "required></td>";
}

echo "</tr>";
echo "</table></p>";
$input->close();
$conn->close();
// echo "<input type=" . "hidden" . " name=" . " DBSelect" . " value=" . $connDB . ">";

?>