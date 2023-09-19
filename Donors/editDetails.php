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
            $message= "User details successfully updated";
             $encMessage=base64_encode($message);
             header("location:../Success/success.php?message=$encMessage"); 
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
    <style>
        body {
            background-color: #6633cc;
        }

        .update-details-container {
            margin: 0 auto;
            max-width: 400px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .update-details-container h4 {
            color: #333333;
        }

        .update-details-container label {
            display: block;
            margin-top: 10px;
            color: #333333;
        }

        .update-details-container input[type="text"],
        .update-details-container input[type="email"] {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
            border: 1px solid #cccccc;
            border-radius: 3px;
        }

        .update-details-container button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #6633cc;
            color: #ffffff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .update-details-container button:hover {
            background-color: #551ac8;
        }
    </style>
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