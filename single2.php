<?php
//单例模式
class  Database{
    private static $instance;

    private function __construct()
    {
        
    }

    function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public static function  getInstance()
    {
        if (!(self::$instance instanceof self)){
            self::$instance=new self();
        }

        return self::$instance;
    }

}

$a=Database::getInstance();
$b=Database::getInstance();

var_dump($a);
var_dump($b);
var_dump($a===$b);
//object(Database)#1 (0) { }
// object(Database)#1 (0) { }
// bool(true)