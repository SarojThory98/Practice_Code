
<?php
echo "<h2>filter in PHP</h2>";
echo "<p>Filter is used to validate and senitize external input.</p><br>";
echo "<p>filter_list() is used to show what the PHP filter extension offers</p><br>";

?>
<table>
<tr>
<td>Filter Name</td>
<td>Filter Id</td>
</tr>
<?php

 foreach(filter_list() as $id=>$name){
echo "<tr><td>".$name. "</td><td>".filter_id($name);
 }
?>
</table>
<br><br>
<p>Invalid submitted data can lead to security problems and break your webpage!
By using PHP filters you can be sure your application gets the correct input!</p>
<h3>filter_var()</h3>
<p>filter_var() is used to both validate and senitize data. <p>
<?php
echo "<h4>Validate String</h4>";
$str="<h6>saroj thory</h6>";
echo "Without filter str is: $str";
echo "After filteration str is: ";
echo $str=filter_var($str, FILTER_SANITIZE_STRING);

echo "<h4>Validate INT</h4>";
$int1=90.5;
echo "Without filter str is: $int1<br>";
echo "After filteration str is: ";
echo $int1=filter_var($int, FILTER_VALIDATE_INT);

echo "<br>";
echo "<p>if variable was set to 0, then filter is not return correct result. To solve this problem use one extra condition.<p>";

echo "<h4>Validate IP address</h4>";
$ip="127.0.0.1";
if(!(filter_var($ip,FILTER_VALIDATE_IP))===false)
{
  echo "valid IP";
}
else
{
    echo "Invalid IP";
}
?>

<h2>Advance Filter</h2>
<h4>Validate an Integer Within a Range</h4>
<?php
$int_var=20;
$min=10;
$max=11;
$range=array("min_val"=>$min, "max_val"=>$max);
$check_range=array("option"=>$range);
if(!(filter_var($int_var,FILTER_VALIDATE_INT,$check_range))===false){
    echo "Validate Int";
}
else{
    echo "Invalid Int";
}
?>
