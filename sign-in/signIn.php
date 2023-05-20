<?php
header("Location:../index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>FundFusion || User-Registration</title>
</head>
<body>
    <section class="side">
    <div class="logo-container">
            <img src="./images/logo3.png" alt="" id="logo">
        </div>    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">Sign Up !!</p>
            <div class="separator"></div>
            <!-- <p class="welcome-message">Please, provide login credential to access dashboard.</p> -->

            <form class="login-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-control">
                    <input type="text" placeholder="Name" name="name">
                    <i class="fas fa-user"></i>
                </div>

                <div class="form-control" >
                    <input type="text" placeholder="Address" name="address">
                    <i class="fas fa-user"></i>
                </div>

                <div class="form-control">
                    <input type="text" placeholder="Contact" name="contact">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="text" placeholder="Username" name="username">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="text" placeholder="Email" name="email">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" placeholder="Password" name="password">
                    <i class="fas fa-lock"></i>
                </div>

                <button type="submit" class="submit">Sign Up</button>
            </form>
        </div>
    </section>
    
</body>
</html>