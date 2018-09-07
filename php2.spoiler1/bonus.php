<?php
class A{
    public static $message = "A";

    public static function display(){
        echo static::$message;
    }
}

class B extends A{
    public static $message = "B";
}

$a = new A();
$a::display();
$b = new B();
$b::display();