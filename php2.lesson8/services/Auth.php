<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 01.10.2018
 * Time: 19:16
 */

namespace app\services;


class Auth
{
    public function verify($password, $hash)
    {
        return password_verify($password, $hash);
    }
}