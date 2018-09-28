<?php
namespace app\controllers;

use app\base\App;
use app\models\repositories\ProductRepository;

class ProductController extends Controller
{
 /*   public function actionTest()
    {
        $repository = new ProductRepository();
        $product = new Product();
        $product->name = "Печенье";
        $product->description = "С шоколадом";
        $product->price = 150;
        $product->producer = 1;
        $repository->save($product);
    }*/
    public function actionIndex()
    {
        $products = ((new ProductRepository())->getAll());
        echo $this->render("catalog", ['products' => $products]);
    }

    public function actionCard()
    {
       //$this->useLayout = false;
       $id = App::call()->request->getParams('id');
       $product = (new ProductRepository())->getOne($id);

       if(!$product){
           throw new \Exception("Продукт не найден!");
       }
       echo $this->render('card', ['product' => $product]);
    }
}