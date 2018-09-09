<?php
use \app\models\Product;
use \app\services\Autoloader;

include $_SERVER['DOCUMENT_ROOT'] . "/../services/Autoloader.php";


spl_autoload_register([new Autoloader(), 'loadClass']);

$product = new Product();
var_dump($product);

//
//function log(ILoggable $object){
//    $object->log();
//}

