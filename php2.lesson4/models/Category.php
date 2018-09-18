<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 09.09.2018
 * Time: 21:13
 */

namespace app\models;


class Category extends Model
{
    public $id;
    public $name;

    public function getTableName(): string
    {
        return 'categories';
    }
}