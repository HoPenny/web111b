<?php
class Peo
{
    const peoName = 'Jennifer'; //類別常數
    static $peoAge = '18'; //靜態變數
}
echo Peo::peoName . "<br>";
echo Peo::$peoAge . "<br>";
$peo = new Peo;
echo Peo::peoName . "<br>";
echo Peo::$peoAge . "<br>";
Peo::$peoAge++; // 靜態變數實體化後可改變值
echo Peo::$peoAge . "<br>";

class MyMath
{
    public static function Cubic($x)
    { //靜態類別不用實體化

        return pow($x, 3);

    }
}
echo '5的3次方為' . MyMath::Cubic(5) . "<br>";

class Circle
{
    const PI = 3.1416;
    public $radius;
    public function ShowArea()
    {
        echo "圓面積為" . pow($this->radius, 2) * self::PI . "<br>";

    }

}
echo "圓周率為" . Circle::PI . "<br>";
$obj = new Circle;
$obj->radius = 10;
$obj->ShowArea();
