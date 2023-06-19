<?php
$x=4*2.5;
echo var_dump($x);
echo "<br>";

//PHP integers
echo PHP_INT_MAX;
echo "<br>";
echo PHP_INT_MIN;
echo "<br>";
echo PHP_INT_SIZE;

//functions for integers
echo "<br>";
echo is_int(345678);
echo "<br>";
echo is_integer(345678);
echo "<br>";
echo is_long(34);
echo "<br>";

//float numbers
echo "<br>";
echo PHP_FLOAT_MAX;
echo "<br>";
echo PHP_FLOAT_MIN;
echo "<br>";
echo PHP_FLOAT_DIG;
echo "<br>";
echo PHP_FLOAT_EPSILON;
echo "<br>";
//float functions
echo "<br>";
echo is_float(123.1);
echo "<br>";

// PHP Infinity
// A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.
echo "<br>";
echo is_finite(123234);
echo "<br>";

//casting
$y=123.654;$z;
echo "<br>";
echo $z=(int)$y;
echo "<br>";
?>

<?php
//PHP constants

?>