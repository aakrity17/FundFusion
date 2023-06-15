<?php
session_start();
// Check if the user is logged in
if (isset($_SESSION['name']) && isset($_SESSION['username'])) {
    $name = $_SESSION['name'];
    $email = $_SESSION['username'];

}

include "database/Db_Connection.php";
include "admin/routeconfig.php";
// include "admin/sessioncheck.php";
// session_start();

// $sql = "SELECT * from sponsor";
// $records = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sponsorship Page</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="css/sponsorship.css">
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

<!-- card-layout for sponsorship options -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- fontsawesome cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

 <!-- Javascript for sponsorship cards from bootstrap -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 
  <?php
@include('./Index/indexnav.php')
?>

<div class="sponsorship-banner">
    <h1>Sponsorships</h1>
  </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card premium-card">
                <div class="card-header bg-secondary text-white">
                    Premium Sponsorship
                </div>
                <img src="./img/premium.jpg" class="card-img-top" alt="premium">
                <div class="card-body">
                    <h5 class="card-title">About Premium Sponsorship</h5>
                    <p class="card-text">Monthly Contribution: USD 120 - USD 250</p>
                    <p class="card-text"> The premium sponsorship facilitates the children with an opportunity to study in a private English-medium school in a metropolitan area. This sponsorship package has the widest coverage in supporting a child’s education, including tuition, meals, hostel accommodation, uniform, regular health check-ups, etc. Children who are talented and stand out from the rest are nominated in this category.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card regular-card">
                <div class="card-header bg-warning text-white">
                    Regular Sponsorship
                </div>
                <img src="./img/Regular1.png" class="card-img-top" alt="regular">
                <div class="card-body">
                    <h5 class="card-title">About Regular Sponsorship</h5>
                    <p class="card-text"> Monthly Contribution: USD 20</p>
                    <p class="card-text"> This is a basic sponsorship that contributes to the child’s education in the village school – most likely a government school – that s/he is presently enrolled in. A monthly sponsorship of USD 20 sufficiently covers the tuition, stationery, and uniform at state-run school. Since the education provided in government schools cannot always compete with that in private schools, we highly suggest considering the Regular Sponsorship as the last option.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card vip-card">
                <div class="card-header bg-danger text-white">
                    VIP Sponsorship
                </div>
                <br><img src="./img/Vip.png" class="card-img-top" alt="special">
                <div class="card-body">
                    <h5 class="card-title">About VIP Sponsorship</h5>
                    <p class="card-text">Monthly Contribution: USD 40 - USD 70</p>
                    <p class="card-text">The VIP or the special sponsorship covers the education of the child in an English-medium school in a metropolitan area, but does not include accommodation and meals. The monthly contribution of USD 40 to USD 70 covers tuition, uniform, and regular health check-ups. This sponsorship requires that the child has a relative in a metropolitan area (ex. Kathmandu, Pokhara, Gorkha, etc.) where s/he will be staying, thus obviating the need for the Special Sponsorship to cover accommodation and food.</p>
                </div>
            </div>
        </div>
    </div>

   

    
<!-- <div class="donation-options"><br>
    <h3 class="donation-option">Donation Options</h3>
    <h5 class="text-line">We accept cash and online payments.</h5>
    <br><br><br>

    <div class="layers">
    <i class="fa-solid fa-circle-dollar-to-slot fa-bounce" type="submit"><br>DONATE</i>
      <p class="text-in">Help us, help others.</p><br>

      <i class="fa-solid fa-hand fa-bounce" type="submit"><br> VOLUNTEER</i>
      <p class="text-in"> Give us a hand. </p><br>

      <i class="fa-solid fa-handshake fa-beat" type="submit"><br> SPONSORS</i>
      <p class="text-in"> Help the students. </p>

    <div> -->
    
</div>

<br><br><br>



<br><br><br>
  <footer>
    <p>&copy; 2023 FundFusion</p>
  </footer>

  <script src="js/Sponsorship.js" defer></script>
</body>
</html>
