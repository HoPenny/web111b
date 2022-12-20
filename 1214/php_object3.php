<?php
class Father
{
    public $pubPro = '父類別公開';
    protected $protecPro = '父類別保護';
    private $privPro = '父類別私有';

    public function fatherpublic()
    {
        echo $this->pubPro . '<br>';
        // echo $this->protecPro . '<br>';
        // echo $this->privPro . '<br>';
    }
    protected function fatherprotected()
    {
        // echo $this->pubPro . '<br>';
        echo $this->protecPro . '<br>';
        // echo $this->privPro . '<br>';
    }
    private function fatherprivate()
    {
        // echo $this->pubPro . '<br>';
        // echo $this->protecPro . '<br>';
        echo $this->privPro . '<br>';
    }
}
class Son extends Father
{
    public $pubson = '子公開';
    public function SonSelfPut()
    {
        echo '子叫父參數' . $this->pubPro . '<br>';
        echo '子函數' . $this->pubson . '<br>';
        // echo $this->protecPro . '<br>';
        // echo $this->privPro . '<br>';
    }
    public function SonSelf()
    {
        echo '兒子自己的函數<br>';

    }

}
$father = new Father;
echo $father->pubPro . '<br>';
// echo $father->protecPro . '<br>'; //受保護外部不可呼叫
// echo $father->privPro . '<br>'; //私有外部不可呼叫

echo $father->fatherpublic() . '<br>';
// echo $father->fatherprotected() . '<br>';//受保護外部不可呼叫
// echo $father->fatherprivate() . '<br>';//私有外部不可呼叫

$son = new Son;
echo '子呼叫1' . $son->pubPro . '<br>';
// echo '子呼叫'.$son->protecPro . '<br>';//受保護外部不可呼叫
// echo '子呼叫'.$son->privPro . '<br>';//私有外部不可呼叫

$son->fatherpublic() . '<br>';
// echo '子呼叫'.$son->fatherprotected() . '<br>';//受保護外部不可呼叫
// echo '子呼叫'.$son->fatherprivate() . '<br>';//私有外部不可呼叫
$son->SonSelfPut() . '<br>';
$son->SonSelf() . '<br>';