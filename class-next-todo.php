<?php
//Inheritance
class Todo
{
    public $car, $brand, $price;
    function __construct($car = "null", $brand = "null",$price = "null")
    {
        $this->car = $car;
        $this->brand = $brand;
        $this->price = $price;
        
    }
}

$obj = new Todo();

