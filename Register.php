<?php
$dbhost = 'localhost :3306';
$dbusername = 'database' ;
$dbpassword = 'Bakanike123';
$dbname = 'mydatabase';

// Create connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}





$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = " INSERT INTO users(name , email , password)
VALUES ($name, $email, $password)";

if (conn -> query($sql) === true)
{echo "new record successful "}
else
{ echo "error:". $sql . "<br>".$conn->error;
}

?>
