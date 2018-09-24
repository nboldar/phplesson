<?php

namespace app\services;

class Autoloader
{
    public $fileExtention='.php';
    public function loadClass($className)
    {

        $filename = str_replace(['app\\','\\'], [ROOT_DIR,DS], $className);
        $filename.=$this->fileExtention;
        if (file_exists($filename)) {
            include $filename;
        }

    }
}