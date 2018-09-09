<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 09.09.2018
 * Time: 21:21
 */

namespace app\models;


class Payment extends Model
{
    public $id;
    public $sum;
    public $orderId;
    public $status;
    public function getTableName():string
    {
        return 'products';
    }
    public function changeStatus(string $newStatus){
        $this->status=$newStatus;
    }
}