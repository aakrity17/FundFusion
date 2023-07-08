<?php
?>
<!DOCTYPE html>
<head>
    <title>Donors Details</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding-top: 20px;
        }

        .nav-container{
            background-color: #333;
            color: #fff;
          }


            

        /* profile container  */
        .profile-container {
            margin-top: 20px;
            line-height: 2.5;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f5f5f5;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-heading {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .profile-details {
            margin-bottom: 40px;
        }

        .profile-details h2 {
            color: #333;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .profile-details p {
            margin: 5px 0;
            color: #666;
        }

        .profile-buttons {
            text-align: right;
        }

        .profile-buttons button {
            margin: 5px;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .profile-buttons button:hover {
            background-color: #333;
            color: #fff;
        }
        
    </style>
</head>

<body>
    <?php
    include 'database/Db_Connection.php';
    if (isset($_GET['title'])) {
        $title = urldecode($_GET['title']);
      } else {
        $title = '';
      }

      $sql = "SELECT uid FROM donors WHERE id='$title'";
      $result = mysqli_query($conn, $sql);

      if ($result) {
        if (mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
          $user_id = $row['uid'];


          $sql2 = "SELECT * FROM user WHERE id='$user_id'";
          $result2 = mysqli_query($conn, $sql2);
    
          if ($result2) {
            if (mysqli_num_rows($result2) > 0) {
              $row2 = mysqli_fetch_assoc($result2);
              $address = $row2['address'];
              $contact = $row2['Contact'];
              $email = $row2['email'];

              $name = $row2['name'];

            }
        }
         

        }
      }
    ?>


    <div class="profile-container" style="margin-top: 50px;">
        <h1 class="profile-heading" style="text-align: center; margin-top:20px;"></h1>
        <div class="profile-details">
            
            <h2 style="text-align:center"><B><?php echo $name ?></B></h2>
            <p><i class="fas fa-id-card"></i> <strong>ID: <?php echo $user_id ?></strong></p>
            <p><i class="fas fa-envelope"></i> <strong>Email:<?php echo $email ?></strong> </p>
            <p><i class="fas fa-phone"></i> <strong>Phone Number:+977 <?php echo $contact ?></strong> </p>
            <p><i class="fas fa-map-marker-alt"></i> <strong>Address:<?php echo $address ?></strong></p>
            <p><i class="fas fa-dollar-sign"></i><strong> Total Donations : </strong> <P>
            <!-- <p><i class="fas fa-dollar-sign"></i><strong>Total Donations : </strong> <P> -->



        </div>
    </div>
</body>
</html>