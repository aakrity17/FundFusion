<?php
include "../sessioncheck.php";
include "../routeconfig.php";

include "../../database/Db_Connection.php";
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> | FundFusion Dashboard |</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-Df9X+loaH7pK/q/Mtx6x0gZQ0Ud3sU6lvjK0JfU9Xelrk+czb1CQTV8xGYhpuGeZIcLZMTY/QBkpejLbF9XBYg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo $site_url ?>css/Dashboard.css" />
    <link rel="stylesheet" href="<?php echo $site_url ?>css/createdonation.css" />
  </head>
  <body>
    <div class="container">
      <?php
      @include('../partials/navigation.php')
      ?>
        <div class="main">
            <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
            
            <div class="search">
                <label>
                <input type="text" placeholder="Search here" />
                <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
        </div>
        <h2>Create New Donation</h2>
        <p>Add all the details regarding donation below.</p>
        <?php
        if(isset($_GET['status'])) {
            echo '<h3 style="color:green">!!New Donation Created Successfully!!</h3>';
        }
        ?>
        <div class="containerbox">
        <form action="newdonation.php" method="POST" enctype="multipart/form-data">
            <div class="row">
            <div class="col-25">
                <label for="ename">Donation Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="donation_name" name="donation_name" placeholder="New Donation Name">
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <label for="donation_type">Donation type</label>
            </div>
            <div class="col-75">
                <label for="donation_type"></label>
                <select id="donation_type" name="donation_type">
                <option value="1">Public Charity</option>
                <option value="2">Private Foundations</option>
                <option value="3">Private Operating Foundations</option>
    </select>
            </div>
            </div>

            <div class="row">
            <div class="col-25">
                <label for="donation_progress">Donation Progress</label>
            </div>
            <div class="col-75">
                <input type="text" id="donation_progress" name="donation_progress" placeholder="Donation progress">
            </div>
            </div>

            <div class="row">
            <div class="col-25">
                <label for="donation_target">Donation Target</label>
            </div>
            <div class="col-75">
                <input type="text" id="donation_target" name="donation_target" placeholder="Donation Target Amount in dollars.">
            </div>
            </div>

            <div class="row">
            <div class="col-25">
                <label for="donation_image">Donation Image</label>
            </div>
            <div class="col-75">
                <input type="file" id="donation_image_url" name="donation_image_url">
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <label for="donation_description">Donation Description</label>
            </div>
            <div class="col-75">
                <textarea id="donation_description" name="donation_description" placeholder="Donation descripton.." style="height:200px"></textarea>
            </div>
            </div>
            <div class="row">
            <input type="submit" value="Submit">
            </div>
        </form>
        </div>
    </div>
  </body>
  <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script src="<?php echo $site_url ?>js/Dashboard.js"></script>
</html> 