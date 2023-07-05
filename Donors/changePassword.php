<?php
session_start();
include "../admin/routeconfig.php";
include "../database/Db_Connection.php";

if (isset($_SESSION['email'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = isset($_POST['email']) ? $_POST['email'] : '';

        if (empty($title)) {
            echo "Email parameter is missing";
        } else {
            $old_password = $_POST['old_password'];
            $new_password = $_POST['new_password'];
            $confirm_password = $_POST['confirm_password'];

            if ($new_password == $confirm_password) {
                $sql = "SELECT * FROM user WHERE email='$title'";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $currentpassword = $row['password'];

                        if ($currentpassword == $old_password) {
                            $sql = "UPDATE user SET password = md5('$new_password') WHERE email = '$title'";
                            $result = mysqli_query($conn, $sql);

                            if ($result) {
                                echo "Password successfully updated";
                            } else {
                                echo "Error updating password: " . mysqli_error($conn);
                            }
                        } else {
                            echo "Incorrect password";
                        }
                    } else {
                        echo "User not found";
                    }
                } else {
                    echo "Error executing query: ";
                }
            } else {
                echo "New password and confirm password do not match";
            }
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
    <title>Change Password</title>
</head>

<body>
    <div class="changepassword-container">
        <h4>Change Password</h4>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type="hidden" name="email" value="<?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?>">
            <label for="old_password">Current Password:</label>
            <input type="password" name="old_password" id="">

            <label for="new_password">New Password:</label>
            <input type="password" name="new_password" id="">

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password" id="">

            <button type="submit">Change Password</button>
        </form>
    </div>
</body>

</html>
