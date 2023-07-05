<?php
include "../../database/Db_Connection.php";
include "../routeconfig.php";


    if(isset($_POST['update']))
    {	
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $name = mysqli_real_escape_string($conn, $_POST['donation_name']);
        // $type = mysqli_real_escape_string($conn, $_POST['donation_type']);
        $progress = mysqli_real_escape_string($conn, $_POST['donation_progress']);
        $target = mysqli_real_escape_string($conn, $_POST['donation_target']);
       // $filename = ($conn, $_POST['donation_image_url']);
        $description = mysqli_real_escape_string($conn, $_POST['donation_description']);
        
        $res=mysqli_query($conn,"SELECT* from donation WHERE id='" . $_POST['id'] . "'");
        if($row=mysqli_fetch_array($res)) 
        {
        $deleteimage=$row['donation_image_url']; 
        }
        $folder="../../img/donation/";
        unlink($deleteimage);

        $filename = $_FILES["donation_image_url"]["name"];
        $tempname = $_FILES["donation_image_url"]["tmp_name"];
        $folder = "../../img/donation/" . $filename;
        $result = mysqli_query($conn, "UPDATE donation SET donation_name='$name', donation_progress='$progress', donation_target='$target', donation_image_url='$filename', donation_description='$description' WHERE id=$id");
        move_uploaded_file($tempname, $folder);
        
        header('Location: '. $site_url .'admin/donation/edit-donation.php?id='.$id.'&status=success');
    }

?>