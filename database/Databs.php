<?php
require"Db_Connection.php";
//create database
$sql ="CREATE DATABASE lgic";
if($conn->query($sql)=== TRUE){
    echo "Database crreated sucessfully ";
}
else{
    echo "Erroe creating database: " . $conn->error;
}
?>
