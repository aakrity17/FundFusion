<?php
// include ".../admin/routeconfig.php";
session_start();
if (!isset($_SESSION['username']) &&!isset($_SESSION['password'])){
    // If the user is not logged in, redirect them to the login page
    header('Location: index.php');
    exit();
}

// If the user is logged in, display the dashboard content
?>