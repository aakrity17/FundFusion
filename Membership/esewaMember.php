<?php
include "../admin/routeconfig.php";
include "../database/Db_Connection.php";
session_start(); 
if (isset($_SESSION['name'])) {

    if (isset($_GET['title'])) {
        $title = urldecode($_GET['title']);
    } else {
        $title = '';
    }

    $name = $_SESSION['name'];
    $sql = "SELECT * FROM user WHERE name = '$name'";
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



    $sql2 = "SELECT * FROM Membership WHERE id = '$title'";
    $result2 = mysqli_query($conn, $sql2);
    if ($result2) {
        if (mysqli_num_rows($result2) > 0) {
            // Fetch the data
            $row2 = mysqli_fetch_assoc($result2);
            // Access the values
            $donation_name = $row2['membership_type'];
            $donation_amount = $row2['amount'];

         
        } else {
            // No matching records found
            echo "No matching records found.";
        }
        mysqli_free_result($result2); // Free the result set
    } else {
        // Query execution failed
        echo "Error executing the query: " . mysqli_error($conn);
    }   
} else {
    header('Location:../User/userlogin.php');
    exit();
}
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
    <!-- Main CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    @include('../Index/indexnav.php')
    ?>

    <section class="main">
        <div class="donation-container">
            <h2>Together we can Make!!</h2>
            <form class="donation-form" action="toMemberEsewa.php" method="POST">
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

                <div class="form-control" >
                    <input type="text" value="<?php echo $donation_name; ?>" name="donation_title"  readonly>
                    <i class="fas fa-user"></i>
                </div>

                <div class="form-control" hidden>
                    <input type="text" value="<?php echo $title; ?>" name="membership_id" >
                    <i class="fas fa-user"></i>
                </div>

                <div class="form-control">
                    <input type="number" value="<?php echo $donation_amount; ?>" name="Amount" readonly>
                    <i class="fas fa-lock"></i>
                </div>
                <button type="submit" class="submit" name="submit" value="submit">Donate</button>
            </form>
        </div>
    </section>
</body>
</html>