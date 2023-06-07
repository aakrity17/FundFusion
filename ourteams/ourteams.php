<?php
include 'connect.php';
if (isset($_POST['submit'])) {
  // Retrieve form data
  // $id = $_POST["id"];
  $image = $_POST["image"];
  $name = $_POST["name"];
  $lastname = $_POST["lastname"];
  $position = $_POST["position"];
  $email = $_POST["email"];

  // File upload handling
  $targetDirectory = "uploads/";  // Directory to store uploaded files
  $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
  $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

  if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
    echo "File uploaded successfully.";

    // Insert data into the database
    $sql = "INSERT INTO `our-teams` (`image`, `name`, `lastname`, `position`, `email`) VALUES ('$targetFile', '$name', '$lastname', '$position', '$email')";

    if ($conn->query($sql) === TRUE) {
      echo "Data inserted successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  } else {
    echo "Error uploading the file.";
  }
}
?>

// Close the connection
//$conn->close(); // Remove this line

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <div class="container">
    <h1>Our-Teams</h1>
    <form method="POST" action="process-form.php" enctype="multipart/form-data">
      <div class="form-group">
        <div class="form-group">
          <label for="image">Image:</label>
          <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
          <label for="lastname">Lastname:</label>
          <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter your lastname">
        </div>
        <div class="form-group">
          <label for="position">Position:</label>
          <input type="text" class="form-control" id="position" name="position" placeholder="Enter your position">
        </div>

        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
</body>

</html>