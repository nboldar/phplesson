<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 14.09.2018
 * Time: 21:10
 */

namespace app\traits;


trait TSingleton
{
    private static $instance = null;

    private function __construct(){}

    private function __clone(){}

    private function __wakeup(){}

    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }
        return static:: $instance;
    }

}