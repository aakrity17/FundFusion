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

 
  <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>

    <!-- External css file  -->
  <link rel="stylesheet" href="css/sponsorship.css">

<!--Main CSS-->
<link rel="stylesheet" href="css/style.css">


<!-- card-layout for sponsorship options -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>
<body>

 
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



<br>



<div class="container-1">
  <div class="buttons">
    <a href="./buttondirect/sponsorform.php?title=<?php echo "Premium Sponsorship"; ?>" class="btn btn-primary">Register for Premium</a>
    <a href="./buttondirect/sponsorform.php?title=<?php echo "Regular Sponsorship"; ?>" class="btn btn-primary">Register for Regular</a>
    <a href="./buttondirect/sponsorform.php?title=<?php echo "VIP Sponsorship"; ?>" class="btn btn-primary">Register for VIP</a>
  </div>
</div>


<br><br><br>

  <footer>
    <p>&copy; 2023 FundFusion</p>
  </footer>

  <script src="js/Sponsorship.js" defer></script>
</body>
</html>
