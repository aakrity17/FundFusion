<?php
include "../admin/routeconfig.php";

// Include the database connection file
include "../database/Db_Connection.php";

$sql = "SELECT * FROM donors WHERE cause='Gold Membership' OR cause='Silver Membership' OR cause='Platinum Membership'";
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
                <th colspan="1">Phone</th>
                <th colspan="2">Email</th>
                <th colspan="2">Type</th>
                <th colspan="2">Registered Date</th>
                <th colspan="2">Expiry Date</th>
                
            </tr>
            <?php
            // Iterate over the query result and populate the table rows
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['Contact'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['cause'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "</tr>";
            }
            ?>
            <!-- Add your PHP code here to populate the table with member data -->
        </table>
    </div>
</body>
</html>
