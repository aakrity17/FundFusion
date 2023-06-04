<?php
include "../../database/Db_Connection.php";
include "../routeconfig.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the values from the login form
    $requestedEventName = $_REQUEST['event_name'];
    $requestedEventDuration = $_REQUEST['event_duration'];
    $requestedEventDescription = $_REQUEST['event_description'];

    $filename = $_FILES["event_image_url"]["name"];
    $tempname = $_FILES["event_image_url"]["tmp_name"];
    $folder = "../../img/events/" . $filename;

    $sql = "INSERT INTO events (event_name, event_image_url, event_description, event_duration) VALUES ('$requestedEventName','$filename','$requestedEventDescription', '$requestedEventDuration')";
    move_uploaded_file($tempname, $folder);
    if(mysqli_query($conn, $sql)){
        header('Location: '. $site_url .'admin/events/create-event.php?status=success');
    }else{
        header('Location: '. $site_url .'admin/events/create-event.php');
    }
    mysqli_close($conn);
    
}

?>
