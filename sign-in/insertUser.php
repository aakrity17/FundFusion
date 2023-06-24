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
        // reCAPTCHA verification successful, process the form data
        // Retrieve the form data
        $name = $_POST["name"];
        $address = $_POST["address"];
        $contact = $_POST["contact"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $passwordmd5 = md5($password);

        // Prepare the SQL statement
        $sql = "INSERT INTO user (name, address, Contact, username, email, password,role) VALUES ('$name', '$address', '$contact', '$username', '$email', '$passwordmd5','user')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "Data inserted successfully!";
            header("Location: ../index.php");
            exit();
        } else {
            echo $conn->error;
        }
    }

    
}
