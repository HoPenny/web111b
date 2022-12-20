<?php
class Peo
{

    public $peoname;
    public function __construct($str)
    {
        $this->peoname = $str;
    }
}
$obj1 = new Peo('Penny');
$obj2 = new Peo('Penny');
$obj3 = $obj1;
if ($obj2 == $obj1) {
    echo '$obj2 值= $obj1 <br>';
} else {
    echo '$obj2 值<> $obj1 <br>';
}
if ($obj2 === $obj1) {
    echo '$obj2 位置  $obj1 <br>';
} else {
    echo '$obj2 位置<> $obj1 <br>';
}
if ($obj3 === $obj1) {
    echo '$obj3 位置 $obj1 <br>';
} else {
    echo '$obj3 位置<> $obj1 <br>';

}