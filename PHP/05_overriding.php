<?php
class ParentClass{
public $name="saroj thory";

//create calculation function
public $a=5,$b=3;
function calculation(){
 return $this->a+$this->b;
}
//create constructor
function __construct(){
    echo "parent class constructor<br>";
}
}
class ChildClass extends ParentClass{
public $name="Nick Jonas";
//create calculation function same name as parentclass
public $x=5,$y=3;
function calculation(){
 return $this->x-$this->y;
}
//create constructor
function __construct(){
    echo "child class constructor<br>";
}
}
//create ParentClass object
$obj=new ParentClass();
echo $obj->name;
echo "<br>";
echo $obj->calculation();
echo "<br>";

//create ParentClass object
echo "<br>";
$obj1=new ChildClass();
echo $obj1->name;
echo "<br>";
echo $obj1->calculation();
echo "<br>";
?>