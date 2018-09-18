<?php

use \app\models\Product;
use \app\services\Autoloader;

include_once $_SERVER['DOCUMENT_ROOT'] . '/../config/config.php';
include ROOT_DIR . "services/Autoloader.php";

spl_autoload_register([new Autoloader(), 'loadClass']);

$product=Product::getOne(3);

$product1=new Product( null,'fds','trew',154,'re','uytrnbvd','wxxxxxxxxxfx','zd','wd');
$prod=Product::getOne(14);
$prod->brend="hello";
$prod->color="green";
$prod->update();
$controllerName = $_GET['c'] ?: DEFAULT_CONTROLLER;
$action = $_GET['a'];

$controllerClass = CONTROLLERS_NAMESPACE . "\\" . ucfirst($controllerName) ."Controller";

if(class_exists($controllerClass)){
    $controller = new $controllerClass;
    $controller->run($action);}

