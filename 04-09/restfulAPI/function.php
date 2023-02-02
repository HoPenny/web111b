<?php
function index($table, $sex = "", $keyword = '')
{
    global $pdo;
    $where = '';

    //初始化
    $all_students = $value = [];

    if ($sex) {
        $where = "WHERE `cSex` = ?";
        $value = [$sex];
    } elseif ($keyword) {
        $where = "WHERE `cName` like ? or `cSex` like ? or `cBirthday` like ? or `cEmail` like ? or `cPhone` like ? or `cAddr` like ? or `cHeight` like ? or `cWeight` like ? ";
        $value = ["%{$keyword}%", "%{$keyword}%", "%{$keyword}%", "%{$keyword}%", "%{$keyword}%", "%{$keyword}%", "%{$keyword}%", "%{$keyword}%"];
    }
    $sql = "SELECT * FROM $table $where ORDER BY `cBirthday` DESC";
    $sth = $pdo->prepare($sql);
    $sth->execute($value);

    while ($all_students[] = $sth->fetch(PDO::FETCH_NUM)) {
        //過濾整個陣列是否有xss
        $all_students = filter_var_array($all_students, FILTER_SANITIZE_STRING);
    }
    return $all_students;
}

function create($table, $col, $value)
{
    global $pdo;
    $where = "";
    if (count($col) == count($value)) {
        $sql = "INSERT INTO `$table` (";
        for ($i = 0; $i < count($col); $i++) {
            $sql .= "`" . $col[$i] . "`";
            if ($i == count($col) - 1) {
                continue;
            }

            $sql .= ",";
        }

        $sql .= ") VALUES(";

        for ($i = 0; $i < count($value); $i++) {
            $sql .= "?";
            if ($i == count($value) - 1) {
                continue;
            }

            // $sql .= ",";
        }
        $sql .= ")";
    } else {
        {

        }
    }

}

function update(string $table, int $id, array $col, array $value)
{

}
function delete(string $table, int $id)
{

}