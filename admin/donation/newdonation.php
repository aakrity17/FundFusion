<?php
include "../../database/Db_Connection.php";
include "../routeconfig.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the values from the login form
    $requestedDonationId = $_REQUEST['id'];
    $requestedDonationName = $_REQUEST['donation_name'];
    $requestedDonationTarget = $_REQUEST['donation_target'];
    $requestedDonationDescription = $_REQUEST['donation_description'];
    $requestedDonationProgress = $_REQUEST['donation_progress'];
    $requestedDonationType = $_REQUEST['donation_type'];

    $filename = $_FILES["donation_image_url"]["name"];
    $tempname = $_FILES["donation_image_url"]["tmp_name"];
    $folder = "../../img/donation/" . $filename;

    $sql = "INSERT INTO donation (id, donation_name, donation_image_url, donation_description, 
    donation_target, donation_progress, donation_type) VALUES ('$requestedDonationId' ,
    '$requestedDonationName','$filename','$requestedDonationDescription', '$requestedDonationTarget', 
    '$requestedDonationProgress', '$requestedDonationType')";
    move_uploaded_file($tempname, $folder);
    if(mysqli_query($conn, $sql)){
        header('Location: '. $site_url .'admin/donation/create-donation.php?status=success');
    }else{
        header('Location: '. $site_url .'admin/donation/create-donation.php');
    }
    mysqli_close($conn);
    
}
?>