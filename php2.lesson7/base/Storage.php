<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 28.09.2018
 * Time: 22:13
 */

namespace app\base;


class Storage
{
    private $items = [];

    public function set($key, $object)
    {
        $this->items[$key] = $object;
    }

    public function get($key)
    {

        if(!isset($this->items[$key])){
            $this->items[$key]=App::call()->createComponent($key);
        }
        return $this->items[$key];
    }
}