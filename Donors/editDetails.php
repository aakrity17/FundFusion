<?php
session_start();
include "../admin/routeconfig.php";
include "../database/Db_Connection.php";

// Check if user is logged in
if (isset($_SESSION['email'])) {
    // Check if email parameter is set in the URL
    if (isset($_GET['email'])) {
        $title = urldecode($_GET['email']);

        // Retrieve previous user details from the database
        $sql = "SELECT * FROM user WHERE id = '$title'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $userId = $row['id'];
                $prev_name = $row['name'];
                $prev_address = $row['address'];
                $prev_contact = $row['Contact'];
                $prev_email = $row['email'];
            } else {
                echo "User not found";
            }
        } else {
            echo "Error retrieving user details: " . mysqli_error($conn);
        }
    } else {
        echo "Email parameter is missing";
    }

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];

        // Update user details in the database
        $sql = "UPDATE user SET name = '$name', address = '$address', Contact = '$contact', email = '$email', role = 'user' WHERE id = '$title'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "User details successfully updated";
        } else {
            echo "Error updating user details: " . mysqli_error($conn);
        }
    }
} else {
    echo "Session not found";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Details</title>
</head>

<body>
    <div class="update-details-container">
        <h4>Update User Details</h4>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>?email=<?php echo urlencode($title); ?>" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="<?php echo isset($prev_name) ? $prev_name : ''; ?>" required>

            <label for="address">Address:</label>
            <input type="text" name="address" id="address" value="<?php echo isset($prev_address) ? $prev_address : ''; ?>" required>

            <label for="contact">Contact:</label>
            <input type="text" name="contact" id="contact" value="<?php echo isset($prev_contact) ? $prev_contact : ''; ?>" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo isset($prev_email) ? $prev_email : ''; ?>" required>

            <button type="submit">Update Details</button>
        </form>
    </div>
</body>

</html>
