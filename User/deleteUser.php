<?php
include "../admin/sessioncheck.php";
include "../database/Db_Connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the user ID from the request
    $userId = $_POST["user_id"];

    // Prepare the SQL statement
    $sql = "DELETE FROM user WHERE id = '$userId'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "User deleted successfully!";
    } else {
        echo "Something went wrong!" . $conn->error;
    }
}
?>
