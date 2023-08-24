<?php
//Inheritance
class Todo
{

    public $car, $brand, $price;

    function __construct($car, $brand, $price)
    {
        $this->car = $car;
        $this->brand = $brand;
        $this->price = $price;
    }
    // function head(){
    //     echo "<h3>Show My Car</h3>";
    // }
}

$obj = new Todo("S-class", "Marcides", 90, 0000);
// $obj->head();
