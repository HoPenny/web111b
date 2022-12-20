<?php
trait Hello
{
    public function sayHello()
    {
        echo "Hello <br>";
    }
}
trait World
{
    use Hello;
    public function sayWrold()
    {
        echo "World <br>";
    }
    //抽象方法
    abstract public function getWorld();
    public function inc()
    {
        static $c = 0;
        $c++;
        echo "$c <br>";
    }
    public static function doSomething()
    {
        echo "doing something <br>";
    }
}
class HelloWorld
{
    use World;
    public function getWorld()
    {
        return 'get World';
    }
}

$obj = new HelloWorld;
$obj->sayHello();
$obj->sayWrold();