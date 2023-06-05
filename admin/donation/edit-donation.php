<?php
include "../sessioncheck.php";
include "../../database/Db_Connection.php";
include "../routeconfig.php";
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
    <link rel="stylesheet" href="<?php echo $site_url ?>css/createdonation.css" />
  </head>
  <body>
    <div class="container">
      <?php
      @include('../partials/navigation.php')
      ?>
        <div class="main">
            <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
            <!-- Search -->
            <div class="search">
                <label>
                <input type="search" placeholder="Search here" />
                <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
        </div>
        <?php
            $id = $_GET['id'];
            $result = mysqli_query($conn, "SELECT * FROM donation WHERE id ='" . $_GET["id"] . "'");
            while($res = mysqli_fetch_array($result))
            {
                $name = $res['donation_name'];
                $type = $res['donation_type'];
                $progress = $res['donation_progress'];
                $target = $res['donation_target'];
                $imageURL = $res['donation_image_url'];
                $description = $res['donation_description'];
            }
        ?>
            <h2>Update Donation</h2>
        <p>Update the details regarding events.</p>
        <?php
        if(isset($_GET['status'])) {
            echo '<h3 style="color:green">!!Donation data updated successfully!!</h3>';
        }
        ?>
        <div class="containerbox">
        
        <!-- Form for editting data -->
        
        <form action="update-donation.php" method="POST" enctype="multipart/form-data">
            <div class="row">
            <div class="col-25">
                <label for="donation_name">Donation Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="donation_name" name="donation_name" value="<?php echo $name;?>">
            </div>
            </div>

            <div class="row">
            <div class="col-25">
                <label for="donation_type">Donation Type</label>
            </div>
            <div class="col-75">
                <input type="text" id="donation_type" name="donation_type" value="<?php echo $type;?>">
            </div>
            </div>

            <div class="row">
            <div class="col-25">
                <label for="donation_progress">Donation Progress</label>
            </div>
            <div class="col-75">
                <input type="text" id="donation_progress" name="donation_progress" value="<?php echo $progress;?>">
            </div>
            </div>

            <div class="row">
            <div class="col-25">
                <label for="donation_target">Donation Target</label>
            </div>
            <div class="col-75">
                <input type="text" id="donation_target" name="donation_target" value="<?php echo $target;?>">
            </div>
            </div>

            <div class="row">
            <div class="col-25">
                <label for="donation_image_url">Image file</label>
            </div>
            <div class="col-75">
                <input type="file" id="donation_image_url" name="donation_image_url">
                <img src="../../img/donation/<?php echo $imageURL;?>" style="height:100px;width:100px">
            </div>
            </div>

            <div class="row">
            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
            <div class="col-25">

                <label for="donation_description">Donation Description</label>
            </div>
            <div class="col-75">
                <textarea id="donation_description" name="donation_description" style="height:200px"><?php echo $description;?></textarea>
            </div>
            </div>
            <div class="row">
            <input type="submit" name="update" value="Update">
            </div>
        </form>
    </div>
  </body>
  </html>