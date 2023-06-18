<?php
include "database/Db_Connection.php";
include "admin/routeconfig.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projectfa-spin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!--Main CSS-->
    <link rel="stylesheet" href="css/style.css">

    <!--fontawesome-->
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <!--google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!--Animate.css--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />

    </head>
    <body>
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
        <div class="container">
            <h1><?php echo $name;?></h1>
            <div class="row">
                <div class="col-6">
                    <img src="<?php echo $site_url ?>img/projects/<?php echo $thumbnail;?>" style="width: 25rem !important; height: 25rem !important; object-fit: cover !important;">
                </div>
                <div class="col-6">
                    <p><strong>Start Date:</strong> <?php echo $startDate;?> </p>
                    <hr>
                    <p><strong>End Date:</strong> <?php echo $endDate;?> </p>
                    <hr>
                    <p><?php echo $description;?> </p>
                    <hr>
                    <hr>
                </div>
            </div>
            <hr>
            <div class="row">
                <p> <?php echo $videoUrl;?> </p>
            </div>
        </div>
    </body>
</body>
</html>