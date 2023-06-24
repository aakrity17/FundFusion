<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../dashboardLogin/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>FundFusion || Dashboard-login ||</title>
</head>
<body>
    <section class="side">
        <div class="logo-container">

            <img src="../dashboardLogin/images/logo3.png" alt="" id="logo">
        </div>
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">Welcome Back !!</p>
            <div class="separator"></div>
            <p class="welcome-message">Please, provide login credential to sign in</p>

            <form class="login-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-control">
                    <input type="text" placeholder="Username" name="username">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" placeholder="Password" name="password">
                    <i class="fas fa-lock"></i>
                </div>

                <button class="submit">Login</button>
            </form>
        </div>
    </section>
    
</body>
</html>
<?php

session_start();

include "../database/Db_Connection.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the values from the login form
    $providedUsername = $_POST['username'];
    $providedPassword = md5($_POST['password']);

    // Prepare and execute a SELECT statement
    $stmt = mysqli_prepare($conn, "SELECT * FROM user WHERE role='user' AND username = ? AND password = ?");
    
    // Check if preparing the statement was successful
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'ss', $providedUsername, $providedPassword);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        // Check if a matching record exists
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $name = $row['name'];
            $email = $row['email'];
            


            // Store user information in the session
            // $_SESSION['username'] = $providedUsername;
            $_SESSION['password'] = $providedPassword;
            $_SESSION['name'] = $name;

            //  $_SESSION['email'] = $email;


            
            // Redirect the user to the dashboard page
            header('Location: ../index.php');
            exit(); // Make sure to exit after the redirect
        } else {
            $errorMessage = "Invalid username or password.";
        }
        
        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        // Handle the error if preparing the statement failed
        $errorMessage = "An error occurred while preparing the statement.";
    }

    mysqli_close($conn);
}
?>