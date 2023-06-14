<?php
include "../admin/routeconfig.php";
include "../database/Db_Connection.php";
session_start();

if (isset($_SESSION['name']) && isset($_SESSION['username'])) {
    // Retrieve user details from the session
    $name = $_SESSION['name'];
    $username = $_SESSION['username'];

    if (isset($_GET['title'])) {
        $title = urldecode($_GET['title']);
    } else {
        $title = '';
    }

    // Fetch user details from the database
    $sql = "SELECT * FROM user WHERE name = '$name' AND username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            // Fetch the data
            $row = mysqli_fetch_assoc($result);
            // Access the values
            $address = $row['address'];
            $contact = $row['Contact'];
            $email = $row['email'];
        } else {
            // No matching records found
            echo "No matching records found.";
        }
        mysqli_free_result($result); // Free the result set
    } else {
        // Query execution failed
        echo "Error executing the query: " . mysqli_error($conn);
    }
} else {
    header('Location:../User/userlogin.php');
    exit();
}

// Get the user-entered amount
$amount = isset($_POST['Amount']) ? floatval($_POST['Amount']) : 0;

// Calculate the values
$psc = 0;
$pdc = 0;
$txAmt = 0;
$tAmt = $amount + $psc + $pdc + $txAmt;

// Set the eSewa API endpoint
$esewaEndpoint = 'https://uat.esewa.com.np/epay/main';

// Generate the form action URL with the eSewa endpoint
$formAction = $esewaEndpoint . '?amt=' . $amount . '&psc=' . $psc . '&pdc=' . $pdc . '&txAmt=' . $txAmt . '&tAmt=' . $tAmt . '&scd=EPAYTEST&pid=ee2c3ca1-696b-4cc5-a6be-2c40d929d453&su=http://merchant.com.np/page/esewa_payment_success?q=su&fu=http://merchant.com.np/page/esewa_payment_failed?q=fu';

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
    <?php include('../Index/indexnav.php') ?>
    <section class="main">
        <div class="donation-container">
            <h2>Together we can Make!!</h2>
            <form class="donation-form" action="<?php echo $formAction; ?>" method="POST">
                <div class="form-control">
                    <input type="text" value="<?php echo $name; ?>" name="name">
                    <i class="fas fa-user"></i>
                </div>

                <div class="form-control">
                    <input type="text" value="<?php echo $address; ?>" name="address">
                    <i class="fas fa-user"></i>
                </div>

                <div class="form-control">
                    <input type="text" value="<?php echo $contact; ?>" name="contact">
                    <i class="fas fa-user"></i>
                </div>

                <div class="form-control">
                    <input type="text" value="<?php echo $email; ?>" name="email">
                    <i class="fas fa-user"></i>
                </div>

                <div class="form-control">
                    <input type="text" value="<?php echo $title; ?>" name="donation_title">
                    <i class="fas fa-user"></i>
                </div>

                <div class="form-control">
                    <input type="number" placeholder="1000" name="Amount" value="<?php echo $amount; ?>">
                    <i class="fas fa-lock"></i>
                </div>

                <button type="submit" class="submit">Donate</button>
            </form>
        </div>
    </section>
</body>
</html>
