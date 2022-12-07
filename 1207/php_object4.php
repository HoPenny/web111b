<?php
class Peo
{
    public $peoName;
    public function __construct($str)
    {
        $this->peoName = $str;
        echo "已建立物件" . $this->peoName . "<br>";
    }
    public function __destruct()
    {
        $this->peoName = null;
        echo "已釋放物件<br>";
    }

}
$obj = new Peo('Penny');
echo "喔喔" . $obj->peoName . "<br>";