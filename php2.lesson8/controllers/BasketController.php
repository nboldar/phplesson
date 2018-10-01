<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 24.09.2018
 * Time: 23:34
 */

namespace app\controllers;


use app\base\App;
use app\models\entities\Basket;
use app\models\repositories\BasketRepository;

class BasketController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'basket';
        $productsInBasket = (new Basket)->getProducts();
        $ids=array_keys($productsInBasket);
           $products =(new BasketRepository())->getBySomeIds($ids);
           foreach ($products as $value){
               if(isset($productsInBasket[$value->id])){
                   $value->setQuantity($productsInBasket[$value->id]);
               }
           };

        if (count($products) > 0){
            echo $this->render('basket_card', ['products' => $products]);;
        }else{
            echo $this->render('basket_card', ['products' => "<p>товаров в корзине нет!</p>"]);
        }


    }
    public function actionAddToBasket(){

        $product_id=App::call()->request->getParams()['product_id'];
        App::call()->session->addBasketItem($product_id);
        echo "<script>alert('Товар добавлен в корзину!');location.href='http://php2.local';</script>";
    }
    public function actionDeleteFromBasket(){

        $product_id=App::call()->request->getParams()['delProductId'];
        App::call()->session->delBasketItem($product_id);
        $this->actionIndex();
    }
}