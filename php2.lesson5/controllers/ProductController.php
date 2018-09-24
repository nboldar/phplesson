<?php

namespace app\controllers;

use app\models\entities\Product;
use app\models\repositories\ProductRepository;

class ProductController extends Controller
{
    public function actionIndex()
    {
        $products = (new ProductRepository())->getAll();
        echo $this->render('product_card', ['products' => $products]);
    }

    public function actionCard()
    {
        $id = $_GET['id'];
        $product = (new ProductRepository())->getOne($id);
        echo $this->render('product_card', ['product' => $product]);
    }
}