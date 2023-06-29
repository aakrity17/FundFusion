<script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script> -->

<?php
session_start();
include "../admin/routeconfig.php";
include "../database/Db_Connection.php";

if (isset($_SESSION['email'])) {
    if (isset($_GET['title'])) {
        $title = urldecode($_GET['title']);
    } else {
        $title = '';
    }

    // Sanitize and validate the $title variable
    $title = mysqli_real_escape_string($conn, $title); // Assuming $conn is the database connection variable

    $sql = "SELECT * FROM user WHERE email='$title'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $address = $row['address'];
            $contact = $row['Contact'];
            $name = $row['name'];
            $id = $row['id'];
        }
    } else {
        // Handle the query error
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Handle the case when the 'email' session variable is not set
    echo "Session email not set.";
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>

<head>
    <title>Membership/Donors Profile</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, sans-serif;
            padding-top: 20px;
        }

        .nav-container {
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



<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-user"></i> Personal Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-id-card"></i> Membership Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-file-invoice-dollar"></i> Donation History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-user-circle"></i> Profile Details</a>
                </li>
            </ul>
        </div>
    </nav>



    <section id="per">

        <div class="profile-container">
            <h1 class="profile-heading" style="text-align: center; margin-bottom:50px;"><?php echo $name; ?></h1>
            <div class="profile-details">
                <h2><B>Personal Information</B></h2>

                <p><i class="fas fa-id-card"></i> <strong>ID:</strong><?php echo $id; ?></p>

                <p><i class="fas fa-envelope"></i> <strong>Email:</strong> <?php echo $title; ?></p>

                <p><i class="fas fa-phone"></i> <strong>Phone Number:</strong> <?php echo $contact; ?></p>
                <!-- <p><i class="fas fa-venus"></i> <strong>Gender:</strong> F</p> -->
                <p><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> <?php echo $address; ?></p>
            </div>


    </section>
    <section id="membership details">
        <div class="profile-details">
            <h2><b>Membership Information</b></h2>
            <p><i class="fas fa-info-circle"></i> <strong>Info:</strong> Renew your accounts via payment.</p>
            <p><i class="fas fa-calendar-alt"></i> <strong>Membership Expiry Date:</strong> 2024-02-27 A.D.</p>
            <p><i class="fas fa-calendar-check"></i> <strong>Account Created Date:</strong> 2020-12-06</p>
            <p><i class="fas fa-calendar-check"></i> <strong>Membership Renewed Date:</strong> 2023-02-28</p>
        </div>
    </section>
    <section id="pro">
        <div class="profile-details">
            <h2><b>Donation History</b></h2>
            <?php
            $sql2 = "SELECT * FROM donors WHERE email='$title'";
            $result = mysqli_query($conn, $sql2);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $date = $row['date'];
            ?>
                    <p><i class="fas fa-info-circle"></i> <strong>Info:</strong> <?php echo $row['name']; ?></p>
                    <p><i class="fas fa-calendar-alt"></i> <strong>Donation Date:</strong> <?php echo $date; ?> A.D.</p>
                    <p><i class="fas fa-calendar-check"></i> <strong>Account Created Date:</strong> <?php echo $row['amount']; ?></p>
                    <p><i class="fas fa-calendar-check"></i> <strong>Membership Renewed Date:</strong> <?php echo $row['cause']; ?></p>
            <?php
                }
            } else {
                echo "No donation history found.";
            }
            ?>
        </div>
    </section>

    <section id="profile">
        <div class="profile-details">

            <h2><b>Sponsorships<b></h2>
            <p><i class="fas fa-info-circle"></i> <strong>Info:</strong> Renew your accounts via payment.</p>
            <p><i class="fas fa-calendar-alt"></i> <strong>Membership Expiry Date:</strong> 2024-02-27 A.D.</p>
            <p><i class="fas fa-calendar-check"></i> <strong>Account Created Date:</strong> 2020-12-06</p>
            <p><i class="fas fa-calendar-check"></i> <strong>Membership Renewed Date:</strong> 2023-02-28</p>
        </div>
        <div class="profile-buttons">
            <button class="password-button"><i class="fas fa-lock"></i> Change Password</button>
            <button class="activity-log-button"><i class="fas fa-history"></i> Activity Log</button>
        </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>