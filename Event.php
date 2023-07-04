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
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!--Main CSS-->
<link rel="stylesheet" href="css/style.css">

<!--fontawesome-->
<script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
<!--google Fonts-->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<!--Animate.css--->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />

</head>
<body style="overflow-x: hidden;">
     <?php
@include('./Index/indexnav.php')
?>
    <div class="event-banner">
        <h1> Events </h1>
    </div>
    <div class="row">
        <?php 
     foreach( $records as $data ) 
        {
            echo '<div class="col-4 event-card-layout">
            <div class="card" style="width:26rem;">
                <img class="card-img-top event-card-image" src="img/events/'.$data['event_image_url'].'">
    
                    <h5 class="card-title">'.$data['event_name'].'</h5>
                    <p class="card-text">'.$data['event_description'].'</p>
                    <a href="#" class="btn btn-primary">Donate</a>
                </div>
            </div>';
        }
        ?>
</div>
    </body>