<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="ezyro_33787098_brands";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";


?>