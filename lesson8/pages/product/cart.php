<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 17.07.2018
 * Time: 23:17
 */
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $reqData = $_POST['delProductId'];
    unset($_SESSION['product'][$reqData]);
}

if (count($_SESSION['product']) > 0) {
    $productsInCart = $_SESSION['product'];
    $listId = implode(",", array_keys($productsInCart));
    $products = queryAll("SELECT * FROM products WHERE id in({$listId})");
    $products = addQuantity($products, $productsInCart);
    $_SESSION['order']=$products;
    $sum=0;
    foreach ($products as $val){
        $sum+=($val['price']*$val['quantity']);
    }
    $_SESSION['sum'][0]=$sum;
    var_dump($sum);
    echo renderCart('product_in_cart_card', ['products' => $products,'sum'=>$sum]);
} else {
    $content = [0 => "товаров в корзине нет!"];
    echo renderTemplate("shopping_cart", ['content' => "<p>товаров в корзине нет!</p>"]);
}




