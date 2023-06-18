<?php
include "../admin/routeconfig.php";
include "../database/Db_Connection.php";
session_start();
if (isset($_SESSION['name']) && isset($_SESSION['username'])) {


  if (isset($_GET['title'])) {
    $title = urldecode($_GET['title']);
  } else {
    $title = '';
  }


  $name = $_SESSION['name'];
  $username = $_SESSION['username'];
  $sql = "SELECT * FROM user WHERE name = '$name' AND username = '$username'";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    if (mysqli_num_rows($result) > 0) {
      // Fetch the data
      $row = mysqli_fetch_assoc($result);
      // Access the values
      $address = $row['address'];
      $contact = $row['Contact'];
      $email = $row['email'];

      // Do something with the retrieved data
      // ...
    } else {
      // No matching records found
      echo "No matching records found.";
    }
    mysqli_free_result($result); // Free the result set
  } else {
    // Query execution failed
    echo "Error executing the query: " . mysqli_error($conn);
  }
} else {
  header('Location:../User/userlogin.php');
  exit();
}



// donate.php

if (isset($_POST['submit'])) {
  if (isset($_POST['Amount'])) {
    $amount = $_POST['Amount'];
    // Process the amount
    echo $amount;
  }

  // Retrieve other form data
  $name = $_POST['name'];
  $address = $_POST['address'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $donation_title = $_POST['donation_title'];


  // Save the form details in the database
  $uid = 10; // Assuming uid is stored in the session
  $sql = "INSERT INTO donors (uid, name, address, contact, email, amount, cause) VALUES ('$uid', '$name', '$address', '$contact', '$email', '$amount', '$donation_title')";
  if (mysqli_query($conn, $sql)) {
    echo "Form details saved successfully in the database.";
  } else {
    echo "Error saving form details: " . mysqli_error($conn);
  }

  // Redirect to toEsewa.php with the amount
  header("Location: toEsewa.php?Amount=$amount");
  exit();

  
}
