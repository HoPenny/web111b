<?php
class RichestMan
{
    //通過私有、靜態聲明單例物件
    //私有:保證只能在這個類別下訪問
    //靜態聲明:只在class DBConnectionSingleton{...}聲明時被執行一次
    private static $richestMan = null;
    public static function findRichestMan()
    {
        if (self::$richestMan == null) {
            //不存在時操作以下內容,ex.購物車、地圖在任何一個頁面都只有一個
            echo "<br>========找到有錢人==========</br>";
            self::$richestMan = new self();
            self::$richestMan->pname = "最富有的人是我";

        }
        return self::$richestMan;
    }
}
$richestMan1 = RichestMan::findRichestMan();
$richestMan2 = RichestMan::findRichestMan();
print_r($richestMan1);
echo "<br>";
print_r($richestMan2);