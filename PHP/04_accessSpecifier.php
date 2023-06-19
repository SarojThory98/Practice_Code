<?php
class BaseClass{
    public $a;
    protected $b;
    private $c=1000;
    function __construct($x,$y,$z){
      $this->a=$x;
      $this->b=$y;
      $this->c=$z;
    }
    function getData(){
        echo "<br>value of a: ",$this->a;
        echo "<br>value of b: ",$this->b;
        echo "<br>value of c: ",$this->c;
    }
}
 class ChildClass extends BaseClass{
  
  // set values of a ,b,c
  // private $c;

  function setValue(){
    $this->a=6;
    $this->b=7;
    // $this->c=8;
  }
  function getValue(){
    // setValue();
    echo "<br>Reset value of a: ",$this->a;
    echo "<br>Reset value of b: ",$this->b;
    echo "<br>Reset value of c: ",$this->c; //this will not display output of C because of private access specifier
  }  
 }
//  $obj1=new ChildClass(2,3,4);
// $obj1->getData();

$obj2=new ChildClass(6,7,8); 
 $obj2->setValue();
 $obj2->getValue(); 
?>