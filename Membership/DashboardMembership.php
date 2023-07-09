<?php
include "../admin/routeconfig.php";

// Include the database connection file
include "../database/Db_Connection.php";

<<<<<<< HEAD
$sql = "SELECT * FROM membership_register_info";
=======
//$sql = "SELECT * FROM donors WHERE cause='Gold Membership' OR cause='Silver Membership' OR cause='Platinium Membership'";

$sql = "SELECT u.id, u.name, u.Contact AS phone, u.email, m.membership_type AS type, mri.date AS registered_date,
DATE_ADD(mri.date, INTERVAL m.amount DAY) AS expiry_date,
DATEDIFF(DATE_ADD(mri.date, INTERVAL m.amount DAY), CURDATE()) AS days_remaining
FROM user u
JOIN membership_register_info mri ON u.id = mri.user_id
JOIN membership m ON m.id = mri.membership_id;
";
>>>>>>> 57fabd90e5dd42eab0d87a3d887bf9193b75b807
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
                $registeredDate = $row['registered_date'];
                $expiryDate = date('Y-m-d', strtotime('+1 year', strtotime($registeredDate)));
                $daysRemaining = ceil((strtotime($expiryDate) - time()) / (60 * 60 * 24));
                if($daysRemaining>364){
                    $daysRemaining=364;
                  }
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td colspan='2'>" . $row['name'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
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
