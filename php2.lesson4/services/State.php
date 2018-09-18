<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 18.09.2018
 * Time: 0:30
 */

namespace app\services;


class State
{
    public $whatChanged;

    public function __construct($object, $objState = null)
    {
        $this->objState = clone $object;
    }

    /**
     * @param $object
     */
    public function changeState($object)
    {

        foreach ($this->objState as $key => $val) {
            $objectClass=get_class($object);
            if (property_exists($objectClass, $key)){
                $this->objState->{$key} = $object->{$key};
            }

        }
        var_dump($this->objState);
    }

}