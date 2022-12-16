<?php
class name
{
    public $name;
    public function setname()
    {
        return $this->name = 'Peter';
    }
    public function getnamebythis()
    {
        return $this->name;
    }
    public function getnamebyself()
    {
        return self::setname();
    }
}
class name2 extends name
{
    public function setname()
    {
        return $this->name = 'Joe';
    }
}
$newname = new name2;
echo '1' . $newname->getnamebythis() . "<br>";
echo '2' . $newname->getnamebyself() . "<br>";
echo '3' . $newname->setname() . "<br>";