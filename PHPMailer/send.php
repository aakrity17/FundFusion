<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Phpmailer/src/Exception.php';
require 'Phpmailer/src/PHPMailer.php';
require 'Phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
  

    $mail = new PHPMailer(true);

    //smtp settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ujjwaldemoid999@gmail.com';
    $mail->Password = 'ctiybowllgqlfyqx';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    //email settings
    $mail->setFrom('ujjwaldemoid999@gmail.com');
    
    $mail->addAddress($_POST["email"]);
    
    $mail->isHTML(true);
    
    $mail->Subject = ($_POST["subject"]);
    $mail->Body = ($_POST["message"]);

    $mail->send();

    echo
    "
    <script>
    alert('Sent Successfully!!');
    document.location.href = 'index.php';
    </script>
    ";
        


}
?>