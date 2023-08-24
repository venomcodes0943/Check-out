<?php
class First
{
    public $num1, $num2, $sum;
    function call_sum()
    {
        $this->sum = $this->num1 + $this->num2;
        return $this->sum;
    }
    function call_sub()
    {
        $this->sum = $this->num1 - $this->num2;
        return $this->sum;
    }
}
class Cf
{
    public $name, $age, $gender;

    function __construct($c_name = "No_name", $c_age = 'empty', $c_gender = 'empty')
    {
        $this->name = $c_name;
        $this->age = $c_age;
        $this->gender = $c_gender;
    }
    function greed(){
        echo $this->name . "\n". $this->age ."\n" . $this->gender ."\n" ;
    }
}

$obj = new First();

$obj->num1 = 12;
$obj->num2 = 2;

echo $obj->call_sub() . "\n";

$obj2 = new First();

$obj2->num1 = 10;
$obj2->num2 = 40;

echo $obj2->call_sum() . "\n";

echo "Congratulations :) \n";
echo "-------\n";

$intro = new Cf("HASEEB",17,'M');
$intro->greed();