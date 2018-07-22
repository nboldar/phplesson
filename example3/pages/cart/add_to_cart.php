<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $productId = $_POST['id'];
    $productQty =  $_POST['qty'] ?: 0;

    if(isset($_SESSION['basket'][$productId])){
        $_SESSION['basket'][$productId] += (int) $productQty;
    }else{
        $_SESSION['basket'][$productId] = (int) $productQty;
    }

    echo json_encode(['success' => 'ok', "message" => "Товар был добавлен в корзину"]);
}


