<?php 

$servername = "sql105.ezyro.com";
$username = "ezyro_33787098";
$password = "k9s7gl5d8p";
$dbname ="ezyro_33787098_brands";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";


?>