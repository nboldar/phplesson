<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 09.09.2018
 * Time: 20:55
 */

namespace app\models\entities;


class Basket extends DataEntity
{
    public $products;

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
        return $this->products;
    }

}