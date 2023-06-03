<?php
include "database/Db_Connection.php";
$sql = "SELECT * from donation";
$records = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Donations Page</title>
	<link rel="stylesheet" href="css/Donation.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="Donation.js"></script>
</head>
<body>
  
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="Event.php">Events</a></li>
			<li><a href="donation.php">Donations</a></li>
		</ul>

        <div class="event-banner">
        <h1> Donations </h1>
    </div>
    <hr/>
    <div class="container-fluid">
    <div class="row">
<div class="col-3">    
    <div class="card">
        <img class="card-img-top" src="https://images.unsplash.com/photo-1604275689235-fdc521556c16?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Donate for Flood Victims</h5>
            <p class="card-text">Help the recent flood victims to make their lifes better. Donate now to make someone's life liveable.</p>
            <div class="progress">
                <div class="progress-bar" style="width: 50%;">50%</div>
            </div>
            <a href="#" class="btn">Donate</a>
        </div>
    </div>
</div>

<?php 
        foreach( $records as $data ) 
        {
            echo '<div class="col-4 donation-card-layout">
            <div class="card" style="width:26rem;">
                <img class="card-img-top donation-card-image" src="img/donation/'.$data['donation_image_url'].'">
    
                    <h5 class="card-title">'.$data['donation_name'].'</h5>
                    <p class="card-text">'.$data['donation_description'].'</p>
                    <p class="progress-bar" role="progressbar" style="width: '.$data
                    ['donation_progress'].'%;" aria-valuenow="'.$data['donation_progress'].'%" 
                    aria-valuemin="0" aria-valuemax="100">'.$data['donation_progress'].'
                    <a href="#" class="btn">Donate</a>
                </div>
            </div>
        </div>';
        }
        ?>
	

  



	<br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
		<p><center>FundFusion &copy; 2023</center> </p>
	</footer>
</body>
</html>
