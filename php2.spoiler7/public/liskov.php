<?php
class Rectangle{
    protected $height;
    protected $width;

    public function getHeight()
    {
        return $this->height;
    }
    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function getWidth()
    {
        return $this->width;
    }
    public function setWidth($width)
    {
        $this->width = $width;
    }
}

class Square extends Rectangle {
    public function setHeight($height)
    {
        $this->height = $height;
        $this->width = $height;

    }
    public function setWidth($width)
    {
        $this->width = $width;
        $this->height = $width;
    }
}



$figure = new Square();
$figure->setWidth(5);
$figure->setHeight(4);
$area = $figure->getWidth() * $figure->getHeight();
var_dump($area);