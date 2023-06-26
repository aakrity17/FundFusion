<!DOCTYPE html>
<html>

<head>
    <title>Membership/Donors Profile</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* profile container  */
        .profile-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f5f5f5;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-heading {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .profile-details {
            margin-bottom: 20px;
        }

        .profile-details h2 {
            color: #333;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .profile-details p {
            margin: 5px 0;
            color: #666;
        }

        .profile-buttons {
            text-align: right;
        }

        .profile-buttons button {
            margin: 5px;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .profile-buttons button:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="profile-container">
        <h1 class="profile-heading">Aakrity Chapagai - Profile Details</h1>
        <div class="profile-details">
            <h2>Personal Information</h2>
            <p><i class="fas fa-id-card"></i> <strong>ID:</strong> 12345</p>
            <p><i class="fas fa-envelope"></i> <strong>Email:</strong> aakrity@gmail.com</p>
            <p><i class="fas fa-phone"></i> <strong>Phone Number:</strong> 981234566</p>
            <p><i class="fas fa-venus"></i> <strong>Gender:</strong> F</p>
        </div>
        <div class="profile-details">
            <h2>Account Information</h2>
            <p><i class="fas fa-info-circle"></i> <strong>Info:</strong> Renew your accounts via payment.</p>
            <p><i class="fas fa-calendar-alt"></i> <strong>Membership Expiry Date:</strong> 2024-02-27 A.D.</p>
            <p><i class="fas fa-calendar-check"></i> <strong>Account Created Date:</strong> 2020-12-06</p>
            <p><i class="fas fa-calendar-check"></i> <strong>Membership Renewed Date:</strong> 2023-02-28</p>
            <p><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> POKHARA 8, KASKI, NEPAL</p>
        </div>
        <div class="profile-buttons">
            <button class="password-button"><i class="fas fa-lock"></i> Change Password</button>
            <button class="activity-log-button"><i class="fas fa-history"></i> Activity Log</button>
        </div>
    </div>
</body>

</html>