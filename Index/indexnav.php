<?php
<<<<<<< HEAD
include "../admin/routeconfig.php";
include "../admin/sessioncheck.php";
session_start();
=======
include "./admin/routeconfig.php";
>>>>>>> c82854db5107beb7048059d063f5e65b535a9f50
?>

<nav class="navbar navbar-expand-lg navbar-light nav-bg fixed-top py-2" id="mainNav">
        <div class="container">
            <!-- Logo -->
<<<<<<< HEAD
            <img src="<?php echo $site_url ?>img/Logo.png" class="logo">
            <a class="navbar-brand text-white" href="<?php echo $site_url ?>index.php"></a>
=======
            <img src="./img/Logo.png" class="logo">
            <a class="navbar-brand text-white" href="#"></a>
>>>>>>> c82854db5107beb7048059d063f5e65b535a9f50


            <!-- Navigation links -->
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">
                            <i class="fas fa-info-circle"></i> About us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Donation.php">
                            <i class="fas fa-donate"></i> Donation
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#our-team">
                            <i class="fas fa-users"></i> Our Team
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">How can you Help
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Sponsor</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Volunteer</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Donate</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="projectDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-project-diagram"></i> Projects
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="projectDropdown">
                            <li><a class="dropdown-item" href="live-events.html">Latest Projects</a></li>
                            <li><a class="dropdown-item" href="upcoming-projects.html">Upcoming Projects</a></li>
                            <li><a class="dropdown-item" href="past-projects.html">Past Projects</a></li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="./Event.php">
                            <i class="fas fa-calendar-alt"></i> Events
                        </a>
                    </li>
<<<<<<< HEAD
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


    
=======
                    <?php if (isset($name)) : ?>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-user"></i><?php echo $name; ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="./User/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                    <?php else : ?>
                        <li class="nav-item"><a class="nav-link" href="./sign-in/index.php"><i class="fas fa-sign-in-alt"></i>Sign in</a></li>
                        <li class="nav-item"><a class="nav-link" href="User/userlogin.php"><i class="fas fa-user"></i>Login</a></li>
                    <?php endif; ?>

>>>>>>> c82854db5107beb7048059d063f5e65b535a9f50
                </ul>
            </div>
        </div>
    </nav>
