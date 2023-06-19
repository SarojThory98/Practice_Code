<?php
// Date formates
echo "Today's date: ",date("Y/m/d"),"<br>";
echo "Today's date: ",date("d/m/Y"),"<br>";
echo "Today's date: ",date("d-m-Y"),"<br>";
echo "Today's date: ",date("d.m.Y"),"<br>";
echo "Today's day: ",date("l"),"<br>";

//Time formates
echo "Current time: ",date("H:i:s"),"<br>";
echo "Current time: ",date("H:i:sa"),"<br>";
echo "Current time: ",date("s:i:Ha"),"<br>";
echo "Current time: ",date("h:i:sa"),"<br>";
date_default_timezone_set("America/New_York");
echo "Current time: ",date("h:i:sa"),"<br>";

//mktime()
$dateTime=mktime(3,50,25,14,9,2023);
echo "mktime is: ",date("Y/m/d h:i:sa",$dateTime),"<br>";

//strtotime()
$str=strtotime("3:45pm Feb 3 2023");
echo "strtotime is: ",date("Y/m/d h:i:sa",$str),"<br>";
$str2=strtotime("tomorrow");
echo "strtotime tommorrow is: ",date("Y/m/d h:i:sa",$str2),"<br>";
$str3=strtotime("+3 months");
echo "strtotime +3 months is: ",date("Y/m/d h:i:sa",$str3),"<br>";
$str4=strtotime("tuesday");
echo "strtotime tuesday is: ",date("Y/m/d h:i:sa",$str4),"<br>";
?>
© 2010-<?php echo date("Y"); ?>