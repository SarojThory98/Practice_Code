<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>
        <?php 
        echo "hello world!!";
        ?>
    </title>
</head>
<body>
    <?php
            $name="Narendra damodardas modi";
        $income=9000;
        echo "This is $name income is $income";

        $x="string";
        $y=21;
        $z=2.1;

        echo "\nfloat value= $z, integer value=$y, string value=$x";

        // sum of two number
        echo nl2br("\n");
        echo $y+$z;
        // echo nl2br("One line.\nAnother line.");
      ?>

    <?php
    //   global and local variabbles

    // local variable
    echo nl2br("\n");
      function myFun(){
        $x=5;
 echo "this is myFun in which local variable x= $x is declared";
      }
      myFun();

      //global variable
      $a1=2;$b1=3;
      function myFun2(){
        global $a1,$b1;
        $b1=$a1+$b1;
        echo "<br>sum of global a1 and b1 $b1";
        $a2=2;
        $b2=1;
        $c1=$a2+$b2;
  echo "<br>sum of local a2 and b2 is $c1";
      }
      myFun2();
echo "<br>";
echo "value of global b1 is $b1";


/* PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name 
of the variable. This array is also accessible from within functions and can be used to update global 
variables directly.
 */
$a3=4;$b3=5;
function myFun3(){
    $GLOBALS['b3']=$GLOBALS["a3"]+$GLOBALS['b3'];
    echo "<br>sum of a3 and b3 is: $GLOBALS[b3]";
}
myFun3();
echo "<br>sum of a3 and b3 is: $b3";
      ?>

<?PHP 
// <!-- static keyword -->
static $static_var=0;
function myFun4(){
    global $static_var;
    echo "<br>static variable value is: $static_var";
    $static_var++;
    // $static_var=5;
}
myFun4();
myFun4();
myFun4();
 ?>    


</body>
</html>