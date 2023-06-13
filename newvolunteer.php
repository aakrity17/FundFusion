<?php
include "database/Db_Connection.php";
include "admin/routeconfig.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the values from the login form
    $requestedVolunteerName = $_REQUEST['full_name'];
    $requestedVolunteerEmail = $_REQUEST['email_address'];
    $requestedVolunteerPhone = $_REQUEST['phone_number'];
    $requestedVolunteerOccupation = $_REQUEST['occupation'];

    $sql = "INSERT INTO volunteer (full_name, email_address, phone_number, occupation) VALUES ('$requestedVolunteerName','$requestedVolunteerEmail','$requestedVolunteerPhone', '$requestedVolunteerOccupation')";
    if(mysqli_query($conn, $sql)){
        header('Location: '. $site_url .'index.php?status=success');
    }
    mysqli_close($conn);
}
?>