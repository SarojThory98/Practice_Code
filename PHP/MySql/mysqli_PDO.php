<!-- mysqli object-oriented -->
<?php
$severname="localhost";
$username="root";
$password="password";

$connection=new mysqli($severname,$username,$password);
if($connection->connect_error){
    die("connection is failed: ".$connection->connect_error);
}
echo "connection set successfully..<br>";
// echo JSON_encode($connection);
print_r($connection);
?>

<!-- mysqli procedural -->
<?php
echo "<br>";
$connection_pro=mysqli_connect($severname,$username,$password);
print_r($connection_pro);
if(!($connection_pro)){
    die("connection failed");
}
echo "<br>Connection setup!!";
?>

<!-- PDO setup -->
<?php
$servername = "localhost";
$username = "root";
$password = "password";

try {
  $connection_pdo = new PDO("mysql:host=$servername;dbname=newdb1", $username, $password);
  $connection_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: ";
}
?>

<!-- To close connection -->

<!-- close mysqli object-oriented connection -->
<!-- $connection->close(); -->

<!-- close mysqli procedural connection -->
<!-- mysqli_close($connection_pro); -->

<!-- close PDO connection -->
<!-- $connection_pdo=null; -->

