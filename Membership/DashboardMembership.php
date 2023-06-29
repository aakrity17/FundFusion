<?php
include "../admin/routeconfig.php";

// Include the database connection file
include "../database/Db_Connection.php";

$sql = "SELECT * FROM donors WHERE cause='Premium Premium Sponsorship' OR cause='Regular Sponsorship' OR cause='VIP Sponsorship'";
$result = mysqli_query($conn, $sql);
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
            margin-left: 350px;
            max-width: 1100px;
            padding: 20px;
        }

        h1 {
            text-align: center;
            padding: 50px;       }

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
            background-color: #5c85e6;
            color:bisque;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php include "../admin/partials/navigation.php"; ?>
    <div class="container">
        <h1>Members</h1>
        <table>
            <tr>
                <th>Id</th>
                <th colspan="2">Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Type</th>
                <th>Registered Date</th>
                <th>Expiry Date</th>
                <th>Days Remainig</th>

                
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $registeredDate = $row['date'];
                $expiryDate = date('Y-m-d', strtotime('+1 year', strtotime($registeredDate)));
                $daysRemaining = ceil((strtotime($expiryDate) - time()) / (60 * 60 * 24));

                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td colspan='2'>" . $row['name'] . "</td>";
                echo "<td>" . $row['Contact'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['cause'] . "</td>";
                echo "<td>" . $registeredDate . "</td>";
                echo "<td>" . $expiryDate . "</td>";
                echo "<td>" . $daysRemaining . "</td>";
                echo "</tr>";
            }
            ?>
            <!-- Add your PHP code here to populate the table with member data -->
        </table>
    </div>
</body>
</html>
