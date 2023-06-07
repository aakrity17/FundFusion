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
    <h1>Donations</h1>
  </div>

  <div class="container">
    <div class="row">
      <?php foreach ($records as $data): ?>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <img class="card-img-top" src="img/donation/<?php echo $data['donation_image_url']; ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $data['donation_name']; ?></h5>
              
              <p class="card-text card-description"><?php echo $data['donation_description']; ?>
  
              <!-- <?php if (strlen($data['donation_description']) > 30) { ?>
    <button class="read-more-btn">Read More</button>
  <?php } ?> -->

              <div class="progress">
                <div class="progress-bar" style="width: <?php echo $data['donation_progress']; ?>;">
                  <?php echo $data['donation_progress']; ?>
                </div>
              </div>
              
              <br>
              <a href="#" class="btn btn-primary">Donate</a>
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
