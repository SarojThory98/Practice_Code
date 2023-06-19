<?php
$x=5;
$y=2;

//Globals
function myFun(){
    $GLOBALS['x']=$GLOBALS['x']+$GLOBALS['y'];
    echo "sum of x and y: ",$GLOBALS['x'],"<br>";
}
myFun();

//PHP $_SERVER
//$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>superglobals</title>
</head>
<body>
  <br>
  <br>  
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

    <?php
    // PHP $_REQUEST
// PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = ($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
    ?>
    <a href="demo.php?subject=PHP&web=W3schools.com">Test $GET</a>
</body>
</html>