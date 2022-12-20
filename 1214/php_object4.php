<?php
namespace myab\pay;

class Payroll
{
    public $name;
    public static function Payment($Hours, $RayRate)
    {
        return $Hours * $RayRate;
    }
}
class BonusPayroll extends Payroll
{
    public static function Payment($Hours, $RayRate)
    {
        // return $Hours * $RayRate + 5000;
        //用parent
        // return parent::Payment(100, 80) + 6000;
        //用父類別
        return Payroll::Payment(100, 80) + 7000;

    }
}
echo '薪資' . Payroll::Payment(100, 80) . "<br>";
echo '薪資含獎金' . BonusPayroll::Payment(100, 80) . "<br>";