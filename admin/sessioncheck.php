<?php
session_start();
include "routeconfig.php";
// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If the user is not logged in, redirect them to the login page
    header('Location: '. $site_url .'dashboardLogin/login.php');
    exit();
}

// If the user is logged in, display the dashboard content
?>