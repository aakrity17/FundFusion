<?php
include "database/Db_Connection.php";
$currentProjectsSql = "SELECT * from projects where p_start_date <= cast(NOW() as date) AND cast(NOW() as date) <= p_end_date;";
$currentProjectRecords = $conn->query($currentProjectsSql);

$upcomingProjectsSql = "SELECT * from projects where p_start_date >= cast(NOW() as date)";
$upcomingProjectRecords = $conn->query($upcomingProjectsSql);

$pastProjectsSql = "SELECT * from projects where p_end_date <= cast(NOW() as date)";
$pastProjectRecords = $conn->query($pastProjectsSql);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projectfa-spin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/donation.css">
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
<body>
  <?php
@include('./Index/indexnav.php')
?>

  <div class="donation-banner">
    <h1 style="border-style: groove;">Current Projects</h1>
  </div>

  <div class="container">
    <div class="row">
      <?php foreach ($currentProjectRecords as $currentData): ?>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <img class="card-img-top" src="img/projects/<?php echo $currentData['thumbnail']; ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $currentData['title']; ?></h5>
              <p class="card-text card-description"><?php echo $currentData['descriptions']; ?></p>             
              <p><strong> From: </strong><?php echo $currentData['p_start_date']; ?><strong> To: </strong> <?php echo $currentData['p_end_date']; ?></p>
              <br>
              <a href="ProjectDetail.php/?id=<?php echo $currentData['id']; ?>" class="btn btn-primary">Donate</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
 <div class="donation-banner">
    <h1 style="border-style: groove;">Upcoming Projects</h1>
  </div>

  <div class="container">
    <div class="row">
      <?php foreach ($upcomingProjectRecords as $upcomingData): ?>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <img class="card-img-top" src="img/projects/<?php echo $upcomingData['thumbnail']; ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $upcomingData['title']; ?></h5>
              <p class="card-text card-description"><?php echo $upcomingData['descriptions']; ?></p>
              <p><strong> From: </strong><?php echo $upcomingData['p_start_date']; ?><strong> To: </strong> <?php echo $upcomingData['p_end_date']; ?></p>
              <br>
              <a href="ProjectDetail.php/?id=<?php echo $upcomingData['id']; ?>" class="btn btn-primary">Donate</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="donation-banner">
    <h1 style="border-style: groove;">Past Projects</h1>
  </div>

  <div class="container">
    <div class="row">
      <?php foreach ($pastProjectRecords as $pastData): ?>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <img class="card-img-top" src="img/projects/<?php echo $pastData['thumbnail']; ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $pastData['title']; ?></h5>
              <p class="card-text card-description"><?php echo $pastData['descriptions']; ?></p>            
              <p><strong> From: </strong><?php echo $pastData['p_start_date']; ?><strong> To: </strong> <?php echo $pastData['p_end_date']; ?></p>              
              <br>
              <a href="ProjectDetail.php/?id=<?php echo $pastData['id']; ?>" class="btn btn-primary">Donate</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

<br><br><br>
  <footer>
    <p>&copy; 2023 FundFusion</p>
  </footer>

  <script src="js/donation.js" defer></script>
</body>
</html>
