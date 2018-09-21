<?php

namespace app\controllers;

use app\models\Product;

class ProductController extends Controller
{
    public function actionIndex()
    {
        $products = Product::getAll();
        echo $this->render('product_card', ['products' => $products]);
    }

    public function actionCard()
    {
        $id = $_GET['id'];
        $product = Product::getOne($id);
        echo $this->render('product_card', ['product' => $product]);
    }
}