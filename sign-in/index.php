<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>FundFusion || User Registration</title>
</head>
<body>
    <section class="side">
        <div class="logo-container">
            <img src="../images/logo3.png" alt="" id="logo">
        </div>
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">Sign Up</p>
            <div class="separator"></div>
            
            <!-- <p class="welcome-message">Please, provide login credential to access dashboard.</p> -->

            <form class="login-form" method="POST" action="../PHPMailer/send.php" onsubmit="return validateForm()">
                <div class="form-control">
                    <input type="text" placeholder="Name" name="name">
                    <i class="fas fa-user"></i>
                </div>

                <div class="form-control" >
                    <input type="text" placeholder="Address" name="address">
                    <i class="fa fa-map-marker"></i>
                </div>

                <div class="form-control">
                    <input type="text" placeholder="Contact" name="contact">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="form-control">
                    <input type="email" placeholder="Email" name="email">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="form-control">
                    <input type="password" placeholder="Password" name="password">
                    <i class="fas fa-lock"></i>
                </div>

                <div class="form-control">
                    <div class="g-recaptcha" data-sitekey="6LeNecMmAAAAADMVrb8PoAfWhcJQn8yl2nws1myk" data-callback="enableSignUpButton"></div>
                </div>

                <button id="signupBtn" type="submit" class="submit" disabled name="submit">Sign Up</button>
            </form>
        </div>
    </section>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        function validateForm() {
            const phoneNumber = document.querySelector('input[name="contact"]').value;
            const password = document.querySelector('input[name="password"]').value;
            
            const phoneRegex = /^\d{10}$/;
            const passwordRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
            
            if (!phoneRegex.test(phoneNumber)) {
                alert("Enter a valid phone number (exactly 10 digits).");
                return false;
            }
            
            if (!passwordRegex.test(password)) {
                alert("Password must have at least one uppercase, one lowercase, one symbol, one number, and be at least 8 characters long.");
                return false;
            }
            
            return true;
        }

        function enableSignUpButton() {
            document.getElementById("signupBtn").disabled = false;
        }
    </script>
</body>
</html>
