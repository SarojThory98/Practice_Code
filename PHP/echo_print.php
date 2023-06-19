<?php
//echo output
echo ("this is the first line of page<br>");
echo ("this  "),("line "),"is made by ","multiple echo statements!!<br>";
$x=2; $y=3;
$head="h1 heading";
echo ("<h1>").($head).("</h1>");
echo "<h1>",$head,"</h1>";
echo $x+$y;


//print statement
print "<br>This is the print statement!!<br>";
print ("This is the another print statement!!<br>");
// print "this","line","is made by multiple print statements"; /* This will give error because print take only one argument*/
print ("this "."line "."is made by multiple print statements<br>");
print "this "."line "."is made by multiple print statements<br>";
print ("this ").("line ").("is made by multiple print statements<br>");
$x1=2;$x2=5;
$h2head="h2 heading";
print "<h2>".$h2head."</h2>";
print $x1+$x2;
?>