<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Updated Successfully</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 400px;
        }

        .success-icon {
            color: #2b6777;
            font-size: 80px;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
            font-size: 18px;
            margin: 20px 0;
        }

        .back-button {
            background-color: #2b6777;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #2b6777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-icon">&#10004;</div>
        <h1>Success!</h1>
        <?php
        // Check if the 'message' parameter is present in the URL
        if (isset($_GET['message'])) {
            $message = $_GET['message'];
            $decodedData = urldecode($message);

$originalData = base64_decode($decodedData);
            echo '<p>' .$originalData  . '</p>';
        } else {
            echo '<p>Something went wrong. No message provided.</p>';
        }
        ?>
        <a href="../index.php" class="back-button">Back to Home Page</a>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "../index.php";
        }, 3000);
    </script>
</body>
</html>
