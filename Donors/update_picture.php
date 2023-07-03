<?php
session_start();
include "../admin/routeconfig.php";
include "../database/Db_Connection.php";

if (isset($_SESSION['email'])) {
  if (isset($_GET['email'])) {
    $email = urldecode($_GET['email']);

    // Sanitize and validate the $email variable
    $email = mysqli_real_escape_string($conn, $email); // Assuming $conn is the database connection variable

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Handle the form submission
      $profilePicture = $_FILES['profile_picture'];
      $profilePictureName = $profilePicture['name'];
      $profilePictureTmp = $profilePicture['tmp_name'];
      $profilePictureError = $profilePicture['error'];

      if ($profilePictureError === UPLOAD_ERR_OK) {
        // Process the uploaded image
        $profilePicturePath = '../img/' . $profilePictureName; // Replace with the actual path to the profile pictures directory

        // Move the uploaded image to the desired location
        if (move_uploaded_file($profilePictureTmp, $profilePicturePath)) {
          // Update the profile picture path in the database
          $sql = "UPDATE user SET profile_picture='$profilePictureName' WHERE email='$email'";
          $result = mysqli_query($conn, $sql);

          if ($result) {
            // Profile picture update successful
            echo "Profile picture updated successfully!";
          } else {
            // Handle the query error
            echo "Error: " . mysqli_error($conn);
          }
        } else {
          // Handle the file upload error
          echo "Error uploading the file.";
        }
      } else {
        // Handle the file upload error
        echo "Error uploading the file.";
      }
    }
    // Display the form to update the profile picture
    ?>
    <!DOCTYPE html>
    <html>

    <head>
      <title>Update Profile Picture</title>
      <!-- Add your CSS stylesheets and other head elements here -->
    </head>

    <body>
      <h1>Update Profile Picture</h1>
      <form action="update_picture.php?email=<?php echo urlencode($email); ?>" method="POST" enctype="multipart/form-data">
        <label for="profile-picture">Choose a new picture:</label>
        <input type="file" id="profile-picture" name="profile_picture" accept="image/*">
        <br>
        <button type="submit">Update Picture</button>
      </form>
    </body>

    </html>
    <?php
  } else {
    // Handle the case when the email parameter is not set in the URL
    echo "Email parameter not found.";
  }
} else {
  // Handle the case when the 'email' session variable is not set
  echo "Session email not set.";
}

// Close the database connection
mysqli_close($conn);
?>
