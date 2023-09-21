<?php
// starts a PHP session. It is used to manage user sessions and store session data.
// session_start();
// Check if the user is logged in by checking if the session variables "name" and "username" are set.
if (isset($_SESSION['name']) && isset($_SESSION['username'])) {
  $name = $_SESSION['name'];
  $email = $_SESSION['username'];
}

include "database/Db_Connection.php";
include "admin/routeconfig.php";

$sql = "SELECT * FROM donation";
$records = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donations Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/donation.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- javascript for the icons in navbar -->
  <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>


</head>

<body>
  <?php include './Index/indexnav.php'; ?>

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
// Prepare the SQL query
$query = "SELECT SUM(amount) as total_amount FROM donors WHERE donation_id = ?";
$stmt = $conn->prepare($query);

// Bind the donation_id parameter
$donation_id = $data['id'];
$stmt->bind_param("i", $donation_id);

// Execute the query
$stmt->execute();

// Bind the result
$stmt->bind_result($total_amount);

// Fetch the total amount
$stmt->fetch();

// Calculate the donation progress percentage
$percent = ($total_amount / $data['donation_target']) * 100;

// Close the statement
$stmt->close();
?>


                <div class="progress-bar" style="width: <?php echo $percent; ?>%;"><?php echo intval($percent) . "%"; ?></div>
              </div>

              <br>
              <a href="./Donors/paymentGateway.php?title=<?php echo urlencode($data['id']); ?>" class="btn btn-primary">Donate</a>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#donationModal<?php echo $data['id']; ?>">Read More</button>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="donationModal<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="donationModalLabel<?php echo $data['id']; ?>" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="donationModalLabel<?php echo $data['id']; ?>">Donation Description</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <?php echo $data['donation_description']; ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <br><br><br>
  
            <?php include './Footer/indexFooter.php' ?>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
