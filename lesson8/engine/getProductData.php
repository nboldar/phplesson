<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 14.07.2018
 * Time: 15:50
 */
require_once ENGINE_DIR . "db.php";
session_start();

function getAllProducts(){
    return queryAll("SELECT * FROM products");
}

function getProductById($id){
    return queryOne("SELECT * FROM products WHERE id = {$id}");
}
function getQuery(array $arr,$orderId)
{
    $newArr=[];
    foreach ($arr as $key => $val) {
        array_push($newArr, "('{$orderId}','{$key}','{$val}')");
    }
    return implode(",", $newArr);
}