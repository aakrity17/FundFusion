<?php
session_start();
include "../admin/routeconfig.php";
include "../database/Db_Connection.php";

if (isset($_SESSION['email'])) {
  $email=$_SESSION['email'];
  if (isset($_GET['id'])) {
    $id = urldecode($_GET['id']);

  
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
          $sql = "UPDATE user SET profile_picture='$profilePictureName' WHERE id=$id";
          $result = mysqli_query($conn, $sql);

          if ($result) {
            // Profile picture update successful
            $message= "Profile picture updated successfully!";
            $message="Password changed successfully";
            $encMessage=base64_encode($message);
            header("location:../Success/success.php?message=$encMessage"); 
          } else {
            // Handle the query error
            echo $id;
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
      <style>
        .container {
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          height: 100vh;
          padding: 20px;
          background-color: #6633cc;
        }

        h1 {
          margin-bottom: 20px;
        }

        form {
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
        }

        label {
          margin-bottom: 10px;
        }

        input[type="file"] {
          margin-bottom: 20px;
        }

        button {
          padding: 10px 20px;
          border: none;
          background-color: #4CAF50;
          color: white;
          font-size: 16px;
          cursor: pointer;
        }

        button:hover {
          background-color: #45a049;
        }
      </style>
    </head>

    <body>
      <div class="container">
        <h1 style="color: white;">Update Profile Picture</h1>
        <form action="update_picture.php?id=<?php echo urlencode($id); ?>" method="POST" enctype="multipart/form-data">
          <label for="profile-picture">
            <h3 style="color:white"></h3>
          </label>
          <input type="file" id="profile-picture" name="profile_picture" accept="image/*">
          <button type="submit">Update Picture</button>
        </form>

    </body>

    </html>

<?php
  } else {
    // Handle the case when the email parameter is not set in the URL
    echo "ID parameter not found.";
  }
} else {
  // Handle the case when the 'email' session variable is not set
  echo "Session email not set.";
}

// Close the database connection
mysqli_close($conn);
?>