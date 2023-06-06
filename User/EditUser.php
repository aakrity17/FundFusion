<?php
include "../admin/sessioncheck.php";
include "../admin/routeconfig.php";

// Include the database connection file
include "../database/Db_Connection.php";// EditUser.php

// Retrieve the user ID from the query parameter
$userId = $_GET["id"];

// Fetch the user data from the database based on the ID
$sql = "SELECT * FROM user WHERE id = '$userId'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Retrieve the user's data
    $user = $result->fetch_assoc();

    // Populate the form fields with the user's data
    $name = $user["name"];
    $address = $user["address"];
    $contact = $user["Contact"];
    $username = $user["username"];
    $email = $user["email"];

    // Display the form for editing
    ?>

    <h2>Edit User</h2>
    <form method="post" action="UpdateUser.php">
        <input type="hidden" name="id" value="<?php echo $userId; ?>">

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo $name; ?>" required><br>
        <!-- Add other form fields with their corresponding values -->

        <input type="submit" value="Update">
    </form>

    <?php
} else {
    echo "User not found!";
}
?>
