<?php
class Peo
{
    public $peoname = 'Jeniffer';
    public $age;
    //聲明私有
    private function showself()
    {
        echo 'Hello!';

    }
    //聲明公有
    public function canUserFunc()
    {

        $this->peoname;
        $this->showself();

    }

}
$peo = new Peo;
$peo->canUserFunc();
echo $peo->peoname . "<br>";
$peo->peoname = 'Penny';
echo $peo->peoname . "<br>";
$peo->canUserFunc();
print_r($peo);