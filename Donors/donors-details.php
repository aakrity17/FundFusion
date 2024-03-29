<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    .navbar-nav {
      margin-left: auto;
    }

    .profile-picture img {
      max-width: 200px;
      max-height: 200px;
      border-radius: 50%;
      margin-left: 400px;
      margin-bottom: 50px;
      margin-top: 50px;

    }

    .profile-info {
      text-align: center;
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
    </div>
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
                  $title = mysqli_real_escape_string($conn, $title); 

                  $sql = "SELECT * FROM user WHERE id='$title'";
                  $result = mysqli_query($conn, $sql);

                  if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                      $row = mysqli_fetch_assoc($result);
                      $name = $row['name'];
                      $address = $row['address'];
                      $contact = $row['Contact'];
                      $email = $row['email'];
                      $id = $row['id'];
                      $profilePicturePath = '../img/' . $row['profile_picture']; 
                ?>
                      <div class="profile-details">
                        <div class="profile-picture">
                          <a href="update_picture.php?id=<?php echo urlencode($title); ?>">
                            <img src="<?php echo $profilePicturePath; ?>" alt="Profile Picture">
                          </a>
                        </div>
                        <div class="profile-info">
                          <p>ID: <?php echo $id; ?></p>
                          <p>Name: <?php echo $name; ?></p>
                          <p>Email: <?php echo $email; ?></p>
                          <p>Phone Number: <?php echo $contact; ?></p>
                          <p>Address: <?php echo $address; ?></p>
                        </div>
                        <div style="text-align: center;">
                          <button> <a href="editDetails.php?email=<?php echo urlencode($title); ?>">
                              Edit your Profile Details</button></a>
                          <button> <a href="changePassword.php?email=<?php echo urlencode($title); ?>">
                              Change Password</button></a>
                              <button> <a href="otherDetails.php?email=<?php echo urlencode($title); ?>">
                              See other Details</button></a>

                        </div>
                      </div>
                <?php
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
    <h3 class="card-title" style="text-align: center; padding-top: 50px;">Membership Information</h3>

    <?php
    include "../database/Db_Connection.php";


    $sql = "SELECT mri.*, u.name, u.address, m.membership_type, m.amount
    FROM membership_register_info mri
    INNER JOIN user u ON mri.user_id = u.id
    INNER JOIN membership m ON mri.membership_id = m.id
    WHERE mri.user_id = $title";



$result = mysqli_query($conn, $sql);
if (!$result) {
echo "SQL Error: " . mysqli_error($conn);
}
if(mysqli_num_rows($result)>0){
while ($row = mysqli_fetch_assoc($result)) {
$registeredDate = $row['date'];
$expiryDate = date('Y-m-d', strtotime('+1 year', strtotime($registeredDate)));
$daysRemaining = ceil((strtotime($expiryDate) - time()) / (60 * 60 * 24));
if ($daysRemaining >= 365) {
    $daysRemaining = 364;
}
?>

<div class="card">
    <div class="card-body" style="font-size: 20px;">
        <p><strong>Name:</strong> <?php echo $row['name']; ?> </p>
        <p><strong>Address:</strong> <?php echo $row['address']; ?> </p>
        <p><strong>Membership Type:</strong> <?php echo $row['membership_type']; ?> </p>
        <p><strong>Membership Amount:</strong> <?php echo $row['amount']; ?> </p>
        <p><strong>Membership Expiry Date:</strong> <?php echo $expiryDate; ?></p>
        <p><strong>Account Created Date:</strong> <?php echo $registeredDate; ?></p>
        <p><strong>Days Remaining:</strong> <?php echo $daysRemaining; ?></p>
    </div>
</div>
<?php
}

}else{
  echo "<p?>No data found.</p>";
}
?>
         </div>

<!-- Donation Section -->

          <div class="tab-pane fade" id="donation-history">
            <h3 class="card-title" style="text-align:center;
          padding:50px;">Donation History</h3>



            <?php
            include "../database/Db_Connection.php";

            $donationsql = "SELECT * FROM donors WHERE uid='$title'";
            $res = mysqli_query($conn, $donationsql);
            if (mysqli_num_rows($res) > 0) {
              while ($rw = mysqli_fetch_assoc($res)) {
                $date = $rw['date'];

            ?>
                <div class="card">
                  <div class="card-body" style="text-align: justify; padding-left:200px;">
                    <p><i class="fas fa-info-circle"></i> <strong>Info:</strong> <?php
                    $did=$rw['donation_id'];
                    $dsql="SELECT donation_name FROM donation WHERE id='$did'";
                    $rs = mysqli_query($conn, $dsql);
                       if (mysqli_num_rows($res) > 0) {
                        $drw = mysqli_fetch_assoc($rs);
                        $donation_name=$drw['donation_name'];

                       }
                       echo $donation_name;

                    ?></p>
                    <p><i class="fas fa-calendar-alt"></i> <strong>Donation Date:</strong> <?php echo $date; ?> A.D.</p>
                    <p><i class="fas fa-calendar-check"></i> <strong>Amount Donated:</strong> <?php echo $rw['amount']; ?></p>
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

            $sql = "SELECT mri.*, u.name, u.address, m.type, m.amount
            FROM sponsorship_register_info mri
            INNER JOIN user u ON mri.user_id = u.id
            INNER JOIN sponsorship m ON mri.sponsorship_id = m.id
            WHERE mri.user_id = $title";          
              $result = mysqli_query($conn, $sql);


            while ($row = mysqli_fetch_assoc($result)) {
              $registeredDate = $row['date'];
              $expiryDate = date('Y-m-d', strtotime('+1 year', strtotime($registeredDate)));
              $daysRemaining = ceil((strtotime($expiryDate) - time()) / (60 * 60 * 24));
              if ($daysRemaining >= 365) {
                $daysRemaining = 364;
              }

            ?>

<div class="card">
    <div class="card-body" style="font-size: 20px;">
        <p><strong>Name:</strong> <?php echo $row['name']; ?> </p>
        <p><strong>Address:</strong> <?php echo $row['address']; ?> </p>
        <p><strong>Sponsorship Type:</strong> <?php echo $row['type']; ?> </p>
        <p><strong>Sponsorship Amount:</strong> <?php echo $row['amount']; ?> </p>
        <p><strong>Account Created Date:</strong> <?php echo $registeredDate; ?></p>
        <p><strong>Days Remaining:</strong> <?php echo $daysRemaining; ?></p>
    </div>
</div>
            <?php
            }
            if ($result->num_rows == 0) {
            ?>
              <h1>No Sponsorship Available</h1>
            <?php


            }

            ?>
          </div>
          <!-- Rest of the code... -->
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