<?php
namespace app\models\entities;
/**
 * Class Product
 * @package app\models
 * @property $price
 */
class Product extends DataEntity
{
      public $id;
      public $name;
      public $description;
      public $price;
      public $producer;
      public $img;

    /**
     * Product constructor.
     * @param $id
     * @param $name
     * @param $description
     * @param $price
     * @param $producer
     */
    public function __construct($id = null, $name = null, $description = null, $price = null, $producer = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->producer = $producer;
    }

    public function getShortDescription()
    {
        return mb_substr($this->description, 0, 100);
    }

    public function getFullName()
    {
        return sprintf("%s - %s", $this->producer, $this->name);
    }
}