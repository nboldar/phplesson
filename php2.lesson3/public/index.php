<?php

use \app\models\Product;
use \app\services\Autoloader;

include_once $_SERVER['DOCUMENT_ROOT'] . '/../config/config.php';
include ROOT_DIR . "services/Autoloader.php";

spl_autoload_register([new Autoloader(), 'loadClass']);

$product = new Product();
$val=array('shirt','./img/ip',1100,'xs','shirts','','oggy','mams');
var_dump($product);
//$product->deleteItem(12);
//$product->updateItem(11, 'title', 'shirt');
$product->insertItems($val);

