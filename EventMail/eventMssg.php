<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Phpmailer/src/Exception.php';
require '../PHPMailer/Phpmailer/src/PHPMailer.php';
require '../PHPMailer/Phpmailer/src/SMTP.php';
session_start(); 

if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
    $uid = $_SESSION['id'];
    $email = $_SESSION['email'];
    $name = $_SESSION['name'];

    include '../database/Db_Connection.php';

    

        $mail = new PHPMailer(true);

        // Set up SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Replace with your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'fundfusionab@gmail.com';  // Replace with your email address
        $mail->Password = 'irzupuqmlqwdnbyz';  // Replace with your email password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Set up email content
        $mail->setFrom('fundfusionab@gmail.com', 'FundFusion');  // Replace with your email address and name
        $mail->addAddress($email, $name);  // User's email address and name
        $mail->Subject = 'Participated Successfully!';
        $mail->Body = "Dear user,\n\nThank you for participating in the event. Our team will contact you for further information regarding the event.\n\nSincerely,\nFundFusion Team";

        // Send the email
        if ($mail->send()) {
            $message='Participation Notified';
            $encMessage=base64_encode($message);

            header("Location:../Success/success.php?message=$encMessage");
            
        } else {
            echo "Error sending the thank you email: " . $mail->ErrorInfo;
        }
    }

?>