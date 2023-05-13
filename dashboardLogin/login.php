<?php
// Assuming you have the database credentials
$host = 'localhost';
$dbName = 'FundFusion';
$username = 'root';
$password = '';

// Connect to the database
$conn = new mysqli($host, $username, $password, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the values from the login form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $providedUsername = $_POST['username'];
    $providedPassword = $_POST['password'];

    // Prepare and execute a SELECT statement
    $stmt = $conn->prepare("SELECT * FROM user WHERE Username = ? AND Password = ?");
    $stmt->bind_param('ss', $providedUsername, $providedPassword);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a matching record exists
    if ($result->num_rows > 0) {
        header('Location: ../Dashboard.php');

        exit(); // Make sure to exit after the redirect
        // echo "Login successful!";
        // Perform further actions here, such as redirecting to the dashboard
    } else {
        echo "Invalid username or password.";
    }

    // Close the statement and the database connection
    $stmt->close();
    $conn->close();
}
?>
