<?php
$str="Visit w3school!!";
$pattern="/w3School/i";
echo "String match is: ",preg_match($pattern, $str);
//preg_match_all();
echo "<br>";
$str1="this is the string for implementing preg_match_all() function";
$pattern1="/a/i";
echo "String match for preg_match_all: ",preg_match_all($pattern1,$str1);
//preg_replace();
echo "<br>";
$str2="Visit Microsoft";
$pattern2="/microsoft/i";
echo "String replace: ",preg_replace($pattern2, "Google", $str2);
?>