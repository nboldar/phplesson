<?php
header("Content-Type: text/html; charset=utf8");
include __DIR__ .  "/../config/main.php";
include ENGINE_DIR . "render.php";
require_once ENGINE_DIR .  "db.php";
require_once ENGINE_DIR .  "products.php";
require_once ENGINE_DIR .  "users.php";
require_once ENGINE_DIR .  "route.php";

session_start();
$userId = $_SESSION['user_id']?? 0;

if($user = getUserById($userId)){
    $products = getAllProducts();
    echo render('catalog', ['products' => $products]);
}else{
    redirect('/login.php');
}
