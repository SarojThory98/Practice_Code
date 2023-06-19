<!-- Create database using dynamic connection -->
<?php
// $servername="localhost";
// $username="root";
// $password="password";

// $dynamic_conn=new mysqli($servername,$username,$password);
// if($dynamic_conn->connect_error){
//     die("coonection failed");
// }
// echo "successful<br>";
// $createDatabase="CREATE DATABASE dynamicSqli";
// if($dynamic_conn->query($createDatabase)===TRUE){
//     echo "<br>Database created!!";
// }
// else
// {
//     echo "<br>Error creating database";
// }
// $dynamic_conn->close();
?>


<!-- Create database using procedure connection -->
<?php
$servername1="localhost";
$username1="root";
$password1="password";

$procedure_conn=mysqli_connect($servername1,$username1,$password1);
if(!$procedure_conn){
    die("connection failed");
}
echo "successful<br>";
$createDatabase1="CREATE DATABASE Sqli_pro";
if(mysqli_query($procedure_conn,$createDatabase1)){
    echo "<br>Database created!!";
}
else
{
    echo "<br>Error creating database";
}
mysqli_close($procedure_conn);
?>

<!-- Create database using PDO connection -->
<?php
// $servername2="localhost";
// $username2="root";
// $password2="password";

// try{
//     $PDO_conn=new PDO("mysql:host=$servername2",$username2,$password2);
//     $PDO_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "connected!!";
// }
// catch(PDOException){
// echo "connection failed";
// }
// $createDatabase2="CREATE DATABASE dynamicSqli_pdo";
// if($PDO_conn->exec($createDatabase2)){
//     echo "<br>Database created!!";
// }
// else
// {
//     echo "<br>Error creating database";
// }
?>