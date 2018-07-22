<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 21.07.2018
 * Time: 21:27
 */
date_default_timezone_set('Europe/Moscow');
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date = date('d.m.Y G:i');
    $ship_address = $_POST['city'] . ", " . $_POST['state'] . ", " . $_POST['zip'];
    $order_sum = $_POST['proceed'];
    $order_status = "Не подтвержден!";
    $productsInCart = $_SESSION['product'];
    $numberProducts = count($_SESSION['product']);
    $orderId = insertAndGetId("INSERT INTO orders ( order_date, order_user, order_status,ship_address,order_sum) 
                       VALUES ('{$date}','user','{$order_status}','{$ship_address}','{$order_sum}')");
    $myQuery = getQuery($productsInCart, $orderId);
    execute("INSERT INTO order_products (order_id, product_id, quantity) VALUES  {$myQuery}");
    $data1 = queryAll("select * from order_products where order_id={$orderId}");
    if (isset($_POST['add'])){
        execute("update orders set order_status=' подтвержден'");
    }

$products=queryAll("SELECT * FROM order_products   join  orders o on order_products.order_id = o.id
                      join products p on order_products.product_id = p.id where order_id='{$orderId}'");
echo renderTemplate('order',['products'=>$products]);

}
