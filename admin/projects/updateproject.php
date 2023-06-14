<?php
include "../../database/Db_Connection.php";
include "../routeconfig.php";


    if(isset($_POST['update']))
    {	
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $name = mysqli_real_escape_string($conn, $_POST['title']);
        $videoUrl = mysqli_real_escape_string($conn, $_POST['video_url']);
        $description = mysqli_real_escape_string($conn, $_POST['descriptions']);
        $startDate = mysqli_real_escape_string($conn, $_POST['p_start_date']);
        $endDate = mysqli_real_escape_string($conn, $_POST['p_end_date']);
        
        $res=mysqli_query($conn,"SELECT* from projects WHERE id='" . $_POST['id'] . "'");
        
        if($row=mysqli_fetch_array($res)) 
        {
            $deleteimage=$row['thumbnail']; 
        }
        $folder="../../img/projects/";
        unlink($folder.$deleteimage);

        $filename = $_FILES["thumbnail"]["name"];
        $tempname = $_FILES["thumbnail"]["tmp_name"];
        $folder = "../../img/projects/" . $filename;

        $result = mysqli_query($conn, "UPDATE projects SET title='$name',thumbnail='$filename', video_url='$videoUrl',descriptions='$description', p_start_date='$startDate', p_end_date='$endDate' WHERE id=$id");
        move_uploaded_file($tempname, $folder);
        
        header('Location: '. $site_url .'admin/projects/edit-projects.php?id='.$id.'&status=success');
    }

?>