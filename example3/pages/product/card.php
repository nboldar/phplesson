<?php
$id = (int) $_GET['id'];
$product = getProductById($id);

echo render("product", ['product' => $product]);