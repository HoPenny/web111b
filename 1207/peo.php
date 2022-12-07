<?php
class Peo
{
    public $peoname;
    public $age;
    public function showself()
    {
        echo 'Hello!';
        echo $this->peoname . "<br>";
        echo $this->age . "<br>";

    }

}
$peo = new Peo;
$peo->peoname = 'Penny';
$peo->age = '45';
$peo->showself();
print_r($peo);