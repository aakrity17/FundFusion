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
            // $essential = $row['essential'];
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
            <h2>Thank you for registering</h2>
            <form class="essential-form" action="essentialdb.php" method="POST">
                

                


                <a href="../index.php">Go to Homepage</a>
            </form>
        </div>
    </section>
</body>
</html>

