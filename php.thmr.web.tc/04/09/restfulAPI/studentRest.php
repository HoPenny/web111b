<?php
require_once "singletonPDO.php";
require_once "SimpleRest.php";
require_once "function.php";

class StudentsRest extends SimpleRest
{

    public function __construct()
    {

    }
    public function create($table = "students", $col = [], $value = [])
    {
        $data = create($table, $col, $value);
        return $this->encodeJson($data);
    }

    public function index($table = "students", $sex = 'M', $keyword = "")
    {

        $data = index($table, $sex, $keyword);

        return $this->encodeJson($data);
    }
    public function update($table = "students", $id = '0', $col = [], $val = [])
    {
        $data = update($table, $id, $col, $val);
        return $this->encodeJson($data);
    }
    public function delete($table = "students", $del_id)
    {
        $data = delete($table, $del_id);
        return $this->encodeJson($data);
    }

    public function encodeJson($responseData)
    {
        if (empty($responseData)) {
            $statusCode = 404;
            $responseData = array('error' => '無資料');
        } else {
            $statusCode = 200;
        }
        $this->setHttpHeaders($statusCode);
        $responseData = json_encode($responseData, JSON_UNESCAPED_UNICODE);
        return $responseData;
    }
}
