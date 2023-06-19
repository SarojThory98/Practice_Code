<?php declare(strict_types=1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function fun1(){
    echo "this is user defined function.<br>";
}
fun1();
function fun2($name, $domain){
echo "My name is $name and doomain is $domain. <br>";
}
fun2("saroj", 'backend development');
function addNum($a,$b){
    return $a+$b;
}
echo addNum(2,"3"),"<br>";
echo addNum(2,"3 number"),"<br>";
echo addNum(2,"3number"),"<br>";
// echo addNum(2,"number"),"<br>";
echo addNum(2,3),"<br>";
?>

  <?php
echo "<br>";
// function strichFun(int $x,int $y){
//   echo "sum of $x and $y is: ",$x+$y;
// }
// strichFun(2,"3"); 
echo "<br>";
function strichFun2(int $x1,int $y1){
    echo "sum of $x1 and $y1 is: ",$x1+$y1;
  }
  strichFun2(2,3); 
//default value
echo "<br>";
function defalutVal(int $x=4){
    echo "value of x is: $x <br>";
}
echo defalutVal(3);
echo "<br>";
echo defalutVal();
echo "<br>";
function returnType(float $x){
   return (int)$x;
}
echo "value of x is: ",returnType(9.1), "<br>";
//we can do same thing by
echo "<br>";
function returnType1(float $x): int{
   return (int)$x;
}

echo "value of x is: ",returnType1(9.1), "<br>";
?> 