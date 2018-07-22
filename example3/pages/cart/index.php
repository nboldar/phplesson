<?php
session_start();
$basket = [];
if (!empty($_SESSION['basket'])) {
    $productsIds = array_keys($_SESSION['basket']);
    $products = getProductsByIds($productsIds);
    foreach ($products as $product) {
        $basket[] = [
            'product' => $product,
            'count' => $_SESSION['basket'][$product['id']]
        ];
    }
}

echo render('cart', ['basket' => $basket]);
