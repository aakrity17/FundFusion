<?php
include "../database/Db_Connection.php";

// Check if the form is submitted and reCAPTCHA response is provided
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['g-recaptcha-response'])) {
    // Get the reCAPTCHA response from the POST data
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    // Verify the reCAPTCHA response
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => '6LeNecMmAAAAAGfPRZpnMPOp4abKoOEPsgBiHiEv',
        'response' => $recaptchaResponse
    );

    $options = array(
        'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response = json_decode($result);

    if ($response->success && $response->hostname === 'localhost') {
        $name = $_POST["name"];
        $address = $_POST["address"];
        $contact = $_POST["contact"];
        // $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordmd5 = md5($password);

        // Check if the user with the email already exists
        $sqlCheck = "SELECT * FROM user WHERE email = '$email' AND role='user'";
        $resultCheck = mysqli_query($conn, $sqlCheck);

        if (mysqli_num_rows($resultCheck) > 0) {
            echo "User with email '$email' already exists!";
        } else {
            // Insert the new user
            $sql = "INSERT INTO user (name, address, Contact, email, password, role,status) VALUES ('$name', '$address', '$contact', '$email', '$passwordmd5', 'user','active')";

            // Execute the query
            if ($conn->query($sql) === TRUE) {
                echo "Data inserted successfully!";

                // call php mailer

                // handle the error

                header("Location: ../index.php");
                exit();
            } else {
                echo $conn->error;
            }
        }
    }
} else {
    echo "error";
}
?>
