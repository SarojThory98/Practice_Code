<?php
/*
PHP supports the following data types:
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
*/

// string
$str="saroj"; $str1='thory';
echo $str," ", $str1,"<br>";
var_dump($str);
echo " is Data tyype of str<br>";

//integer
$int=21;
echo "<br>value of int $int and type is: ",var_dump($int);

//float
$float=2.1;
echo "<br>value of float $float and type is: ",var_dump($float);

//boolean
$bool1=true; $bool2=false;
echo "<br>value of bool1 $bool1 and type is: ",var_dump($bool1);
echo "<br>value of bool2 $bool2 and type is: ",var_dump($bool2);

//Array
$arr=array("first",'second',1,1.1);
echo "<br>value of arr $arr and type is: ",var_dump($arr);
echo "<br>value of fourth element in array: $arr[3]";

//PHP object
/*
class myClass{
    private $x,$y;
    public function __construct($x,$y){
        $this->x=$x;
        $this->y=$y;
    }
    public function message(){
 return "X and Y variable is: ".$this->x. "<br>";
    }
}
$obj=new myClass("var1", "var2");
echo obj->message();
*/

//null value
$a="Hello world!!";
$a=null;
echo "<br>";
var_dump($a);
?>