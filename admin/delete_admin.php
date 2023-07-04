<?php
// delete_user.php

// Include the database connection file
include "../database/Db_Connection.php";

// Check if the user_id parameter is provided
if (isset($_POST["user_id"])) {
  // Retrieve the user id from the request
  $userId = $_POST["user_id"];

  // Prepare the SQL statement to delete the user
  $sql = "DELETE FROM user WHERE id = '$userId'";

  // Execute the query
  if ($conn->query($sql) === TRUE) {
    // Deletion successful
    echo "User deleted successfully!";
  } else {
    // Error occurred
    echo "Error deleting user: " . $conn->error;
  }
} else {
  // User id parameter not provided
  echo "Invalid request!";
}
?>
