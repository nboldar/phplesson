<?php
namespace app\controllers;

use app\models\repositories\ProductRepository;

class ProductController extends Controller
{
    public function actionIndex()
    {
        echo "catalog";
    }

    public function actionCard()
    {
       //$this->useLayout = false;
       $id = $_GET['id'];
       $product = (new ProductRepository())->getOne($id);

       if(!$product){
           throw new \Exception("Продукт не найден!");
       }
       echo $this->render('card', ['product' => $product]);
    }
}