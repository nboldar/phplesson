<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 24.09.2018
 * Time: 21:17
 */

namespace app\models\repositories;


use app\models\entities\Product;

class ProductRepository extends Repository
{
    public function getTableName(): string
    {
        return 'products';
    }

    public function getEntityClass(): string
    {
        return Product::class;
    }

}