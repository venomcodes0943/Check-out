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
class Cf extends First
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
// Class First Subtraction
$obj = new First();
$obj->num1 = 12;
$obj->num2 = 2;
echo $obj->call_sub() . "\n";

// Class First Addition
$obj2 = new First();
$obj2->num1 = 10;
$obj2->num2 = 40;
echo $obj2->call_sum() . "\n";


echo "Congratulations :) \n";
echo "-------\n";
// Construction Example With class Name Cf
$intro = new Cf("HASEEB",17,'M');
$intro->greed() . "\n";
echo "--------\n";
//Inheritance Example Where Base_class is 'First' And Derived_class is 'Cf'
$Ob = new Cf();
$Ob->num1 = 23;
$Ob->num2 = 13;
echo $Ob->call_sum();
