<?php
include $_SERVER['DOCUMENT_ROOT'] . "/../config/main.twig";
include ROOT_DIR . "services/Autoloader.php";

spl_autoload_register([new \app\services\Autoloader(), 'loadClass']);


$product = new \app\models\Product();
var_dump($product->getOne(2));


