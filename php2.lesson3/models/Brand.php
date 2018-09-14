<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 09.09.2018
 * Time: 21:14
 */

namespace app\models;


class Brand extends Model
{
    public $id;
    public $name;

    public function getTableName(): string
    {
        return 'brands';
    }
}