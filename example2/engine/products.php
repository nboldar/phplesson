<?php
function getAllProducts(){
    return queryAll("SELECT * FROM products");
}

function getProductById($id){
    return queryOne("SELECT * FROM products WHERE id = {$id}");
}