<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 17.07.2018
 * Time: 19:32
 */
session_start();
header("Content-Type: text/html; charset=utf8");
require_once __DIR__ . "/../config/config.php";
require_once __DIR__ . "/../config/db.php";
require_once ENGINE_DIR . "render.php";
require_once ENGINE_DIR . "getProductData.php";

$products = getAllProducts();
echo render('product_card', ['products' => $products]);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $requestData = $_POST['productId'];
    if (!isset($_SESSION['product'][$requestData])) {
        $_SESSION['product'][$requestData] = 1;
    } else {
        $_SESSION['product'][$requestData]++;
    }
}


