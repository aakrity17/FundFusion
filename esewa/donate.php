<?php
include "../admin/routeconfig.php";
include "../database/Db_Connection.php";

session_start(); 
if (isset($_SESSION['name']) && isset($_SESSION['username'])) {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];

}
else{
    header('Location:../User/userlogin.php');
}

// Check if the user is logged in and the session variable is set
// if (isset($_SESSION['email'])) {
//     $email = $_SESSION['email'];

   
// }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/donationEsewa.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
 <!--Main CSS-->
 <link rel="stylesheet" href="../css/style.css">

<!--fontawesome-->
<script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
<!--google Fonts-->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

</head>
<body>
    <?php
@include('../Index/indexnav.php')
?>

            <div class="donation-container">
                <h2>Together we can Make!!</h2>
            <form class="donation-form" action="https://uat.esewa.com.np/epay/main" method="POST">
                <div class="form-control">
                    <input type="text" value="<?php echo" $name" ?>" name="name">
                    <i class="fas fa-user"></i>
                </div>

                <div class="form-control" >
                    <input type="text" value="<?php echo" $address" ?>" name="address">
                    <i class="fas fa-user"></i>
                </div>

                <div class="form-control">
                    <input type="text" value="<?php echo" $contact" ?>" name="contact">
                    <i class="fas fa-user"></i>
                </div>
                <!-- <div class="form-control">
                    <input type="text" value="<?php echo" $name" ?>" name="username">
                    <i class="fas fa-user"></i>
                </div> -->
                <div class="form-control">
                    <input type="text" value="<?php echo" $email" ?>" name="email">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="number" placeholder="1000" name="Amount">
                    <i class="fas fa-lock"></i>
                </div>

    <input value="100" name="tAmt" type="hidden">
    <input value="90" name="amt" type="hidden">
    <input value="5" name="txAmt" type="hidden">
    <input value="2" name="psc" type="hidden">
    <input value="3" name="pdc" type="hidden">
    <input value="EPAYTEST" name="scd" type="hidden">
    <input value="ee2c3ca1-696b-4cc5-a6be-2c40d929d453" name="pid" type="hidden">
    <input value="http://merchant.com.np/page/esewa_payment_success?q=su" type="hidden" name="su">
    <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">


                <button type="submit" class="submit">Donate</button>
            </form>
            </div>
    
</body>
</html>