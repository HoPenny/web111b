<?php
interface Person
{
//不可宣告屬性
// public $height;
// Protected $weight;
// private $age;

//不可宣告靜態屬性
// public static $interest;
// Protected static $appearance;
// private static $character;
}
//不可以實例化
interface Person1
{
    public function eat();
    public function sleep();
}
// $person1 = new Person1;

//不可實作方法內容
interface Person2
{

}