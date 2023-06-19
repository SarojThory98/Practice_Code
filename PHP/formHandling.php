<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
    <style>
        .redColor{
            color: red;
        }
        </style>
</head>
<?php
// $fullName=$email="";
$nameErr=$emailErr="";
   if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname=$_POST["name"];
    $email=$_POST["email"];
    if(empty($fname)){
     $nameErr="Name is requierd!!";
     
    }
    else if(!preg_match("/^[a-zA-Z-']*$/",$fname)){
        $nameErr="Only letters and space are allowed!!";
    }
    else{
        $fullName=testInputData($_POST["name"]);
    }
    if(empty($email)){
        $emailErr="Email is requierd!!";
       }
       else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $nameErr="Invalid email format!!";
    }
       else{
        $emailId=testInputData($_POST["email"]);
       }
    
   }

   function testInputData($data){
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
   }
?>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Name: <input type="text" name="name" value="<?php echo $fname ?>">
        <span class="redColor"><?php  echo $nameErr?></span>
        <br>
        Email: <input type="email" name="email" value="<?php echo $email ?>">
        <span class="redColor"><?php echo $emailErr ?></span>
        <br>
        <input type="submit" name="submit" value="Submit">
</form>
<?php

echo "<h3>your input is: </h3>";
echo $fullName, "<br>";
echo $emailId, "<br>";
?>
</body>

</html>
