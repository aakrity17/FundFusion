<?php
include "../admin/routeconfig.php";
include "../database/Db_Connection.php";

$footerSql = "SELECT * FROM footer";
$footerResult = mysqli_query($conn, $footerSql);

if ($footerResult) {
    $row = mysqli_fetch_assoc($footerResult);
    
    $fb = $row['fb'];
    $twitter = $row['twitter'];
    $youtube = $row['youtube'];
    $google = $row['google'];
    $skype = $row['skype'];
    $address = $row['address'];
    $phone = $row['phone'];
    $fax = $row['fax'];
    $email = $row['email'];
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updatedFb = $_POST['fb'];
    $updatedTwitter = $_POST['twitter'];
    $updatedYoutube = $_POST['youtube'];
    $updatedGoogle = $_POST['google'];
    $updatedSkype = $_POST['skype'];
    $updatedAddress = $_POST['address'];
    $updatedPhone = $_POST['phone'];
    $updatedFax = $_POST['fax'];
    $updatedEmail = $_POST['email'];
    
    // Update query
    $updateSql = "UPDATE footer SET fb = '$updatedFb', twitter = '$updatedTwitter', youtube = '$updatedYoutube', google = '$updatedGoogle', skype = '$updatedSkype', address = '$updatedAddress', phone = '$updatedPhone', fax = '$updatedFax', email = '$updatedEmail' WHERE 1";
    
    if (mysqli_query($conn, $updateSql)) {

        echo "Values updated successfully.";
        set_time_limit(1000);
    } else {
        echo "Error updating values: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Team | FundFusion Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
    <style>
        .container {
            margin-left: 300px;
            margin-top: 30px;
        }

        .content-container {
            margin-left: 200px;
            /* padding-left: 300px; */


        }
        form{
            margin-top: 50px;
        }
    </style>
    <link rel="stylesheet" href="<?php echo $site_url ?>css/Dashboard.css" />

</head>

<body>
    <?php
    @include('../admin/partials/navigation.php');
    ?>

    <div class="container">
        <h3 style="margin: 10px; text-align:center;">Edit Footer</h3>

        <div class="content-container">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-floating">
                    <input type="text" class="form-control" name="fb" value="<?php echo $fb; ?>" required>
                    <label for="Facebook">Facebook</label>
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" name="twitter" value="<?php echo $twitter; ?>" required>
                    <label for="Twitter">Twitter</label>
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" name="youtube" value="<?php echo $youtube; ?>" required>
                    <label for="YouTube">YouTube</label>
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" name="google" value="<?php echo $google; ?>" required>
                    <label for="Google">Google</label>
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" name="skype" value="<?php echo $skype; ?>" required>
                    <label for="Skype">Skype</label>
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" name="address" value="<?php echo $address; ?>" required>
                    <label for="Address">Address</label>
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>" required>
                    <label for="Phone">Phone</label>
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" name="fax" value="<?php echo $fax; ?>" required>
                    <label for="Fax">Fax</label>
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" required>
                    <label for="Email">Email</label>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update Team</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
