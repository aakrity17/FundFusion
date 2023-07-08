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
                $sql = "SELECT * FROM user WHERE id='$title'";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $currentpassword = $row['password'];

                        if ($currentpassword == md5($old_password)) {
                            $sql = "UPDATE user SET password = md5('$new_password') WHERE id = '$title'";
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
    <style>
        body {
            background-color: #6633cc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .changepassword-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            animation: slideIn 0.5s ease-in-out;
        }

        @keyframes slideIn {
            0% {
                transform: translateY(-100px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        h4 {
            margin-top: 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="password"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #6633cc;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #551aa8;
        }
    </style>
</head>

<body>
    <div class="changepassword-container">
        <h4>Change Password</h4>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type="hidden" name="email" value="<?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?>">
            <label for="old_password">Current Password:</label>
            <input type="password" name="old_password" id="old_password">

            <label for="new_password">New Password:</label>
            <input type="password" name="new_password" id="new_password">

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password" id="confirm_password">

            <button type="submit">Change Password</button>
        </form>
    </div>
</body>

</html>