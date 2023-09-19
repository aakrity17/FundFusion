<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Update Failed</title>
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

        .failure-icon {
            color: #ff0000;
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
            background-color: #ff0000;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #ff0000;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="failure-icon">&#10008;</div>
        <h1>Failure!</h1>
        <?php
        // Check if the 'message' parameter is present in the URL
        if (isset($_GET['message'])) {
            $message = $_GET['message'];
            $decodedData = urldecode($message);
            $originalData = base64_decode($decodedData);
            echo '<p>' . $originalData . '</p>';
        } else {
            echo '<p>Something went wrong. No message provided.</p>';
        }
        ?>
        <a href="../index.php" class="back-button">Back to Dashboard</a>
    </div>
</body>
</html>
