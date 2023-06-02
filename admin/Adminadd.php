<?php
include "./sessioncheck.php";
include "./routeconfig.php";

// Include the database connection file
include "../database/Db_Connection.php";

// Initialize variables
$name = $address = $contact = $username = $email = $password = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST["name"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $passwordmd5 = md5($password);

    // Prepare the SQL statement
    $sql = "INSERT INTO user (name, address, Contact, username, email, password) VALUES ('$name', '$address', '$contact', '$username', '$email', '$passwordmd5')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
        // Redirect to another page after successful insertion
        header("Location:./Dashboard.php");
        exit();
    } else {
        echo "Something went wrong!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $site_url ?>css/Dashboard.css" />
    <link rel="stylesheet" href="<?php echo $site_url ?>css/Adminadd.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.0.0-alpha3/css/all.min.css">


    <title>Document</title>
</head>
<body>
<?php
      @include('./partials/navigation.php')
      ?>
<div class="container">
<section>
    
        <h2>Add User</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required><br>

            <label for="address">Address:</label>
            <input type="text" name="address" id="address" required><br>

            <label for="contact">Contact:</label>
            <input type="text" name="contact" id="contact" required><br>

            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br>

            <input type="submit" value="Submit">
        </form>
    </section>


    <section >
    <h2>User List</h2>
    <table >
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Username</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Retrieve the user data from the database
            $sql = "SELECT * FROM user";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>" . $row["Contact"] . "</td>";
                    echo "<td>" . $row["username"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    // echo "<td><a href='edit.php?id=" . $row["id"] . "'><ion-icon name="help-outline"></ion-icon></a></td>"; // Edit button
                    echo "<td><a href='delete.php?id=" . $row["id"] . "'><i class='fas fa-trash'></i></a></td>"; // Delete button
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No users found</td></tr>";
            }
            ?>
        </tbody>
    </table>
    
</section>
</div>

      
</body>

<!-- <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script> -->
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.0.0-alpha3/js/all.min.js"></script>

    <script src="<?php echo $site_url ?>js/Dashboard.js"></script>

</html>