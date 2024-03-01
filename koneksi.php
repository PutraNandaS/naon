<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "bukutamu";
// Create connection
 
$conn = mysqli_connect($host, $user, $password, $database);
 
// Check connection
 
if (!$conn) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}
echo "Connected successfully";
mysqli_close($conn);
?>