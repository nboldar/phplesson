<?php

namespace app\services;

class Autoloader
{
    public function loadClass($className)
    {
        $str=strtr($className,["app"=>"","\\"=>"/"]);
        $filename = $_SERVER['DOCUMENT_ROOT'] . "/..".$str.".php";
        if (file_exists($filename)) {
            include $filename;
        }

    }
}