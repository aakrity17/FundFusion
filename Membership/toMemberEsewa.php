<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Phpmailer/src/Exception.php';
require '../PHPMailer/Phpmailer/src/PHPMailer.php';
require '../PHPMailer/Phpmailer/src/SMTP.php';
session_start(); 
if (isset($_SESSION['name']) || isset($_SESSION['id'])) {
$uid=$_SESSION['id'];

include '../database/Db_Connection.php';
if (isset($_POST['Amount'])){
    $amount=$_POST['Amount'];

    $name=$_POST['name'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $membership_id=$_POST['membership_id'];

    // $sql="INSERT INTO donors VALUES("id",
    $sql = "INSERT INTO membership_register_info (membership_id ,user_id,date) VALUES ('$membership_id','$uid', CURDATE())";
      $result=mysqli_query($conn, $sql);
   if($result){

    if ($result) {
      
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
      $mail->addAddress($_POST["email"], $_POST["name"]);  // User's email address and name
      $mail->Subject = 'Thank you for donating!';
      $mail->Body = "Dear $name,\n\nThank you for being our member. We greatly appreciate your support.\n\nSincerely,\nFundFusion Team";
  
      // Send the email
      if ($mail->send()) {
          $suuccess= "Form details saved successfully in the database. Thank you email sent.";
      } else {
          echo "Error sending the thank you email: " . $mail->ErrorInfo;
      }
  } else {
      echo "Error saving form details: " . mysqli_error($conn);
  }
    
   }
   else{
    echo "Error: " . mysqli_error($conn);
  }

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
           body {
            display: flex;
            justify-content: center;
            align-items: center;
            height : 100vh;
            
           }
           img{
            height :40vh;
            weight :40vh;
           }
           p{
            font-size : 25px;
            text-align :center;
            color : green;
           }
           
        </style>
</head>
<body>
  <div>
    <img src="../img/tick.png" >
  <p >Confirm you payment  </p>
    <form action="https://uat.esewa.com.np/epay/main" method="post">
        <input value="<?php echo $amount?>" name="tAmt" type="hidden">
        <input value="<?php echo $amount?>" name="amt" type="hidden">
        <input value="0" name="txAmt" type="hidden">
        <input value="0" name="psc" type="hidden">
        <input value="0" name="pdc" type="hidden">
        <input value="EPAYTEST" name="scd" type="hidden">
        <input value="ee2c3ca1-696b-4cc5-a6be-2c40d929d453" name="pid" type="hidden">
        <input value="http://merchant.com.np/page/esewa_payment_success?q=su" type="hidden" name="su">
        <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
        <button type="submit" class="btn btn-success col-12" >Continue</button>
    </form>
    </div>
</body>
</html>

    
</body>
</html>


