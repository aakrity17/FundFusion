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
            $result = mysqli_query($conn, "SELECT * FROM projects WHERE id=$id");
            while($res = mysqli_fetch_array($result))
            {
                $name = $res['title'];
                $thumbnail = $res['thumbnail'];
                $videoUrl = $res['video_url'];
                $description = $res['descriptions'];
                $startDate = $res['p_start_date'];
                $endDate = $res['p_end_date'];
            }
        ?>
            <h2>Update Project</h2>
        <p>Update the details regarding project.</p>
        <?php
        if(isset($_GET['status'])) {
            echo '<h3 style="color:green">!!Project Updated Successfully!!</h3>';
        }
        ?>
        <div class="containerbox">
        <form action="updateproject.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-25">
                    <label for="pname">Project Name:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="pname" name="title" value="<?php echo $name;?>">
                </div>
            </div>
            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
            <div class="row">
                <div class="col-25">
                    <label for="pstartdate">Project Start Date:</label>
                </div>
                <div class="col-25">
                    <input type="date" id="pstartdate" name="p_start_date" value="<?php echo $startDate;?>">
                </div>
                <div class="col-25">
                    <label for="penddate">Project End Date:</label>
                </div>
                <div class="col-25">
                    <input type="date" id="penddate" name="p_end_date" value="<?php echo $endDate;?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="pimage">Project Thumbnail:</label>
                </div>
                <div class="col-75">
                    <input type="file" id="pimage" name="thumbnail">
                    <img src="../../img/projects/<?php echo $thumbnail;?>" style="height:100px;width:100px">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="vidurl">Video Url:</label>
                </div>
                <div class="col-75">
                    <textarea type="text" id="vidurl" name="video_url" style="height:80px"><?php echo $videoUrl;?></textarea>
                </div>
            </div>
            
            <div class="row">
                <div class="col-25">
                    <label for="prodesc">Project Description:</label>
                </div>
                <div class="col-75">
                    <textarea id="prodesc" name="descriptions" placeholder="Event descripton.." style="height:200px"><?php echo $description;?></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" name="update" value="Update">
            </div>
        </form>
    </div>
  </body>
  </html>