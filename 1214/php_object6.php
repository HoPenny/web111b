<?php
class ParentClass
{
    protected $Field1;
    public function __construct($value)
    {
        $this->Field1 = $value;
        echo '父__construct Filed1=' . $this->Field1 . "<br>";
    }
    public function __destruct()
    {
        $this->Field1 = 0;
        echo '父__destruct Filed1=' . $this->Field1 . "<br>";

    }
}
class ChildClass extends ParentClass
{
    //子類別有建構子只會執行子類別
    protected $Field2;
    public function __construct($value)
    {
        $this->Field2 = $value;
        echo '子__construct Filed2=' . $this->Field2 . "<br>";
    }
    public function __destruct()
    {
        $this->Field2 = 0;
        echo '子__destruct Field2=' . $this->Field2 . "<br>";

    }
}
$MyObject = new ChildClass(100);
$MyObject = null;
