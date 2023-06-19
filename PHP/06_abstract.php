<?php
//In abstract class it is compulsory to use abstract keyword, atleast have one abstract method, 
//and implementation of this method should be in inherited class
abstract class BaseClass{
public $name="saroj";
abstract function fun();
abstract protected function myFun();
abstract function __construct();
}
class ChildClass extends BaseClass{
  public function myFun(){
    echo "My name is: ",$this->name;
  }
  public function fun(){
    echo "This is fun function";
  }
  function __construct(){
    echo "This is the abstract constructor<br>";
  }
}
class childClass2 extends BaseClass{
    public function myFun(){
        echo "My name is: ",$this->name;
      }
      public function fun(){
        echo "This is fun function";
      }
      function __construct(){
        echo "This is the abstract constructor<br>";
      }  
}

$obj=new ChildClass();
$obj->myFun();
echo "<br>";
$obj->fun();
$obj1=new childClass2();
$obj1->myFun();
?>