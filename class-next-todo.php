<?php
//Inheritance
class Todo
{

    public $car;
    public $brand;
    public $price;

    function __construct($c, $b, $p)
    {
        $this->car = $c;
        $this->brand = $b;
        $this->price = $p;
    }
    function head(){

        echo "Car: " . $this->car . "\n";
        echo "Brand: " . $this->brand . "\n";
        echo "Price: $" . $this->price . "\n";
    
    }
    function Hi(){
        echo "Hi i'm From Todo Class";
    }
}

$obj = new Todo('C-class','lamo',34000);
$obj->head();
// Just Change The Class Name...


class Carmaterial extends Todo
{
    public $color, $shape, $size;

    function __construct($Cc,$Cs, $Cz)
    {
        $this->color = $Cc;
        $this->shape = $Cs;
        $this->size = $Cz;
    }

    function displayInfo()
    {
        echo "Color: " . $this->color . "\n";
        echo "Brand: " . $this->shape . "\n";
        echo "Price: $" . $this->size . "\n"; 
    }
}

$j = new Carmaterial("S-class", "Mercedes", 90000);
echo "--------\n";
$j->displayInfo();
echo "--------\n";
$j->Hi();
?>
