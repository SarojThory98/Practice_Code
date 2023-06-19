<?php
$cookie_name="user";
$cookie_value="saroj";;
// setcookie($cookie_name,$cookie_value,time()+8649);
//to delete a cookie
// setcookie($cookie_name,"",time()-8649);

// check if cookie is enabled or not
setcookie("name","value",time()+2000);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookie</title>
</head>
<body>
    <!-- for set cookie -->
    <!-- <?php
    if(isset($_COOKIE[$cookie_name])){
        echo "cookie name is: ".$cookie_name."<br>";
        echo "Value is: ".$_COOKIE[$cookie_name]."<br>";
    }
    else{
        echo "cookie is not set<br>";
    }
    ?>  -->

<!-- to check cookie is enabled or not -->
    <?php
    if(count($_COOKIE)>0){
        echo "cookie is enabled";
    }
    else{
        echo "cookie is not enabled";
    }
    ?>
</body>
</html>