<?php
include_once "Shape.php";
class Rectangle extends Shape
{

    function __construct(public $width,  public $height)
    {
    }

    public function calculateArea()
    {
        return $this->width + $this->height;
    }
}
