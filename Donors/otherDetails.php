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
} else {
    die("Login First Page");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Bootstrap Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">User Profile</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#membership">Membership</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#donation">Donation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#sponsorship">Sponsorship</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Membership Section -->
<section id="membership" class="container mt-4">
    <h2>Membership Information</h2>
    <?php
    include "../database/Db_Connection.php";

    $sql = "SELECT mri.*, u.name, u.address, m.membership_type, m.amount
    FROM membership_register_info mri
    INNER JOIN user u ON mri.user_id = u.id
    INNER JOIN membership m ON mri.membership_id = m.id
    WHERE mri.user_id = $title";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "SQL Error: " . mysqli_error($conn);
    }

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $registeredDate = $row['date'];
            $expiryDate = date('Y-m-d', strtotime('+1 year', strtotime($registeredDate)));
            $daysRemaining = ceil((strtotime($expiryDate) - time()) / (60 * 60 * 24));
            if ($daysRemaining >= 365) {
                $daysRemaining = 364;
            }
            ?>
            <div class="card">
                <div class="card-body" style="font-size: 20px;">
                    <p><strong>Name:</strong> <?php echo $row['name']; ?> </p>
                    <p><strong>Address:</strong> <?php echo $row['address']; ?> </p>
                    <p><strong>Membership Type:</strong> <?php echo $row['membership_type']; ?> </p>
                    <p><strong>Membership Amount:</strong> <?php echo $row['amount']; ?> </p>
                    <p><strong>Membership Expiry Date:</strong> <?php echo $expiryDate; ?></p>
                    <p><strong>Account Created Date:</strong> <?php echo $registeredDate; ?></p>
                    <p><strong>Days Remaining:</strong> <?php echo $daysRemaining; ?></p>
                </div>
            </div>
            <?php
        }
    } else {
        echo "<p>No data found.</p>";
    }
    ?>
</section>

<!-- Donation Section -->
<section id="donation" class="container mt-4">
    <h2>Donation History</h2>
    <?php
    include "../database/Db_Connection.php";

    $donationsql = "SELECT * FROM donors WHERE uid='$title'";
    $res = mysqli_query($conn, $donationsql);

    if (mysqli_num_rows($res) > 0) {
        while ($rw = mysqli_fetch_assoc($res)) {
            $date = $rw['date'];
            ?>
            <div class="card">
                <div class="card-body" style="text-align: justify; padding-left:200px;">
                    <p><i class="fas fa-info-circle"></i> <strong>Info:</strong> <?php
                        $did = $rw['donation_id'];
                        $dsql = "SELECT donation_name FROM donation WHERE id='$did'";
                        $rs = mysqli_query($conn, $dsql);
                        if (mysqli_num_rows($rs) > 0) {
                            $drw = mysqli_fetch_assoc($rs);
                            $donation_name = $drw['donation_name'];
                        }
                        echo $donation_name;
                        ?></p>
                    <p><i class="fas fa-calendar-alt"></i> <strong>Donation Date:</strong> <?php echo $date; ?> A.D.
                    </p>
                    <p><i class="fas fa-calendar-check"></i> <strong>Amount Donated:</strong> <?php echo $rw['amount']; ?>
                    </p>
                </div>
            </div>
            <?php
        }
    } else {
        echo "No donation history found.";
    }
    ?>
</section>

<!-- Sponsorship Section -->
<section id="sponsorship" class="container mt-4">
    <h2>Sponsorship Information</h2>
    <?php
    include "../database/Db_Connection.php";

    $sql = "SELECT mri.*, u.name, u.address, m.type, m.amount
            FROM sponsorship_register_info mri
            INNER JOIN user u ON mri.user_id = u.id
            INNER JOIN sponsorship m ON mri.sponsorship_id = m.id
            WHERE mri.user_id = $title";

    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $registeredDate = $row['date'];
        $expiryDate = date('Y-m-d', strtotime('+1 year', strtotime($registeredDate)));
        $daysRemaining = ceil((strtotime($expiryDate) - time()) / (60 * 60 * 24));
        if ($daysRemaining >= 365) {
            $daysRemaining = 364;
        }
        ?>
        <div class="card">
            <div class="card-body" style="font-size: 20px;">
                <p><strong>Name:</strong> <?php echo $row['name']; ?> </p>
                <p><strong>Address:</strong> <?php echo $row['address']; ?> </p>
                <p><strong>Sponsorship Type:</strong> <?php echo $row['type']; ?> </p>
                <p><strong>Sponsorship Amount:</strong> <?php echo $row['amount']; ?> </p>
                <p><strong>Account Created Date:</strong> <?php echo $registeredDate; ?></p>
                <p><strong>Days Remaining:</strong> <?php echo $daysRemaining; ?></p>
            </div>
        </div>
        <?php
    }
    if (mysqli_num_rows($result) == 0) {
        echo "<h1>No Sponsorship Available</h1>";
    }
    ?>
</section>

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
