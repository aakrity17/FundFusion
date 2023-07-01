<?php
// starts a PHP session. It is used to manage user sessions and store session data.
session_start();
// Check if the user is logged in by checking if the session variables "name" and "username" are set.
if (isset($_SESSION['name']) && isset($_SESSION['username'])) {
  $name = $_SESSION['name'];
  $email = $_SESSION['username'];
}

include "database/Db_Connection.php";
include "admin/routeconfig.php";


$sql = "SELECT * from donation";
$records = $conn->query($sql);

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donations Page</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
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
    <?php foreach ($records as $data) : ?>
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <img class="card-img-top" src="img/donation/<?php echo $data['donation_image_url']; ?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo $data['donation_name']; ?></h5>
            <p class="card-text card-description"><?php echo $data['donation_description']; ?></p>
            <div class="progress">
              <?php
              // Assuming you have established a database connection using mysqli

              // Prepare the SQL query
              $query = "SELECT amount FROM donors WHERE cause = ?";
              $stmt = mysqli_prepare($conn, $query);

              // Bind the donation_title parameter
              $donation_title = $data['donation_name'];
              mysqli_stmt_bind_param($stmt, "s", $donation_title);

              // Execute the query
              mysqli_stmt_execute($stmt);

              // Bind the result
              mysqli_stmt_bind_result($stmt, $amt);

              // Fetch the amounts and calculate the total
              $total_amt = 0;
              while (mysqli_stmt_fetch($stmt)) {
                $total_amt += $amt;
              }
              $percent = ($total_amt / $data['donation_target']) * 100;

              // Close the statement
              mysqli_stmt_close($stmt);
              ?>

              <div class="progress-bar" style=" width: <?php echo $percent; ?>%;"> <?php echo $percent; ?></div>
            </div>

            <br>
            <a href="./Donors/paymentGateway.php?title=<?php echo urlencode($data['donation_name']); ?>" class="btn btn-primary">Donate</a>
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