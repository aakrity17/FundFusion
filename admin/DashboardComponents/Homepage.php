<?php
include "../sessioncheck.php";
include "../routeconfig.php";

include "Db_Connection.php";

$sliderSql="SELECT * FROM homepageslider WHERE id=1";
$result = mysqli_query($conn,$sliderSql);
$res = mysqli_fetch_array($result);
    $s1head=$res['s1head'];
    $s2head=$res['s2head'];
    $s3head=$res['s3head'];
    $s1content=$res['s1content'];
    $s2content=$res['s2content'];
    $s3content=$res['s3content'];

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the updated values from the form
        $newS1head = $_POST['s1head'];
        $newS1content = $_POST['s1content'];
        $newS2head = $_POST['s2head'];
        $newS2content = $_POST['s2content'];
        $newS3head = $_POST['s3head'];
        $newS3content = $_POST['s3content'];

         // Prepare the update query
         $updateSql = "UPDATE homepageslider SET ";

         // Append the update query for Slider-1 if its values are not empty
         if (!empty($newS1head) && !empty($newS1content)) {
             $updateSql .= "s1head='$newS1head', s1content='$newS1content', ";
         }
 
         // Append the update query for Slider-2 if its values are not empty
         if (!empty($newS2head) && !empty($newS2content)) {
             $updateSql .= "s2head='$newS2head', s2content='$newS2content', ";
         }
 
         // Append the update query for Slider-3 if its values are not empty
         if (!empty($newS3head) && !empty($newS3content)) {
             $updateSql .= "s3head='$newS3head', s3content='$newS3content', ";
         }
 
         // Remove the trailing comma and space
         $updateSql = rtrim($updateSql, ', ');
 
         // Add the WHERE clause
         $updateSql .= " WHERE id=1";
 
         mysqli_query($conn, $updateSql);
 
         header("Location: ".$_SERVER['PHP_SELF']);
         exit();
     }
     ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> | FundFusion Dashboard |</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-Df9X+loaH7pK/q/Mtx6x0gZQ0Ud3sU6lvjK0JfU9Xelrk+czb1CQTV8xGYhpuGeZIcLZMTY/QBkpejLbF9XBYg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo $site_url ?>css/Dashboard.css" />
    <link rel="stylesheet" href="<?php echo $site_url ?>css/createevent.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
    .container{
        background-color: var(--blue);       
         margin-left:300px ;
        padding: 20px;
    }
    .container h3{
        padding-left: 400px;

    color: white;
    font-weight: 500;
    font-family: "Helvetica Neue",Helvetica;
    }

    .content-container{
        margin-left:300px ;
        padding: 20px;
    }
    </style>
  </head>
  <body>
  <?php
      @include('../partials/navigation.php')
      ?>
       <div class="container">
        <h3>Edit Home Page Content</h3>
    </div>

    <div class="content-container">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h3>Slider-1</h3>
            <div class="mb-3">
                <input type="text" class="form-control" name="s1head" value="<?php echo $s1head; ?>">
                <textarea class="form-control my-2" name="s1content" rows="10"><?php echo $s1content; ?></textarea>
                <button type="submit" class="btn btn-primary my-4">Update</button>
            </div>
        </form>

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h3>Slider-2</h3>
            <div class="mb-3">
                <input type="text" class="form-control" name="s2head" value="<?php echo $s2head; ?>">
                <textarea class="form-control my-2" name="s2content" rows="10"><?php echo $s2content; ?></textarea>
                <button type="submit" class="btn btn-primary my-4">Update</button>
            </div>
        </form>

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h3>Slider-3</h3>
            <div class="mb-3">
                <input type="text" class="form-control" name="s3head" value="<?php echo $s3head; ?>">
                <textarea class="form-control my-2" name="s3content" rows="10"><?php echo $s3content; ?></textarea>
                <button type="submit" class="btn btn-primary my-4">Update</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </body>
</html>