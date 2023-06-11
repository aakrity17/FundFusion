<?php
session_start();

include "../database/Db_Connection.php";
// Retrieve the username and email from the session

$username = $_SESSION['username'];
$email = $_SESSION['email'];

// Prepare the SQL statement
$sql = "SELECT * FROM user WHERE username = '$username' AND email = '$email'";

// Execute the query
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data from the result
    $row = $result->fetch_assoc();

    // Access the retrieved information
    $name = $row['name'];
    $address = $row['address'];
    $contact = $row['Contact'];
    // ... retrieve other fields as needed

    // Display the retrieved information
    echo "Name: $name<br>";
    echo "Address: $address<br>";
    echo "Contact: $contact<br>";
    // ... display other fields as needed
} else {
    echo "No user found with the provided username and email.";
}

// Close the database connection
$conn->close();
?>
