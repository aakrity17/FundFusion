<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "our-teams";

// http://localhost/FundFusion/ourteam/connect.php to check
// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Perform database operations...

// Close the connection
$conn->close();
