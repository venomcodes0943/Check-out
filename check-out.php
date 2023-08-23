<?php
class First
{
    public $num1 ,$num2, $sum;
    function call_sum(){
        $this->sum = $this->num1 + $this->num2;
        return $this->sum;
    }
    function call_sub(){
        $this->sum = $this->num1 - $this->num2;
        return $this->sum;
    }
}

$obj = new First();

$obj->num1 = 12;
$obj->num2 = 2;

echo $obj->call_sub()."\n";

$obj2 = new First();

$obj2->num1 = 10;
$obj2->num2 = 40;

echo $obj2->call_sum()."\n";

echo "Congratulations :)";


