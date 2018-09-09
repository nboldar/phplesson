<?php
class A{
    public static $message = "A";

    public static function display(){
        echo 'парам',static::$message;
    }
}

class B extends A{
    public static $message = "B";
}

$a = new A();
$a::display();
$b = new B();
$b::display();