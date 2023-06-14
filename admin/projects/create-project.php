<?php
include "../sessioncheck.php";
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
        <h2>Create New Project</h2>
        <p>Add all the details regarding projects below.</p>
        <?php
        if(isset($_GET['status'])) {
            echo '<h3 style="color:green">!!New Project Created Successfully!!</h3>';
        }
        if(isset($_GET['statu'])) {
            echo '<h3 style="color:green">!!Project Deleted Successfully!!</h3>';
        }
        ?>
        <div class="containerbox">
        <form action="newproject.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-25">
                    <label for="pname">Project Name:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="pname" name="title" placeholder="New Project Name">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="pstartdate">Project Start Date:</label>
                </div>
                <div class="col-25">
                    <input type="date" id="pstartdate" name="p_start_date" placeholder="Start Date">
                </div>
                <div class="col-25">
                    <label for="penddate">Project End Date:</label>
                </div>
                <div class="col-25">
                    <input type="date" id="penddate" name="p_end_date" placeholder="End Date">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="pimage">Project Thumbnail:</label>
                </div>
                <div class="col-75">
                    <input type="file" id="pimage" name="thumbnail">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="vidurl">Video Url:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="vidurl" name="video_url" placeholder="YouTube Video Url">
                </div>
            </div>
            
            <div class="row">
                <div class="col-25">
                    <label for="prodesc">Project Description:</label>
                </div>
                <div class="col-75">
                    <textarea id="prodesc" name="descriptions" placeholder="Event descripton.." style="height:200px"></textarea>
                </div>
            </div>
            <div class="row">
            <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    <?php
        include "../../database/Db_Connection.php";
        $sql = "SELECT * from projects";
        $records = $conn->query($sql);
    ?>
    <table >
        <tr>
            <th><u>Project Name</u></th>
            <th><u>Project Duration</u></th>
            <th><u>Remarks</u></th>
        </tr>
        <?php
     foreach( $records as $data ) 
        {
           echo ' <tr>
           <th>'.$data['title'].'</th>
           <th>'.'From: '.$data['p_start_date']. ' To: ' .$data['p_end_date'].'</th>
           <th><a href="edit-projects.php?id='.$data['id'].'"><ion-icon name="create"></ion-icon></a>
           <a href="deleteproject.php?id='.$data['id'].'"><ion-icon name="trash"></ion-icon></a>
           </th>
           </tr>';
        }
        ?>
    </table>
    </div>
  </body>
  <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script src="<?php echo $site_url ?>js/Dashboard.js"></script>
    
    <script>
      //  onclick="deleteConfirmation()"
    // function deleteConfirmation(){
    //   var result = confirm("Are you sure to delete?");
    //   if(result){
    //     alert("Deleted")
    //   }
  //  }
  </script>
</html>