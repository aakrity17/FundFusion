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
    $sql = "UPDATE user SET name = ?, address = ?, Contact = ?, username = ?, email = ?, role = 'user',status='active' WHERE id = ?";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind parameters securely
    $stmt->bind_param("sssssi", $name, $address, $contact, $username, $email, $userId);

    // Execute the query
    if ($stmt->execute()) {
        // Redirect to the desired page after successful update
        echo"sucessfully updated";
        header("Location: EditUser.php");
        exit();
    } else {
        echo "Something went wrong!" . $conn->error;
    }
}
?>

