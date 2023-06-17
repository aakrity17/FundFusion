<?php
include "../sessioncheck.php";
include "../routeconfig.php";
include "Db_Connection.php";

// Perform the database query to fetch team information
$teamsSql = "SELECT * FROM teams";
$teamsresult = mysqli_query($conn, $teamsSql);

// Check if the query was successful
if (!$teamsresult) {
    die("Error: " . mysqli_error($conn));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the updated team data from the form
    $teamData = $_POST['team'];

    // Perform the database update for each team member
    foreach ($teamData as $team) {
        $id = $team['id'];
        $name = mysqli_real_escape_string($conn, $team['name']);
        $skill = mysqli_real_escape_string($conn, $team['skill']);
        $fb = mysqli_real_escape_string($conn, $team['fb']);
        $insta = mysqli_real_escape_string($conn, $team['insta']);
        $linkedin = mysqli_real_escape_string($conn, $team['linkedin']);
        $twitter = mysqli_real_escape_string($conn, $team['twitter']);

        // Update the team information in the database
        $updateSql = "UPDATE teams SET name='$name', skill='$skill', fb='$fb', insta='$insta', linkedin='$linkedin', twitter='$twitter' WHERE id='$id'";
        $updateResult = mysqli_query($conn, $updateSql);

        // Check if the update query was successful
        if (!$updateResult) {
            die("Error updating team: " . mysqli_error($conn));
        }
    }

    // Redirect back to the Teams.php page after updating
    header("Location: Teams.php");
    exit();
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
            margin-left:400px;
            padding-left: 300px;
        }

        .content-container {
            margin-left: 400px;
            padding-left: 300px;


        }
    </style>
        <link rel="stylesheet" href="<?php echo $site_url ?>css/Dashboard.css" />

</head>
<body>
    <?php
    @include('../partials/navigation.php');
    ?>

    <div class="container">
        <h3>Edit Team</h3>
    </div>

    <div class="content-container">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <?php while ($rs = mysqli_fetch_array($teamsresult)) { ?>
                <div class="mb-3">
                    <input type="hidden" name="team[<?php echo $rs['id']; ?>][id]" value="<?php echo $rs['id']; ?>">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="team[<?php echo $rs['id']; ?>][name]" value="<?php echo $rs['name']; ?>" required>
                        <label for="team_name">Team Member Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="team[<?php echo $rs['id']; ?>][skill]" value="<?php echo $rs['skill']; ?>" required>
                        <label for="team_skill">Skill</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="team[<?php echo $rs['id']; ?>][fb]" value="<?php echo $rs['fb']; ?>">
                        <label for="team_fb">Facebook URL</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="team[<?php echo $rs['id']; ?>][insta]" value="<?php echo $rs['insta']; ?>">
                        <label for="team_insta">Instagram URL</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="team[<?php echo $rs['id']; ?>][linkedin]" value="<?php echo $rs['linkedin']; ?>">
                        <label for="team_linkedin">LinkedIn URL</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="team[<?php echo $rs['id']; ?>][twitter]" value="<?php echo $rs['twitter']; ?>">
                        <label for="team_twitter">Twitter URL</label>
                    </div>
                </div>
            <?php } ?>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update Team</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
