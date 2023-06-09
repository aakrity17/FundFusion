
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Phpmailer/src/Exception.php';
require '../PHPMailer/Phpmailer/src/PHPMailer.php';
require '../PHPMailer/Phpmailer/src/SMTP.php';


include '../database/Db_Connection.php';

session_start(); 
if (isset($_SESSION['name']) || isset($_SESSION['id'])) {
$uid=$_SESSION['id'];

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
    echo "Success";

    //for sending mail
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
        $mail->Body = "Dear $name,\n\nThank you for your generous donation from Khalti of $amount. We greatly appreciate your support.\n\nSincerely,\nFundFusion Team";
    
        // Send the email
        if ($mail->send()) {
            echo "Form details saved successfully in the database. Thank you email sent.";
        } else {
            echo "Error sending the thank you email: " . $mail->ErrorInfo;
        }
    } else {
        echo "Error saving form details: " . mysqli_error($conn);
    }
      
    } else{
    echo "Error: " . mysqli_error($conn);
  }

}
}
?>
<html>
<head>     
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js">
    </script>
    <style>
            button {
                background-color: #5c2d91;
                color: #fff;
            }
            .text-center{
                text-align: center;
            }
            img{
            height :20rem;
            weight :20rem;
                        
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top:4rem;
            
           }
           p{
            font-size : 25px;
            text-align :center;
            color : blue;
        }
    </style>
</head>
<body>
    <div class = "button">
        <img src ="../img/blueticl.png">
        <p>Confirm your payment</P>
        <!-- Place this where you need payment button -->
        <div class="text-center">
            <button id="payment-button">Pay with Khalti</button>
        <!-- Place this where you need payment button -->
        <!-- Paste this code anywhere in you body tag -->
        </div>
    </div>
    <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_dc74e0fd57cb46cd93832aee0a390234",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
                ],
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({amount:<?php if (isset($_POST['Amount'])){
    $amount=$_POST['Amount']*100;
    echo $amount;}
    else echo 100000;?>});
        }
    </script>
    <!-- Paste this code anywhere in you body tag -->
    ...
</body>
</html>