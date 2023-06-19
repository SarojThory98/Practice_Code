<?php
//Create a class for addition and subtraction
//By default class memeber is public in PHP
echo "<h2>Introduction to classess</h2>";
class AddSub{
    // public $a, $b, $c; //It is also working without this line.
    function sum(){ //can also write public keyword
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}
//create an object for printing value of sum function
$obj = new AddSub();
$obj->a=20;
$obj->b=10;
echo "Sum of $obj->a and $obj->b is: ",$obj->sum();
echo "<br>";

//create an object for printing value of sub function
$subtraction = new AddSub();
$subtraction->a=10;
$subtraction->b=1;
echo "Sub of $subtraction->a and $subtraction->b is: ",$subtraction->sub();

// We can use instanceof keyword to check that object belongs to a specific class or not
echo "<br>";
$checkInstance=new  AddSub();
var_dump($checkInstance instanceof AddSub);
?>

<!-- 
So, where can we change the value of the $name property? There are two ways:
1. Inside the class (by adding a set_name() method and use $this)
2. Outside the class (by directly changing the property value)
-->

