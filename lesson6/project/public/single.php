<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 14.07.2018
 * Time: 17:42
 */
require_once __DIR__ . "/../config/config.php";
require_once CONFIG_DIR . "db.php";
require_once ENGINE_DIR . "render.php";
require_once ENGINE_DIR . "getProductData.php";
if ($_GET) {
    $id = $_GET['id'];
    $result = queryOne("SELECT * FROM products WHERE id={$id}");
    render('single_page', [
        'gender' => $result['gender'],
        'img_url'=>$result['img_url'],
        'price'=>$result['price'],
        'brend'=>$result['brend'],

    ]);

}