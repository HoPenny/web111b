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
    protected $Field2;
}
$MyObject = new ChildClass(100);
$MyObject = null;
