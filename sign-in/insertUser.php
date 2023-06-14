<?php
// header("Location:../index.php");
include "../database/Db_Connection.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST["name"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $passwordmd5 = md5($password);

    // Prepare the SQL statement
    $sql = "INSERT INTO user (name, address, Contact, username, email, password,role) VALUES ('$name', '$address', '$contact', '$username', '$email', '$passwordmd5','user')";

    // Execute the queryP
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
        header("Location:../index.php");
        exit();
    }
} else {
    echo $conn->error;
};
