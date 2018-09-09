<?php

namespace app\services;

class Autoloader
{
    public function loadClass($className)
    {
        $arr = explode('\\', $className);
        $arrLength = count($arr);
        $lastItemId = $arrLength - 1;

        $filename = $_SERVER['DOCUMENT_ROOT'] . "/..";
        for ($i = 1; $i < $arrLength; $i++) {
            if ($i !== $lastItemId) {
                $filename = $filename . "/{$arr[$i]}";
            }else{
                $filename = $filename . "/{$arr[$i]}.php";
            }
        }
echo $filename;
        if (file_exists($filename)) {
            include $filename;
        }

    }
}