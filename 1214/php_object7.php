<?php
abstract class Pay
{
    public $EmpName;
    abstract public function Payment($Hour, $payRate);

}
class bonusPay extends Pay
{
    public function Payment($Hours, $payRate)
    {
        return $Hours * $payRate + 5000;
    }

}
$obj = new BonusPay;
echo $obj->Payment(100, 80) . "<br>";
