<?php
class Cons{
    public $name="thory", $age=21; //store default values

    //create constructor
    function __construct($n="saroj",$age=20){ //set default value if name is not set in constructor calling
        $this->name = $n;
        $this->age=$age;
    }
    //show values
    public function show(){
  echo "Name is: ",$this->name;
  echo "<br>Age is: ",$this->age;
    }
}
$obj=new Cons("saroj");
$obj->show();
echo "<br>";
$obj1=new Cons();
$obj1->show();
echo "<br>";
$obj2=new Cons("saroj",22);
$obj2->show();
echo "<br>";
$obj3=new Cons(23);
$obj3->show();

// With named parameters (as of PHP 8.0)
 echo "<br>";
 $obj3=new Cons(n: "saroj", age: 4); //parameter name must same name with constructor argument name
 $obj3->show();

?>