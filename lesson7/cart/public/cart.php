<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 17.07.2018
 * Time: 23:17
 */
session_start();
header("Content-Type: text/html; charset=utf8");
require_once __DIR__ . "/../config/config.php";
require_once __DIR__ . "/../config/db.php";
require_once ENGINE_DIR . "render.php";
require_once ENGINE_DIR . "addQuantity.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $reqData = $_POST['delProductId'];
    unset($_SESSION['product'][$reqData]);
}
$listId = implode(",", array_keys($_SESSION['product']));
$productsInCart = $_SESSION['product'];
$products = queryAll("SELECT * FROM products WHERE id in({$listId})");
$products = addQuantity($products, $productsInCart);
echo renderCart('product_in_cart_card', ['products' => $products]);

