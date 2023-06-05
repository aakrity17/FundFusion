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
    <link rel="stylesheet" href="<?php echo $site_url ?>css/createevent.css" />
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
                <input type="text" placeholder="Search here" />
                <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
        </div>
        <?php
            $id = $_GET['id'];
            $result = mysqli_query($conn, "SELECT * FROM events WHERE id=$id");
            while($res = mysqli_fetch_array($result))
            {
                $name = $res['event_name'];
                $duration = $res['event_duration'];
                $imageURL = $res['event_image_url'];
                $description = $res['event_description'];
            }
        ?>
            <h2>Update Event</h2>
        <p>Update the details regarding events.</p>
        <?php
        if(isset($_GET['status'])) {
            echo '<h3 style="color:green">!!Event Updated Successfully!!</h3>';
        }
        ?>
        <div class="containerbox">
        <form action="updateevent.php" method="POST" enctype="multipart/form-data">
            <div class="row">
            <div class="col-25">
                <label for="ename">Event Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="ename" name="event_name" value="<?php echo $name;?>">
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <label for="eduration">Event Duration</label>
            </div>
            <div class="col-75">
                <input type="text" id="eduration" name="event_duration" value="<?php echo $duration;?>">
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <label for="eimage">Event Image</label>
            </div>
            <div class="col-75">
                <input type="file" id="eimage" name="event_image_url">
                <img src="../../img/events/<?php echo $imageURL;?>" style="height:100px;width:100px">
            </div>
            </div>
            <div class="row">
            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
            <div class="col-25">
                <label for="eduration">Event Description</label>
            </div>
            <div class="col-75">
                <textarea id="eduration" name="event_description" style="height:200px"><?php echo $description;?></textarea>
            </div>
            </div>
            <div class="row">
            <input type="submit" name="update" value="Update">
            </div>
        </form>
    </div>
  </body>
  </html>