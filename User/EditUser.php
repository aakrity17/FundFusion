<?php
include "../admin/sessioncheck.php";
include "routeconfig.php";
include "../database/Db_Connection.php";

// Initialize variables
$name = $address = $contact = $email = $password = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $userId = $_POST["user_id"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    // $username = $_POST["username"];
    $email = $_POST["email"];

    // Prepare the SQL statement
    $sql = "UPDATE user SET name = '$name', address = '$address', Contact = '$contact', email = '$email', role = 'user' WHERE id = '$userId'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Data updated successfully!";
        header("Location: EditUser.php");
        exit; // Important: Terminate the script after the redirect
    } else {
        echo "Something went wrong!" . $conn->error;
    }
}

// Check if the delete button is clicked
if (isset($_GET["delete_id"])) {
    $deleteId = $_GET["delete_id"];

    // Prepare the SQL statement
    $deleteSql = "UPDATE user SET status='inactive' WHERE id = '$deleteId'";

    // Execute the query
    if ($conn->query($deleteSql) === TRUE) {
        echo "Data deleted successfully!";
        // Redirect to the same page to update the user list
        header("Location: " . $_SERVER['PHP_SELF']);
        exit; // Important: Terminate the script after the redirect
    } else {
        echo "Something went wrong!" . $conn->error;
    }
}

// Retrieve the user data from the database
$sql = "SELECT * FROM user WHERE role = 'user' AND status='active'";
$result = $conn->query($sql);
$users = [];

if ($result->num_rows > 0) {
    // Fetch the user data and store it in an array
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
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
    <?php include '../admin/partials/navigation.php'; ?>

    <div class="container">
        <section>
            <h2>User List</h2>
            <?php if (!empty($users)) : ?>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <!-- <th>Username</th> -->
                            <th>Email</th>
                            <th colspan="2">Modify</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?php echo $user["name"]; ?></td>
                                <td><?php echo $user["address"]; ?></td>
                                <td><?php echo $user["Contact"]; ?></td>
                                <td><?php echo $user["email"]; ?></td>
                                <td>
                                    <button class="btn-delete" onclick="deleteUser(<?php echo $user["id"]; ?>)">Delete</button>
                                </td>
                                <td>
                                    <button class="btn-edit" onclick="editUser(<?php echo $user["id"]; ?>)" data-user-id="<?php echo $user["id"]; ?>">Edit</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <p>No users found</p>
            <?php endif; ?>
        </section>

        <section>
            <h2>Update User</h2>
            <form id="update-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="hidden" name="user_id" id="user-id" value="">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required><br>

                <label for="address">Address:</label>
                <input type="text" name="address" id="address" required><br>

                <label for="contact">Contact:</label>
                <input type="text" name="contact" id="contact" required><br>

                <!-- <label for="username">Username:</label>
                <input type="text" name="username" id="username" required><br> -->

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required><br>

                <button type="submit">Update</button>
            </form>
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
            // var username = row.cells[3].innerHTML;
            var email = row.cells[3].innerHTML;

            // Populate the form fields with the user data
            document.getElementById("user-id").value = userId;
            document.getElementById("name").value = name;
            document.getElementById("address").value = address;
            document.getElementById("contact").value = contact;
            // document.getElementById("username").value = username;
            document.getElementById("email").value = email;
        }

        function deleteUser(userId) {
            var confirmation = confirm("Are you sure you want to delete this user?");

            if (confirmation) {
                // Redirect to the delete page with the user ID
                window.location.href = "<?php echo $_SERVER['PHP_SELF']; ?>?delete_id=" + userId;
            }
        }

        // Submit the form on button click
        document.getElementById("update-form").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent form submission

            // You can add additional validation if needed

            // Submit the form
            this.submit();
        });
    </script>
</body>
</html>
