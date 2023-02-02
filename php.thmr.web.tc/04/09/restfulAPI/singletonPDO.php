<?php
class singletonPDO
{
    private static $pdo = null;
    public static function getpdo()
    {
        if (self::$pdo == null) {
            try {
                self::$pdo = new PDO("mysql:host=php.thmr.web.tc;dbname=class", "web111b_04", "1Qaz@wsx_04");
                self::$pdo->exec("set names utf8");
                self::$pdo->exec("set character_set_client=utf8");
                self::$pdo->exec("set character_set_results=utf8");
            } catch (PDOException $e) {
                echo "錯誤訊息" . $e->getMessage();
            }
        }
        return self::$pdo;
    }
}

//使用
$pdo = singletonPDO::getpdo();