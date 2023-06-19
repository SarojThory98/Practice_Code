<?php
// Interface is similar to the class
//Class defines both propert and methods but interface cant define property and assign values
//work like abstract class- 1. cant make object of abstract class
// 2. All methods in interface are abstract method that is declared in parent and impplement in child class
//cant use access specifier in method declaration
interface baseInt1{
  function add($a,$b);
}

interface baseInt2{
 function sub($x,$y);
}

class ChildClass{
 public function add($x,$y){
    return $x+$y;
 }
 public function sub($x,$y){
    return $x-$y;
 }
}
$obj=new ChildClass();
echo $obj->add(8,1);
echo "<br>";
echo $obj->sub(8,1);
echo "<br>";
?>