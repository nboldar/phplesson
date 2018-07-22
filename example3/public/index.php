<?php
header("Content-Type: text/html; charset=utf8");
include __DIR__ .  "/../config/main.php";
include ENGINE_DIR . "autoload.php";

session_start();


if(!$path = preg_replace(["#^/#", "#[?].*#"],"",$_SERVER['REQUEST_URI'])){
    $path = "product";
}
$parts = explode("/", $path);
$controller = $parts[0];
$action = $parts[1] ?? "index";

$pageName = PAGES_DIR  . $controller . DS . $action . ".php";
if(file_exists($pageName)){
    include $pageName;
}else{
    echo "Такой страницы нет!";
}
