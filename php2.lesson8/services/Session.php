<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 01.10.2018
 * Time: 20:21
 */

namespace app\services;


class Session
{

    /**
     * Session constructor.
     */
    public function __construct()
    {
        session_start();
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $_SESSION['user_id'];
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
       $_SESSION['user_id']=$user_id;
    }

    /**
     * @return mixed
     */
    public function getBasket()
    {
        return $_SESSION['basket'];
    }

    /**
     * @param $product_id
     */
    public function addBasketItem($product_id)
    {
        if (isset($_SESSION['basket'][$product_id])) {
            $_SESSION['basket'][$product_id]++;
        } else {
            $_SESSION['basket'][$product_id] = 1;
        }
    }

    public function delBasketItem($product_id)
    {
        if (isset($_SESSION['basket'][$product_id])) {
            unset($_SESSION['basket'][$product_id]);
        }

    }
}