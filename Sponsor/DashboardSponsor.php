<?php
include "../admin/routeconfig.php";

// Include the database connection file
include "../database/Db_Connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members</title>
    <link rel="stylesheet" href="../css/Dashboard.css">

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            margin-left: 300px;
            max-width: 800px;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php include "../admin/partials/navigation.php"; ?>
    <div class="container">
        <h1>Sponsors</h1>
        <table>
            <tr>
                <th colspan="3">Id</th>
                <th colspan="3">Name</th>
                <th colspan="3">Phone</th>
                <th colspan="3">Email</th>
                <th colspan="3">Type</th>
                <th colspan="3">Registered Date</th>
                <!-- <th colspan="3">Expiry Date</th> -->
            </tr>
            <!-- Add your PHP code here to populate the table with member data -->
        </table>
    </div>
</body>
</html>
