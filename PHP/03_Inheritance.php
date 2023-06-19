<?php
// PHP supports single, multilevel, Hierarchical inheritance, where only one class can be 
// derived from single parent class. We can simulate multiple inheritance by using interfaces
class BaseClass{
    public $name, $age, $salary;
    function __construct($n,$a,$s){
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;
    }

    function getData(){
        echo "<br>Employee name: ",$this->name;
        echo "<br>Employee age: ",$this->age;
        echo "<br>Employee salary: ",$this->salary;
    }
}
class DerivedClass extends BaseClass{
    function __construct(){
        echo "derived";
    }
    // We can not declare multiple constructor in one class
    // function __construct($a,$b){
    //    echo "second constructor";
    // }
}
// $base=new BaseClass("saroj",20,9000);
// $base->getData();
echo "<br>";
$derive=new DerivedClass();
$derive1=new DerivedClass(1,2);
$derive->getData();

// function test(){
//     echo "Hello World";
// }

// test(12 , 11);
?>