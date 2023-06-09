<?php
session_start(); // Start the session at the beginning of the script

include "../database/Db_Connection.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the values from the login form
    $providedEmail = $_POST['email'];
    $providedPassword = md5($_POST['password']);

    // Prepare and execute a SELECT statement
    $stmt = mysqli_prepare($conn, "SELECT * FROM user WHERE role='admin' AND email = ? AND password = ?");

    // Check if preparing the statement was successful
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'ss', $providedEmail, $providedPassword);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // Check if a matching record exists
        if (mysqli_num_rows($result) > 0) {
            // Fetch the row from the result set
            $row = mysqli_fetch_assoc($result);

            // Store user information in the session
            // $_SESSION['username'] = $providedUsername;
            $_SESSION['password'] = $providedPassword;
            $_SESSION['role'] = "admin";

            // Close the statement
            mysqli_stmt_close($stmt);
            mysqli_close($conn);

            // Redirect the user to the dashboard page
            header('Location: ../admin/Dashboard.php');
            exit(); // Make sure to exit after the redirect
        } else {
            $errorMessage = "Invalid username or password.";
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        $errorMessage = "Failed to prepare the statement.";
    }

    mysqli_close($conn);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>FundFusion || Dashboard-login</title>
</head>
<body>
    <section class="side">
        <div class="logo-container">
            <img src="./images/logo3.png" alt="" id="logo">
        </div>
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">Dashboard Login</p>
            <div class="separator"></div>
            <p class="welcome-message">Please provide login credentials to access the dashboard.</p>

            <form class="login-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-control">
                    <input type="text" placeholder="Email" name="email">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" placeholder="Password" name="password">
                    <i class="fas fa-lock"></i>
                </div>

                <button class="submit">Login</button>
            </form>

            <?php if (isset($errorMessage)): ?>
                <p class="error-message"><?php echo $errorMessage; ?></p>
            <?php endif; ?>
        </div>
    </section>
    
</body>
</html>
