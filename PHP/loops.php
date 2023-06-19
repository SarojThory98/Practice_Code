<?php

/*
while loop
do-while loop
for loop
foreach loop
Break-continue
*/
//while
$i=0;
while($i<5){
    echo "value id: $i <br>";
    $i++;
}

//do-while loop
echo "<br><br>";
$doWhile=0;
do{
    echo "this is do-while $doWhile loop<br>";
    $doWhile++;
}while($doWhile<5);

//for loop
echo "<br><br>";
for($forLoop=0; $forLoop<5; $forLoop++){
    echo "this is for-loop $forLoop <br>";
}

//foreach loop
echo "<br><br>";
$forEach= array("first","second","third","fourth");
echo "array is: $forEach <br>";
foreach($forEach as $val){
    echo "array values is: $val<br>";
}
echo "<br>";
$forEach1=array("1"=>"first","2"=>"second");
echo "array is: $forEach1 <br>";
foreach($forEach1 as $val){
    echo "array values is: $val<br>";
}
echo "<br>";
foreach($forEach1 as $key=>$val){
    echo "array values is: $key=>$val<br>";
}
echo "<br>";
$forEach2=array(1,2,3,4,5,6,7);
for ($i=0; $i<=7; $i++) { 
    if($i==5){
        break;
    }
    echo "value of  i is: $i <br>";
}
echo "<br>";
for ($i=0; $i<=7; $i++) { 
    if($i==5){
        continue;
    }
    echo "value of  i is: $i <br>";
}
?>