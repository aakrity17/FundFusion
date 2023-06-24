<?php
session_start();
include "../admin/routeconfig.php";
if (!isset($_SESSION['username'])) {
    echo $_SESSION['username'];
    exit();
}
// If the user is logged in, display the dashboard content
?>