<?php

namespace app\controllers;

use app\models\entities\Product;
use app\models\repositories\ProductRepository;
use app\base\App;

class ProductController extends Controller
{
    public function actionIndex()
    {
        session_start();
        var_dump(App::call()->session->getUserId());
        $products = (new ProductRepository())->getAll();
        echo $this->render('product_card', ['products' => $products]);
    }

    public function actionCard()
    {
        $id = App::call()->request->getParams('id')['id'];
        $product = (new ProductRepository())->getOne($id);
        $this->useLayout=false;
        echo $this->render('single_page', ['product' => $product]);
    }
}