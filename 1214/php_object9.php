<?php
trait Drive
{
    public $carName = 'Benz';
    public function driving()
    {
        echo "driving{$this->carName} <br>";
    }
}
class Person
{
    public function eat()
    {
        echo "eat <br>";
    }
}
class student extends Person
{
    use Drive;
    public function study()
    {
        echo "study <br>";
    }
}

$student = new student;
$student->study();
$student->eat();
$student->driving();
