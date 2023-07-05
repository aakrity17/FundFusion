<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Phpmailer/src/Exception.php';
require '../PHPMailer/Phpmailer/src/PHPMailer.php';
require '../PHPMailer/Phpmailer/src/SMTP.php';



include '../database/Db_Connection.php';

function generateRandomPassword($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-=_+';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $password .= $characters[$index];
    }
    return $password;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the values from the login form
    $email = $_POST['email'];
    
    // Generate a random password
    $newPassword = generateRandomPassword();


// Update the password field of the user
$sql = "UPDATE user SET password = md5('$newPassword') WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if ($result) {
    if (mysqli_affected_rows($conn) > 0) {
        // Password updated successfully
        $mail = new PHPMailer(true);

        // SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'fundfusionab@gmail.com';
        $mail->Password = 'qjfkeinkxaxtfept';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Email settings
        $mail->setFrom('fundfusionab@gmail.com');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'New Password Generated';
        $mail->Body = 'Your new password is: ' . $newPassword;

        try {
            $mail->send();
            $message = 'New password has been sent to your email. Please check your mail inbox.';
        } catch (Exception $e) {
            $message = 'An error occurred while sending the email: ' . $mail->ErrorInfo;
        }
    } else {
        // No rows affected, user with the provided email not found
        $message = 'User not found!';
    }
} else {
    // Error occurred while updating the password
    $message = 'Error updating password: ' . mysqli_error($conn);
}


 }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            padding: 50px;
        }

        .custom-form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #f7f7f7;
            border-radius: 5px;
            padding: 30px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .custom-form .form-group label {
            font-weight: bold;
        }

        .custom-form .form-group input[type="email"] {
            border-radius: 3px;
        }

        .custom-form .btn-primary {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="custom-form">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <h5><?php echo $message ?></h5>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
