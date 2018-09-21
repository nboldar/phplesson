<?php

namespace app\models;

class Product extends Model
{
    public $id;
    public $title;
    public $img_url;
    public $price;
    public $size;
    public $category;
    public $color;
    public $brend;
    public $gender;

    public function __construct( $id = null,
                                string $title = null,
                                string $img_url = null,
                                float $price = null,
                                string $size = null,
                                string $category = null,
                                string $color = null,
                                string $brend = null,
                                string $gender = null)
    {
        parent::__construct();
        $this->id = $id;
        $this->title = $title;
        $this->img_url = $img_url;
        $this->price = $price;
        $this->size = $size;
        $this->category = $category;
        $this->color = $color;
        $this->brend = $brend;
        $this->gender = $gender;
    }

    public static function getTableName(): string
    {
        return 'products';
    }
}