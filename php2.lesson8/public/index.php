<?php
include $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';
$config = include $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php" ;

//spl_autoload_register([new \app\services\Autoloader(), 'loadClass']);
\app\base\App::call()->run($config);
