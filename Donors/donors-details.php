<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    .navbar-nav {
      margin-left: auto;
    }

    /* .profile-details {
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
    } */

    .profile-picture img {
      max-width: 200px;
      max-height: 200px;
      border-radius: 50%;
      margin-left: 400px;
      margin-bottom: 50px;
      margin-top: 50px;

    }
    .profile-info{
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
                      $profilePicturePath = '../img/' . $row['profile_picture']; // Replace with the actual path to the profile pictures directory
                ?>
                      <div class="profile-details">
                        <div class="profile-picture">
                          <a href="update_picture.php?email=<?php echo urlencode($title); ?>">
                            <img src="<?php echo $profilePicturePath; ?>" alt="Profile Picture">
                          </a>
                        </div>
                        <div class="profile-info">
                          <p>ID: <?php echo $id; ?></p>
                          <p>Email: <?php echo $title; ?></p>
                          <p>Phone Number: <?php echo $contact; ?></p>
                          <p>Address: <?php echo $address; ?></p>
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
          <!-- Rest of the code... -->
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
