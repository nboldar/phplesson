<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 14.07.2018
 * Time: 15:50
 */
require_once CONFIG_DIR . "db.php";
session_start();

function getAllProducts(){
    return queryAll("SELECT * FROM products");
}

function getProductById($id){
    return queryOne("SELECT * FROM products WHERE id = {$id}");
}