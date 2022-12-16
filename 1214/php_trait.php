<?php
trait Trait1
{
    public function hello()
    {
        echo "{Trait1 Hello} <br>";
    }
    public function hi()
    {
        echo "{Trait1 hi} <br>";
    }
}
trait Trait2
{
    public function hello()
    {
        echo "{Trait2 Hello} <br>";
    }
    public function hi()
    {
        echo "{Trait2 hi} <br>";
    }
}
// class Class1 //函數名稱一樣衝突
// {
//     use Trait1, Trait2;
// }
// 解決方式1:
class Class1
{
    use Trait1, Trait2 {
        Trait2::hello insteadof Trait1; //Trait2取代Trait1的hello
        Trait1::hi insteadof Trait2; //Trait1取代Trait2的hi
    }
}

$obj = new Class1;
$obj->hello();
$obj->hi();

// 解決方式2:
class Class2
{
    use Trait1, Trait2 {
        Trait2::hello insteadof Trait1; //Trait2取代Trait1的hello
        Trait1::hi insteadof Trait2; //Trait1取代Trait2的hi
        Trait2::hi as hihi; //Trait2取代Trait1的hello
        Trait1::hello as hellohello;
    }
}
$obj = new Class2;
$obj->hello();
$obj->hi();
$obj->hellohello();
$obj->hihi();