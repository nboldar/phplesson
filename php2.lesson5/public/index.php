<?php

use \app\models\Product;
use \app\services\Autoloader;

include_once $_SERVER['DOCUMENT_ROOT'] . '/../config/config.php';
include ROOT_DIR . "services/Autoloader.php";
require_once ROOT_DIR.'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem(ROOT_DIR.'views');

$twig = new Twig_Environment($loader, array(
    'cache' => false,
));

//spl_autoload_register([new Autoloader(), 'loadClass']);

$controllerName = $_GET['c'] ?: DEFAULT_CONTROLLER;
$action = $_GET['action'];

$controllerClass = CONTROLLERS_NAMESPACE . "\\" . ucfirst($controllerName) . "Controller";
if (class_exists($controllerClass)) {
    $controller = new $controllerClass(new \app\services\TwigRenderer());
    $controller->run($action);
}

