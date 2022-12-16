<?php
namespace my\name; // 放在第一行
include "php_object4.php";

class Myclass
{
    public function MyFun()
    {

    }
}
const MYCONST = 1; //在命名空間定義 類別常數
$x = new Myclass;
$y = MYCONST;

$x = new \my\name\Myclass;
$y = \my\name\MYCONST;
echo $y . "<br>";
$a = new \myab\pay\Payroll;
echo $a->Payment(4, 56) . "<br>";

class test extends \myab\pay\Payroll

{

}
use myab\pay\Payroll as abc;
class test1 extends abc
{

}