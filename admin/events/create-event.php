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
            
        </div>
        <h2>Create New Event</h2>
        <p>Add all the details regarding events below.</p>
        <?php
        if(isset($_GET['status'])) {
            echo '<h3 style="color:green">!!New Event Created Successfully!!</h3>';
        }
        if(isset($_GET['statu'])) {
            echo '<h3 style="color:green">!!Event Deleted Successfully!!</h3>';
        }
        ?>
        <div class="containerbox">
        <form action="newevent.php" method="POST" enctype="multipart/form-data">
            <div class="row">


            <div class="col-25">
                <label for="ename">Event Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="ename" name="event_name" placeholder="New Event Name">
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <label for="eduration">Event Duration</label>
            </div>
            <div class="col-75">
                <input type="text" id="eduration" name="event_duration" placeholder="Duration of the event">
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <label for="eimage">Event Image</label>
            </div>
            <div class="col-75">
                <input type="file" id="eimage" name="event_image_url">
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <label for="eduration">Event Description</label>
            </div>
            <div class="col-75">
                <textarea id="eduration" name="event_description" placeholder="Event descripton.." style="height:200px"></textarea>
            </div>
            </div>
            <div class="row">
            <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    <?php
        include "../../database/Db_Connection.php";
        $sql = "SELECT * from events";
        $records = $conn->query($sql);
    ?>
    <table >
        <tr>
            <th><u>Event Name</u></th>
            <th><u>Event Date</u></th>
            <th><u>Remarks</u></th>
        </tr>
        <?php
     foreach( $records as $data ) 
        {
           echo ' <tr>
           <th>'.$data['event_name'].'</th>
           <th>'.$data['event_duration'].'</th>
           <th><a href="edit-events.php?id='.$data['id'].'"><ion-icon name="create"></ion-icon></a>
           
           <a href="javascript:void(0);" onclick="confirmDelete('.$data['id'].')"><ion-icon name="trash"></ion-icon></a>
           </th> 
           </tr>';
        }
        ?> 
    </table>
    </div>
  </body>
      <script>
function confirmDelete(id) {
    if (confirm('Are you sure you want to delete this Event?')) {
        window.location.href = 'deleteevent.php?id=' + id;
    }
}
</script>
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