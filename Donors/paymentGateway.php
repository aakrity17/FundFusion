<?php
include "../admin/routeconfig.php";
include "../database/Db_Connection.php";
session_start();
if (isset($_SESSION['name'])) {

    if (isset($_GET['title'])) {
        $title = urldecode($_GET['title']);
    } else {
        $title = '';
    }
}
?>



<?php
include "../admin/routeconfig.php";
include "../database/Db_Connection.php";
session_start();
if (isset($_SESSION['name'])) {

    if (isset($_GET['title'])) {
        $title = urldecode($_GET['title']);
    } else {
        $title = '';
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: auto;
            padding: auto;
        }

        .card {
            width: 300px;
            margin-bottom: 20px;
        }

        .esewa-card {
            background-color: #66cc33;
            color: #fff;
        }

        .khalti-card {
            background-color: #663399;
            color: #fff;
        }

        .card-button {
            width: 100%;
        }

        .esewa-logo {
            width: 100px;
        }

        .khalti-logo {
            width: 100px;
        }
    </style>
</head>

<body>
    <div class="main">
        <h1>Membership Options</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card esewa-card">
                        <div class="card-body text-center">
                            <img class="esewa-logo" src="../img/esewa.jpg" alt="eSewa Logo">
                            <h3>eSewa</h3>
                            <p>Click the button below to donate via eSewa.</p>
                            <a class="btn btn-primary card-button" href="../esewa/donate.php?title=<?php echo urlencode($title); ?>">Donate</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card khalti-card">
                        <div class="card-body text-center">
                            <img class="khalti-logo" src="../img/khalti.jpg" alt="Khalti Logo">
                            <h3>Khalti</h3>
                            <p>Click the button below to donate via Khalti.</p>
                            <a class="btn btn-primary card-button" href="../Khalti/donate.php?title=<?php echo urlencode($title); ?>">Donate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>