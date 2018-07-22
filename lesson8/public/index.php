<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 21.07.2018
 * Time: 15:32
 */
header("Content-Type: text/html; charset=utf8");
include __DIR__ . "/../config/config.php";
include ENGINE_DIR . "autoload.php";

session_start();
//var_dump($_SERVER);

if (!$path = preg_replace(["#^/#", "#[?].*#"], "", $_SERVER['REQUEST_URI'])) {
    $path = "product";
}
$parts = explode("/", $path);
$controller = $parts[0];
if (!isset($parts[1])) {
    $action = "index";
} else {
    $action = $parts[1];
};

$pageName = PAGES_DIR . $controller . DS . $action . ".php";
if (file_exists($pageName)) {
    require $pageName;
} else {
    echo "Такой страницы нет!";
}
