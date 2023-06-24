<?php
include "../admin/routeconfig.php";
include "../database/Db_Connection.php";
session_start(); 
if (isset($_SESSION['name'])) {

    if (isset($_GET['title'])) {
        $title = urldecode($_GET['title']);
    } else {
        $title = '';
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button class="btn btn-primary"><a href="../esewa/donate.php?title=<?php echo urlencode($title); ?>" >Donate</a>
    <button class="btn btn-primary"><a href="../Khalti/donate.php?title=<?php echo urlencode($title); ?>" >Donate</a>

</button>
    
</body>
</html>