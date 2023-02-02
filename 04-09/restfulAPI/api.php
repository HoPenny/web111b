<?php

require_once "studentRest.php";
$studensRest = new StudentsRest;

$id = isset($_REQUEST['id']) ? (int) $_REQUEST['id'] : 0;
$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op'], FILTER_SANITIZE_STRING) : 'index';
$op = isset($_REQUEST['table']) ? filter_var($_REQUEST['table'], FILTER_SANITIZE_STRING) : 'student';
$op = isset($_REQUEST['sex']) ? filter_var($_REQUEST['sex'], FILTER_SANITIZE_STRING) : '';
$op = isset($_REQUEST['keyword']) ? filter_var($_REQUEST['keyword'], FILTER_SANITIZE_STRING) : '';
$op = isset($_REQUEST['col']) ? filter_var($_REQUEST['col'], FILTER_SANITIZE_STRING) : '[]';
$op = isset($_REQUEST['value']) ? filter_var($_REQUEST['value'], FILTER_SANITIZE_STRING) : '[]';
$op = isset($_REQUEST['del_id']) ? filter_var($_REQUEST['del_id'], FILTER_SANITIZE_STRING) : '[]';

switch ($op) {
    case 'index':
        echo $studensRest->index($table, $sex, $keyword);
        break;
    case 'create':
        echo $studensRest->create($table, $col, $value);
        break;
    case 'update':
        echo $studensRest->update($table, $id, $col, $val);
        break;
    case 'delete':
        echo $studensRest->delete($table, $id);
        break;

    default:
        # code...
        break;
}