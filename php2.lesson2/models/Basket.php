<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 09.09.2018
 * Time: 20:55
 */

namespace app\models;


class Basket extends Model
{
    public $products;
    public $userId;
    public $sum;

    public function getTableName(): string
    {
        return 'inBasket';
    }
}