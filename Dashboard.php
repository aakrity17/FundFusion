<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If the user is not logged in, redirect them to the login page
    header('Location: dashboardLogin/login.php');
    exit();
}

// If the user is logged in, display the dashboard content
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> | FundFusion Dashboard |</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-Df9X+loaH7pK/q/Mtx6x0gZQ0Ud3sU6lvjK0JfU9Xelrk+czb1CQTV8xGYhpuGeZIcLZMTY/QBkpejLbF9XBYg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Dashboard.css" />
  </head>
  <body>
    <?php
    // session_start();

    // // Check if the user is not logged in
    // if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    //     // Redirect to the login page
    //     header('Location: ../dashboard-login.html');
    //     exit();
    // }
    ?>
    <div class="container">
      <div class="navigation">
        <ul>
          <li>
            <a href="">
             <span class="icon"><ion-icon name="hand-heart"></ion-icon></span>
              <span class="title">FundFusion</span>
            </a>
          </li>
          <li>
            <a href="">
              <span class="icon">
                <ion-icon name="home-outline"></ion-icon>
              </span>
              <span class="title">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="">
              <span class="icon">
                <ion-icon name="people-outline"></ion-icon>
              </span>
              <span class="title">Home</span>
            </a>
          </li>
          <li>
            <a href="">
              <span class="icon">
                <ion-icon name="chatbubbles-outline"></ion-icon>
              </span>
              <span class="title">About</span>
            </a>
          </li>
          <li>
            <a href="">
              <span class="icon">
                <ion-icon name="help-outline"></ion-icon>
              </span>
              <span class="title">Donation</span>
            </a>
          </li>
          <li>
            <a href="">
              <span class="icon">
                <ion-icon name="settings-outline"></ion-icon>
              </span>
              <span class="title">Events</span>
            </a>
          </li>
          <li>
            <a href="">
              <span class="icon">
                <ion-icon name="lock-closed-outline"></ion-icon>
              </span>
              <span class="title">Admins</span>
            </a>
          </li>
          <li>
            <a href="">
              <span class="icon">
                <ion-icon name="log-out-outline"></ion-icon>
              </span>
              <span class="title">Sign Out</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- main -->
      <div class="main">
        <div class="topbar">
          <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
          </div>
          <!-- Search -->
          <div class="search">
            <label>
              <input type="text" placeholder="Search here" />
              <ion-icon name="search-outline"></ion-icon>
            </label>
          </div>
          <!-- UserImg -->
          <!-- <div class="user">
            <img src="imgs/user.jpg" alt="" />
          </div>
        </div> -->
         </body>
  <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script> -->
    <!-- <script src="js/chart.umd.js"></script> -->
    <!-- <script src="js/chart.min.js"></script> -->
    <script src="Dashboard.js"></script>
</html>
