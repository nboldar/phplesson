<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 24.09.2018
 * Time: 23:22
 */

namespace app\models\repositories;


use app\models\entities\Basket;

class BasketRepository extends Repository
{
    public function getTableName(): string
    {
        return 'orders';
    }

    public function getEntityClass(): string
    {
        return Basket::class;
    }

}