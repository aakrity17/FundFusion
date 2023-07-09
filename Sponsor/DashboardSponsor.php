<?php
include "../admin/routeconfig.php";

// Include the database connection file
include "../database/Db_Connection.php";

//$sql = "SELECT * FROM donors WHERE cause='Gold Membership' OR cause='Silver Membership' OR cause='Platinum Membership'";

$sql = "SELECT u.id, u.name, u.Contact AS phone, u.email, s.type, sr.date AS registered_date
FROM user u
JOIN sponsorship_register_info sr ON u.id = sr.user_id
JOIN sponsorship s ON s.id = sr.sponsorship_id;";

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
            margin-left: 400px;
            max-width: 1000px;
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
        <h1>Sponsors</h1>
        <table>
            <tr>
                <th>Id</th>
                <th colspan="2">Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Type</th>
                <th>Registered Date</th>

                
            </tr>
            <?php
            // Iterate over the query result and populate the table rows
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td colspan='2'>" . $row['name'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "<td>" . $row['registered_date'] . "</td>";
                echo "</tr>";
            }
            ?>
            <!-- Add your PHP code here to populate the table with member data -->
        </table>
    </div>
</body>
</html>
