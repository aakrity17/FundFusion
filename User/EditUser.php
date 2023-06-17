<?php
include "../admin/sessioncheck.php";
include "../admin/routeconfig.php";

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
    $role="admin";

    // Prepare the SQL statement
    if(status)
    $sql = "INSERT INTO user (name, address, Contact, username, email, password,role) VALUES ('$name', '$address', '$contact', '$username', '$email', '$passwordmd5', '$role')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
        // Redirect to another page after successful insertion
        header("Location:./Dashboard.php");
        exit();
    } else {
        echo "Something went wrong!". $conn->error;
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
    @include('../admin/partials/navigation.php')
?>

<div class="container">
    <section>
        <h2>User List</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th colspan="2">Modify</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Retrieve the user data from the database
                $sql = "SELECT * FROM user WHERE role = 'user'";
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
                        echo "<td> <button class='btn-delete'>Delete</button></td>"; // Add CSS class
                        echo "<td> <button class='btn-edit' onclick='editUser(" . $row["id"] . ")' data-user-id='" . $row["id"] . "'>Edit</button></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No users found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </section>

    <section>
        <?php if ($_SERVER["REQUEST_METHOD"] != "POST"): ?>
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

            <input type="submit" value="Update">
        </form>
        <?php endif; ?>
    </section>
</div>

<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.0.0-alpha3/js/all.min.js"></script>
<script src="<?php echo $site_url ?>js/Dashboard.js"></script>
<script>
    function editUser(userId) {
        // Find the table row corresponding to the selected user
        var row = document.querySelector("[data-user-id='" + userId + "']").closest("tr");

        // Fetch the user data from the row
        var name = row.cells[0].innerHTML;
        var address = row.cells[1].innerHTML;
        var contact = row.cells[2].innerHTML;
        var username = row.cells[3].innerHTML;
        var email = row.cells[4].innerHTML;
        var status;

        // Populate the form fields with the user data
        document.getElementById("name").value = name;
        document.getElementById("address").value = address;
        document.getElementById("contact").value = contact;
        document.getElementById("username").value = username;
        document.getElementById("email").value = email;


        
    }
</script>
</body>
</html>
