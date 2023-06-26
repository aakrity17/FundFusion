<?php
// Include the necessary files and start the session
include "../admin/routeconfig.php";
include "../database/Db_Connection.php";
session_start();

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $essential = $_POST['essential'];

    // Perform data validation if needed

    // Insert the data into the database
    $sql = "INSERT INTO essential (name, address, contact, email, essential) 
            VALUES ('$name', '$address', '$contact', '$email', '$essential')";

    if (mysqli_query($conn, $sql)) {
        // Data inserted successfully
        // echo "Data inserted successfully.";
        header('Location: thankyou.php');
    } else {
        // Error executing the query
        echo "Error executing the query: " . mysqli_error($conn);
    }
} else {
    // Redirect if the form was not submitted
    header('Location: essentials.php');
    exit();
}
?>
