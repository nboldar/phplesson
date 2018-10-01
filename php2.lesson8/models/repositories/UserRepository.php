<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 01.10.2018
 * Time: 17:55
 */

namespace app\models\repositories;


class UserRepository extends Repository
{
    public function getTableName(): string
    {
        return 'user';
    }
    public function getEntityClass(): string
    {
        return User::class;
    }

}