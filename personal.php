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
        img{
            height :25vh;
            weight :25vh;
        }
    </style>
</head>

<body>


    <div class="profile-container">
        <h1 class="profile-heading" style="text-align: center; margin-bottom:50px;"></h1>
        <div class="profile-details">
            <div>
                <img src ="./img/blueticl.png">
                </div>
            <h2><B>Personal Information</B></h2>
            <p><i class="fas fa-id-card"></i> <strong>ID: 22</strong></p>
            <p><i class="fas fa-envelope"></i> <strong>Email:parajulil385@gmail.com</strong> </p>
            <p><i class="fas fa-phone"></i> <strong>Phone Number:+977 9806501357</strong> </p>
            <!-- <p><i class="fas fa-venus"></i> <strong>Gender:</strong> F</p> -->
            <p><i class="fas fa-map-marker-alt"></i> <strong>Address:Pkr-5</strong></p>
        </div>
        <div class="profile-details">
            <h2><b>Membership Information</b></h2>
            <p><i class="fas fa-info-circle"></i> <strong>Info:</strong> Renew your accounts via payment.</p>
            <p><i class="fas fa-calendar-alt"></i> <strong>Membership Expiry Date:</strong> 2024-02-27 A.D.</p>
            <p><i class="fas fa-calendar-check"></i> <strong>Account Created Date:</strong> 2020-12-06</p>
            <p><i class="fas fa-calendar-check"></i> <strong>Membership Renewed Date:</strong> 2023-02-28</p>
        </div>

        <div class="profile-details">
    <h2><b>Donation History</b></h2>
    <p><i class="fas fa-dollar-sign"></i><strong>Total Donations : </strong> <P>
    </div>