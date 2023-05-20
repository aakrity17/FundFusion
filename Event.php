<?php
include "database/Db_Connection.php";
$sql = "SELECT * from events";
$records = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/Event.css" >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <div class="event-banner">
        <h1> Events </h1>
    </div>
    <hr/>
    <div class="container-fluid">
    <div class="row">
        <?php 
        foreach( $records as $data ) 
        {
            echo '<div class="col-4 event-card-layout">
            <div class="card" style="width:26rem;">
                <img class="card-img-top event-card-image" src="img/events/'.$data['event_image_url'].'">
                <div class="card-body">
                    <h5 class="card-title">'.$data['event_name'].'</h5>
                    <p class="card-text">'.$data['event_description'].'</p>
                    <a href="#" class="btn btn-primary">Donate</a>
                </div>
            </div>
        </div>';
        }
        ?>
        
        
    </div>

    
