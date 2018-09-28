<?php
namespace app\models;
class User extends DbModel
{
    public $id;
    public $name;
    public $login;
    public $password;

    public static function getTableName():string
    {
        return 'users';
    }


}