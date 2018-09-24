<?php


use \app\controllers\Error;

//use \app\services\Autoloader;

include_once $_SERVER['DOCUMENT_ROOT'] . '/../config/config.php';
include ROOT_DIR . "services/Autoloader.php";
require_once VENDOR_DIR . 'autoload.php';
//spl_autoload_register([new \app\services\Autoloader(), 'loadClass']);
$request = new \app\services\Request();
$controllerName = $request->getControllerName() ?: DEFAULT_CONTROLLER;
$action = $request->getActionName();
$controllerClass = CONTROLLERS_NAMESPACE . "\\" . ucfirst($controllerName) . "Controller";
try {
    if (class_exists($controllerClass)) {
//    $controller = new $controllerClass(new \app\services\TemplateRenderer());
        $controller = new $controllerClass(new \app\services\TemplateRenderer());
        $controller->run($action);
    }
} catch (\Exception $e) {
    $error = new Error(new \app\services\TemplateRenderer());
    $error->run('error');
}

