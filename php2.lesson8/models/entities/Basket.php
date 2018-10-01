<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 09.09.2018
 * Time: 20:55
 */

namespace app\models\entities;


use app\base\App;

class Basket extends DataEntity
{
    public $products;
    public $quantity;

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * Basket constructor.
     * @param $products
     */
    public function __construct(array $products = [])
    {
        $this->products = $products;
    }

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return App::call()->session->getBasket();
    }

}