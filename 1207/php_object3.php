<?php
class Peo
{
    public $peoName;
    public function __construct()
    {
        $this->peoName = '初始值';
    }
}
$peo = new Peo;
echo $peo->peoName . "<br>";