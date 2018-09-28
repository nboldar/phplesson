<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 24.09.2018
 * Time: 23:34
 */

namespace app\controllers;


use app\models\entities\Basket;
use app\models\repositories\BasketRepository;

class BasketController extends Controller
{
    public function actionIndex()
    {
        $products = (new Basket)->getProducts();
        $this->layout='basket';
        echo $this->render('basket_card', ['products' => $products]);
    }
}