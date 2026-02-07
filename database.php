<?php
// Database connection parameters
$servername = "localhost";
$username = "mkopscle_mkoposafiloans";
$password = "Kipngetich.91!@";
$dbname = "mkopscle_mkoposafiloans";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

?>
