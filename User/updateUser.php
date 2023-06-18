<?php
include "../admin/sessioncheck.php";
include "../database/Db_Connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $userId = $_POST["user_id"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $username = $_POST["username"];
    $email = $_POST["email"];

    // Prepare the SQL statement
    $sql = "UPDATE user SET name = '$name', address = '$address', Contact = '$contact', username = '$username', email = '$email' WHERE id = '$userId'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Data updated successfully!";
    } else {
        echo "Something went wrong!" . $conn->error;
    }
}
?>
