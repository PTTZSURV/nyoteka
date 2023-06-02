<?php
// Database connection parameters
$servername = "localhost";
$username = "patapesa_Kiplangat";
$password = "e@cPBrqjLF9PdTb";
$dbname = "mpesa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

?>
