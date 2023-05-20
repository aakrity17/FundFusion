<?php
session_start();

// Assuming you have the database credentials
// $host = 'localhost';
// $dbName = 'FundFusion';
// $username = 'root';
// $password = '';

// Connect to the database
// $conn = new mysqli($host, $username, $password, $dbName);
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
include "../database/Db_Connection.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the values from the login form
    $providedUsername = $_POST['username'];
    $providedPassword = $_POST['password'];

    // Prepare and execute a SELECT statement
    $stmt = $conn->prepare("SELECT * FROM user WHERE Username = ? AND Password = ?");
    $stmt->bind_param('ss', $providedUsername, $providedPassword);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a matching record exists
    if ($result->num_rows > 0) {
        // Store user information in the session
        $_SESSION['username'] = $providedUsername;
        
        // Redirect the user to the dashboard page
        header('Location: ../admin/Dashboard.php');
        exit(); // Make sure to exit after the redirect
    } else {
        $errorMessage = "Invalid username or password.";
    }

    // Close the statement
    $stmt->close();
    $conn->close();
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
                    <input type="text" placeholder="Username" name="username">
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
