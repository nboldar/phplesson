<?php
namespace app\models;

/**
 * Class Product
 * @package app\models
 * @property $price
 */
class Product extends DbModel
{
    protected $properties = [
        'id' => '',
        'name' => '',
        'description' => '',
        'price' =>  '',
        'producer' => '',
        'img' => '',
    ];

    function __get($name)
    {
        if(isset($this->properties[$name])){
            return $this->properties[$name];
        }
    }






    /*  public $id;
      public $name;
      public $description;
      public $price;
      public $producer;
      public $img;*/

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
        parent::__construct();
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->producer = $producer;
    }


    public static function getTableName():string
    {
       return 'products';
    }




}