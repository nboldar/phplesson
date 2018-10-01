<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 01.10.2018
 * Time: 17:57
 */

namespace app\models\entities;


class User extends DataEntity
{
    public $id;
    public $login;
    public $password;
    public $name;

    /**
     * User constructor.
     * @param $id
     * @param $login
     * @param $password
     * @param $name
     */
    public function __construct($id = null, $login = null, $password = null, $name = null)
    {
        $this->id = $id;
        $this->login = $login;
        $this->password = $password;
        $this->name = $name;
    }

    private function hashString($str)
    {
        return password_hash($str, PASSWORD_DEFAULT);
    }

}