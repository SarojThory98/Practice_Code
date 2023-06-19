<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP session</title>
</head>
<body>
    <?php
    //  set session variables
    $_SESSION['fav_color']="sky blue";
    $_SESSION['name']="saroj";
    print_r($_SESSION);
    echo "session variables are set!!";
    //to unset session 
    // session_unset();

    //to destroy session
    // session_destroy();
    ?>
</body>
</html>