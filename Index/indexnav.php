<?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light nav-bg fixed-top py-2 " id="mainNav">
        <div class="container-fluid">
            <!-- Logo -->
            <img src="<?php echo $site_url ?>img/Logo.png" class="logo" href="<?php echo $site_url ?>index.php"> <!-- Inline CSS to hide the logo -->
            <a class="navbar-brand text-white" ></a>
            <button class="navbar-toggler" type="button" id="toggleNavBtn">
            <span class="navbar-toggler-icon"></span>
        </button>

            <!-- Navigation links -->
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $site_url ?>index.php">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $site_url ?>Donation.php">
                            <i class="fas fa-donate"></i> Donation
                        </a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href=<?php echo $site_url . "Projects.php" ;?>>
                            <i class="fas fa-project-diagram"></i> Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $site_url ?>Event.php">
                            <i class="fas fa-calendar-alt"></i> Events
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $site_url ?>sponsor/Sponsorship.php">
                            <i class="fas fa-hand-holding-heart"></i> Sponsor
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $site_url ?>Donors/donors.php">
                            <i class="fas fa-users"></i> Donors
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $site_url ?>contact.php">
                            <i class="fas fa-envelope"></i> Contact Us
                        </a>
                    </li>
                    <li class="nav-item mx-4" style="width:50px;">
                        <a class="nav-link" href="#">
                            <i></i> 
                        </a>
                    </li>
                    
<?php if (isset($_SESSION['name']) || isset($email)) : ?>
        <li class="nav-item"><a class="nav-link" href="./Donors/donors-details.php?title=<?php echo urlencode($_SESSION['id']); ?>"><?php echo $_SESSION['name']; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo $site_url."User/logout.php" ?>">Logout</a></li>
    <?php else: ?>
        <li class="nav-item"><a class="nav-link" href="./sign-in/index.php">Sign in</a></li>
        <li class="nav-item"><a class="nav-link" href="./User/userlogin.php">Login</a></li>
    <?php endif; ?>   


    
                </ul>
            </div>
        </div>
    </nav>

    <!-- <script>
    // JavaScript to handle the toggle functionality
    $(document).ready(function () {
        $("#toggleNavBtn").click(function () {
            $("#myNavbar").toggleClass("show");
        });
    });
</script> -->