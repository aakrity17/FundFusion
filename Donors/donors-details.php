<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    .navbar-nav {
      margin-left: auto;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../index.php">FundFusion</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#personal-info" onclick="displaySection('personal-info')"><i class="fas fa-user"></i>Personal Information</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#membership-info" onclick="displaySection('membership-info')"><i class="fas fa-certificate"></i>Membership Information</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#donation-history" onclick="displaySection('donation-history')"><i class="fas fa-donate"></i>Donation History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sponsorships" onclick="displaySection('sponsorships')"><i class="fas fa-hand-holding-heart"></i>Sponsorships</a>
        </li>
      </ul>
    </div>7
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="tab-content">
          <div class="tab-pane fade show active" id="personal-info">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center; padding-top:50px;">Personal Information</h5>
                <?php
                session_start();
                include "../admin/routeconfig.php";
                include "../database/Db_Connection.php";

                if (isset($_SESSION['email'])) {
                  if (isset($_GET['title'])) {
                    $title = urldecode($_GET['title']);
                  } else {
                    $title = '';
                  }

                  // Sanitize and validate the $title variable
                  $title = mysqli_real_escape_string($conn, $title); // Assuming $conn is the database connection variable

                  $sql = "SELECT * FROM user WHERE email='$title'";
                  $result = mysqli_query($conn, $sql);

                  if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                      $row = mysqli_fetch_assoc($result);
                      $address = $row['address'];
                      $contact = $row['Contact'];
                      $name = $row['name'];
                      $id = $row['id'];

                      // Display personal details
                      echo "<p>ID: $id</p>";
                      echo "<p>Email: $title</p>";
                      echo "<p>Phone Number: $contact</p>";
                      echo "<p>Address: $address</p>";
                    }
                  } else {
                    // Handle the query error
                    echo "Error: " . mysqli_error($conn);
                  }
                } else {
                  // Handle the case when the 'email' session variable is not set
                  echo "Session email not set.";
                }

                // Close the database connection
                mysqli_close($conn);
                ?>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="membership-info">
          <h3 class="card-title" style="text-align: center; padding-top:50px;">Membership Information</h3>

            <?php 
            include "../database/Db_Connection.php";

            $sql = "SELECT * FROM donors WHERE email='$title' AND  (cause='Gold Membership' OR cause='Silver Membership' OR cause='Platinium Membership')";
            $result = mysqli_query($conn, $sql);

            
            while ($row = mysqli_fetch_assoc($result)) {
                $registeredDate = $row['date'];
                $expiryDate = date('Y-m-d', strtotime('+1 year', strtotime($registeredDate)));
                $daysRemaining = ceil((strtotime($expiryDate) - time()) / (60 * 60 * 24));
                if($daysRemaining>=365){
                  $daysRemaining=364;
                }

            ?>

            <div class="card">
            <div class="card-body" style="font-size: 20px;">
  <p><strong>Info:</strong><?php echo $row['name']; ?> </p>
  <p><strong>Membership Type:</strong><?php echo $row['cause']; ?> </p>
  <p><strong>Membership Expiry Date:</strong> <?php echo $expiryDate; ?></p>
  <p><strong>Account Created Date:</strong> <?php echo $registeredDate; ?></p>
  <p><strong>Days Remaining:</strong> <?php echo $daysRemaining; ?></p>
</div>

            </div>
            <?php
            }
            ?>
          </div>


          <div class="tab-pane fade" id="donation-history">
          <h3 class="card-title" style="text-align:center;
          padding:50px;">Donation History</h3>

            
                
                <?php
            include "../database/Db_Connection.php";

            $donationsql = "SELECT * FROM donors WHERE email='$title' AND (cause NOT IN ('Regular Sponsorsip', 'Premium Sponsorship', 'VIP Sponsorship', 'Gold Membership', 'Platinum Membership', 'Silver Membership'))";
            $res = mysqli_query($conn, $donationsql);
            if (mysqli_num_rows($res) > 0) {
              while ($rw = mysqli_fetch_assoc($res)) {
                $date = $rw['date'];

            ?>
            <div class="card">
              <div class="card-body" style="text-align: justify; padding-left:200px;">
                <p><i class="fas fa-info-circle"></i> <strong>Info:</strong> <?php echo $rw['cause']; ?></p>
                <p><i class="fas fa-calendar-alt"></i> <strong>Donation Date:</strong> <?php echo $date; ?> A.D.</p>
                <p><i class="fas fa-calendar-check"></i> <strong>Amount Donated:</strong> <?php echo $rw['amount']; ?></p>
                <p><i class="fas fa-calendar-check"></i> <strong>Membership Renewed Date:</strong> <?php echo $rw['cause']; ?></p>
                </div>
            </div>
            <?php

              }
            } else {
              echo "No donation history found.";
            }
            ?>



              
          </div>
          <!-- sponsorship section -->
          <div class="tab-pane fade" id="sponsorships">
          <?php 
            include "../database/Db_Connection.php";

            $sql = "SELECT * FROM donors WHERE email='$title' AND  (cause='Premium Sponsorship' OR cause='Regular Sponsorship' OR cause='VIP Sponsorship')";
            $result = mysqli_query($conn, $sql);

            
            while ($row = mysqli_fetch_assoc($result)) {
                $registeredDate = $row['date'];
                $expiryDate = date('Y-m-d', strtotime('+1 year', strtotime($registeredDate)));
                $daysRemaining = ceil((strtotime($expiryDate) - time()) / (60 * 60 * 24));
                if($daysRemaining>=365){
                  $daysRemaining=364;
                }

            ?>

            <div class="card">
            <div class="card-body" style="font-size: 20px;">
  <p><strong>Info:</strong><?php echo $row['name']; ?> </p>
  <p><strong>Sponsor Type:</strong><?php echo $row['cause']; ?> </p>
</div>

            </div>
            <?php
            }
            if ($result->num_rows == 0){
              ?>
              <h1>No Sponsorship Available</h1>
              <?php


            }
            
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
    function displaySection(sectionId) {
      $('.nav-link').removeClass('active');
      $(`a[href="#${sectionId}"]`).addClass('active');
      $('.tab-pane').removeClass('show active');
      $(`#${sectionId}`).addClass('show active');
    }
  </script>
</body>

</html>