<?php
include "../database/Db_Connection.php";
@include('./Index/indexnav.php')
include "admin/routeconfig.php";


session_start();
// Check if the user is logged in
if (isset($_SESSION['name']) && isset($_SESSION['username'])) {
    $name = $_SESSION['name'];
    $email = $_SESSION['username'];

}
?>