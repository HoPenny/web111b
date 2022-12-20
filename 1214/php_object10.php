<?php
trait Drive
{
    public $carName = 'Benz';
    public function driving()
    {
        echo "driving{$this->carName} <br>";
    }
    public function Hello()
    {
        echo "driving Hello <br>";
    }
}
class Person
{
    public function eat()
    {
        echo "eat <br>";
    }
    public function Hello()
    {
        echo "Person Hello <br>";
    }
}
class student extends Person
{
    use Drive;
    public function study()
    {
        echo "study <br>";
    }
    public function Hello()
    {
        echo "student Hello <br>";
    }
}

$student = new student;
$student->Hello();
$student->driving();