<?php
include "../../database/Db_Connection.php";
include "../routeconfig.php";


    if(isset($_POST['update']))
    {	
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $name = mysqli_real_escape_string($conn, $_POST['event_name']);
        $duration = mysqli_real_escape_string($conn, $_POST['event_duration']);
        $description = mysqli_real_escape_string($conn, $_POST['event_description']);
        
        
        $res=mysqli_query($conn,"SELECT* from events WHERE id='" . $_POST['id'] . "'");
        if($row=mysqli_fetch_array($res)) 
        {
        $deleteimage=$row['event_image_url']; 
        }
        $folder="../../img/events/";
        unlink($folder.$deleteimage);

        $filename = $_FILES["event_image_url"]["name"];
        $tempname = $_FILES["event_image_url"]["tmp_name"];
        $folder = "../../img/events/" . $filename;
        $result = mysqli_query($conn, "UPDATE events SET event_name='$name',event_image_url='$filename', event_duration='$duration',event_description='$description' WHERE id=$id");
        move_uploaded_file($tempname, $folder);
        
        header('Location: '. $site_url .'admin/events/edit-events.php?id='.$id.'&status=success');
    }

?>