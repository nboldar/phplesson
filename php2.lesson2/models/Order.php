<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 09.09.2018
 * Time: 20:56
 */

namespace app\models;


class Order extends Model
{
    public $id;
    public $userId;
    public $date;
    public $sum;

    public function getTableName(): string
    {
        return 'orders';
    }
}