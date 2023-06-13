<?php
include "../admin/routeconfig.php";
include "../admin/sessioncheck.php";
session_start();
?>

<nav class="navbar navbar-expand-lg navbar-light nav-bg fixed-top py-2 " id="mainNav">
        <div class="container-fluid">
            <!-- Logo -->
            <img src="<?php echo $site_url ?>img/Logo.png" class="logo">
            <a class="navbar-brand text-white" href="<?php echo $site_url ?>index.php"></a>


            <!-- Navigation links -->
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $site_url ?>index.php">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $site_url ?>Aboutus.php">
                            <i class="fas fa-info-circle"></i> About us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $site_url ?>Donation.php">
                            <i class="fas fa-donate"></i> Donation
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#our-team">
                            <i class="fas fa-users"></i> Our Team
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">
                            <i class="fas fa-project-diagram"></i> Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $site_url ?>Event.php">
                            <i class="fas fa-calendar-alt"></i> Events
                        </a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="#">
                            <i></i> 
                        </a>
                    </li>
                    
<?php if (isset($name) || isset($email)) : ?>
        <li class="nav-item"><a class="nav-link" href="#"><?php echo $name; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
    <?php else: ?>
        <li class="nav-item"><a class="nav-link" href="./sign-in/index.php">Sign in</a></li>
        <li class="nav-item"><a class="nav-link" href="./User/userlogin.php">Login</a></li>
    <?php endif; ?>   


    
                </ul>
            </div>
        </div>
    </nav>
