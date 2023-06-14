<?php
include "../../database/Db_Connection.php";
include "../routeconfig.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the values from the login form
    $requestedProjectName = $_REQUEST['title'];
    $requestedProjectVideoUrl = $_REQUEST['video_url'];
    $requestedProjectDescription = $_REQUEST['descriptions'];
    $requestedProjectStartDate = $_REQUEST['p_start_date'];
    $requestedProjectEndDate = $_REQUEST['p_end_date'];

    $filename = $_FILES["thumbnail"]["name"];
    $tempname = $_FILES["thumbnail"]["tmp_name"];
    $folder = "../../img/projects/" . $filename;

    $sql = "INSERT INTO projects (title, thumbnail, video_url, descriptions, p_start_date, p_end_date ) VALUES ('$requestedProjectName','$filename','$requestedProjectVideoUrl','$requestedProjectDescription','$requestedProjectStartDate', '$requestedProjectEndDate')";
    move_uploaded_file($tempname, $folder);
    if(mysqli_query($conn, $sql)){
        header('Location: '. $site_url .'admin/projects/create-project.php?status=success');
    }else{
        header('Location: '. $site_url .'admin/projects/create-project.php');
    }
    mysqli_close($conn);
    
}

?>
