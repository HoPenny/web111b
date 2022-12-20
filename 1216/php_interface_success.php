<?php
interface Person
{
    const IS_AGE_PUBLIC = false;
    public function eat();
    public function sleep();
}
interface Human
{
    public function laugh();
}
class Girl implements Person, Human
{ //implements實作
    public function eat()
    {
        //實作內容
    }
    public function sleep()
    {
        //實作內容
    }
    public function laugh()
    {
        //實作內容
    }
}
//介面可以延伸另一個介面
//人延伸人類
interface Person1 extends Human
{
    public function eat();
    public function sleep();
}