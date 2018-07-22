<?php
$products = getAllProducts();
echo render('catalog', ['products' => $products]);