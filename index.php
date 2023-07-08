<?php
include "./admin/routeconfig.php";
include "./database/Db_Connection.php";
// session_start();
// if (isset($_SESSION['username']) && isset($_SESSION['name'])){

$sliderSql = "SELECT * FROM homepageslider WHERE id=1";
$sliderresult = mysqli_query($conn, $sliderSql);
while ($res = mysqli_fetch_array($sliderresult)) {
    $s1head = $res['s1head'];
    $s2head = $res['s2head'];
    $s3head = $res['s3head'];
    $s1content = $res['s1content'];
    $s2content = $res['s2content'];
    $s3content = $res['s3content'];
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>FundFusion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Main CSS-->
    <link rel="stylesheet" href="css/style.css">

    <!--fontawesome-->
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <!--google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!--Animate.css--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>

    <!---Navbar-->
    <?php
    include "index/indexnav.php";
    ?>
    <!---End of Navbar-->
    <!--Hero Section-->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">
            <!--Slide-1-->
            <div class="carousel-item active">
                <div class="carousel-container">

                    <h2 class="animate__animated animate__backInDown">
                        <?php echo $s1head; ?>
                    </h2>


                    <p class="animate__animated animate__fadeInUp">
                        <?php echo $s1content; ?>
                    </p>

                    <a href="./esewa/donate.php?title=<?php echo urlencode("Organization Donation"); ?>" class="btn hero-btn animate__animated animate__backInUp">
                        Donate us
                    </a>
                </div>
            </div>
            <!--End of Slide-1-->
            <!--Slide-1-->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__backInDown">
                        <span><?php echo $s2head; ?></span>
                    </h2>
                    <p class="animate__animated animate__fadeInUp">
                        <?php echo $s2content; ?>
                    </p>
                    <!-- **************************************** -->
                    <!-- Read more ma click garda aru text aaune banaune, using js -->
                    <a href="./esewa/donate.php?title=<?php echo urlencode("Organization Donation"); ?>" class="btn hero-btn animate__animated animate__backInUp">
                        Donate Us
                    </a>
                    <script>

                    </script>
                </div>
            </div>
            <!--End of Slide-1-->
            <!--Slide-1, First slide donate for good this one is second which automaticaly occurs-->

            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__backInDown">
                        <?php echo $s3head; ?>

                    </h2>
                    <p class="animate__animated animate__fadeInUp">
                        <?php echo $s3content; ?>

                    </p>
                    <a href="./esewa/donate.php?title=<?php echo urlencode("Organization Donation"); ?>" class="btn hero-btn animate__animated animate__backInUp">
                        Donate Us
                    </a>
                </div>
            </div>
            <!--End of Slide-1-->


            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon fas fa-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>

            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon fas fa-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>

            </a>

        </div>
    </section>
    <!--end of hero Section-->
    <!--About us-->
    <section id="about-us">
        <section class="mt-5" id="aboutus">
            <h6 style="text-align: center;">ABOUT US</h6>
            <h2 style="text-align: center;" class="mb-3">OUR MISSION | VISION &amp; PLANS</h2>

            <div class="container">
                <div class="row justify-content-center mb-5">
                    <!-- <div class="col-md-8 text-center heading-section">
                        <span style="text-align: center;">About Us</span>
                        <h2 style="text-align: center;" class="mb-3">Our Mission | Vision &amp; Plans</h2>
                    </div> -->
                </div>

                <!------>
                <div class="row tabs mt-4">
                    <div class="col-md-4">
                        <ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
                            <li class="nav-item text-left">
                                <a class="nav-link active py-4" data-toggle="tab" href="#about-1">About</a>
                            </li>
                            <li class="nav-item text-left">
                                <a class="nav-link py-4" data-toggle="tab" href="#about-2">Our Beginning</a>
                            </li>
                            <li class="nav-item text-left">
                                <a class="nav-link py-4" data-toggle="tab" href="#about-3">Our Mission</a>
                            </li>
                            <li class="nav-item text-left">
                                <a class="nav-link py-4" data-toggle="tab" href="#about-4">Our Vision</a>
                            </li>
                            <li class="nav-item text-left">
                                <a class="nav-link py-4" data-toggle="tab" href="#about-5">Our Mandate</a>
                            </li>
                            <li class="nav-item text-left">
                                <a class="nav-link py-4" data-toggle="tab" href="#about-6">Our Plans</a>
                            </li>
                        </ul>
                    </div>
                    <!----->
                    <div class="col-md-8">
                        <div class="tab-content">
                            <div class="tab-pane container p-0 active" id="about-1">

                                <!-- ABOUT US WALA PAGE -->
                                <div class="img" style="background-image: url(img/about.jpg);"></div>
                                <h3><a href="about-us">About Us</a></h3>
                                <p>Welcome to our charity app! We are a team of passionate individuals dedicated to making a
                                    positive impact in the world. Our mission is to connect people with the causes they care
                                    about and make it easy for them to support those causes.

                                </p>
                            </div>


                            <!----->
                            <!-- PLANE WALA PAGE -->

                            <div class="tab-pane container p-0" id="about-2">

                                <div class="img" style="background-image: url(img/begi.jpeg);"></div>

                                <h3><a href="#">Our Beginning</a></h3>
                                <p>After months of hard work, the charity app was finally ready,
                                    to the public for the first time.
                                    From that moment on, our charity app has been on a mission to make charitable giving
                                    more accessible and impactful. We are proud of our beginning, and we look forward to
                                    continuing to make a difference in the lives of people and communities around the world.
                                </p>
                            </div>
                            <!----->
                            <!-- OUT MISSION WALA PAGE -->

                            <div class="tab-pane container p-0" id="about-3">
                                <div class="img" style="background-image: url(img/mission.jpg);"></div>
                                <h3><a href="#">Our Mission</a></h3>
                                <p>At our charity app, our mission is to make charitable giving more accessible,
                                    transparent, and impactful. We believe that everyone has the power to make a difference,
                                    regardless of their background or financial situation.

                                    Our app is designed to connect people with the causes they care about and make it easy
                                    for them to support those causes. We partner with a wide range of non-profit
                                    organizations to provide our users with a diverse range of options for giving back.</p>
                            </div>
                            <!----->
                            <div class="tab-pane container p-0" id="about-4">
                                <div class="img" style="background-image: url(img/vision.jpg);"></div>
                                <h3><a href="#">Our Vision</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac sem sed arcu lobortis
                                    tempor.
                                    Fusce vel magna id lorem finibus eleifend. Suspendisse potenti. Aenean ultrices
                                    malesuada justo,
                                    euismod consequat lorem aliquam eget..</p>
                            </div>
                            <!----->
                            <div class="tab-pane container p-0" id="about-5">
                                <div class="img" style="background-image: url(img/mandate.jpg);"></div>
                                <h3><a href="#">Our Mandate</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac sem sed arcu lobortis
                                    tempor.
                                    Fusce vel magna id lorem finibus eleifend. Suspendisse potenti. Aenean ultrices
                                    malesuada justo,
                                    euismod consequat lorem aliquam eget.</p>
                            </div>
                            <!----->
                            <div class="tab-pane container p-0" id="about-6">
                                <div class="img" style="background-image:url(img/plan.jpg);"></div>
                                <h3><a href="#">Our Plans</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac sem sed arcu lobortis
                                    tempor. Fusce vel magna id lorem finibus eleifend. Suspendisse potenti. Aenean ultrices
                                    malesuada justo, euismod consequat lorem aliquam eget..</p>
                            </div>

                            <!-- - -->
                        </div>
                    </div>

                </div>
            </div>
            </div>
        </section>
        <hr />

        <!-- End About us -->


        <!-- Volunteer section -->
        <section>
            <h1 style="text-align: center;">Become a Volunteer</h1>

            <div class="container my-4">
                <div class="row">
                    <div class="col-6">
                        <?php
                        if (isset($_GET['status'])) {
                            echo '<h3 style="color:green">!!Your application is submitted Successfully!!</h3>';
                        }
                        ?>
                        <!-- <h1 style="text-align: center;">Become a Volunteer</h1> -->
                        <form action="newvolunteer.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control" name="full_name" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email_address" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="phone_number" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="occupation" placeholder="Occupation">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="col-6">
                        <img src="img/2.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- Volunteer section end -->
        <hr />
        </br>


        <!-- Essentials Donation Section -->
        <section>
            <h1 class="text-uppercase">Essentials Donation
                <style>
                    h1 {
                        text-align: center;
                    }
                </style>
            </h1>
            <p style="text-align: center;">Donation can be any kind of aid that helps.</p>

            <div class="w3-content w3-display-container" style="max-width:800px; margin: 0 auto;">
                <div class="mySlides">
                    <img src="./img/6.jpg" style="width:100%">
                    <div class="caption">
                        <h2>Donate Study Materials and Stationaries</h2>
                        <div class="btn-container">
                            <a href="Essentials/Essentials.php?title=<?php echo urlencode('Study Materials'); ?>" class="btn">Register for Donation</a>
                        </div>
                    </div>
                </div>

                <div class="mySlides">
                    <img src="./img/5.jpg" style="width:100%">
                    <div class="caption">
                        <h2>Donate Clothes and Uniforms</h2>
                        <div class="btn-container">
                            <a href="Essentials/Essentials.php?title=<?php echo urlencode('Clothes & Uniforms'); ?>" class="btn">Register for Donation</a>
                        </div>
                    </div>
                </div>

                <div class="mySlides">
                    <img src="./img/4.jpg" style="width:100%">
                    <div class="caption">
                        <h2>Donate Medicines snd Aids</h2>
                        <!-- <p>Donate Medicines snd Aids</p> -->
                        <div class="btn-container">
                            <a href="Essentials/Essentials.php?title=<?php echo urlencode('Medicine & Aids'); ?>" class="btn">Register for Donation</a>
                        </div>
                    </div>
                </div>

                <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                </div>
            </div>

            <script>
                var slideIndex = 1;
                showDivs(slideIndex);

                function plusDivs(n) {
                    showDivs(slideIndex += n);
                }

                function currentDiv(n) {
                    showDivs(slideIndex = n);
                }

                function showDivs(n) {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("demo");
                    if (n > x.length) {
                        slideIndex = 1
                    }
                    if (n < 1) {
                        slideIndex = x.length
                    }
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" w3-white", "");
                    }
                    x[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " w3-white";
                }
            </script>

        </section>
        <br />
        <hr />
        <!-- End Of -->


        <section id="projects">
            <div class="donation-banner">
                <h1 style="text-align:center;">PROJECTS</h1>
            </div>
            <?php
            include "database/Db_Connection.php";
            $currentProjectsSql = "SELECT * from projects where p_start_date <= cast(NOW() as date) AND cast(NOW() as date) <= p_end_date;";
            $currentProjectRecords = $conn->query($currentProjectsSql);

            $upcomingProjectsSql = "SELECT * from projects where p_start_date >= cast(NOW() as date)";
            $upcomingProjectRecords = $conn->query($upcomingProjectsSql);

            $pastProjectsSql = "SELECT * from projects where p_end_date <= cast(NOW() as date)";
            $pastProjectRecords = $conn->query($pastProjectsSql);
            ?>



            <div class="container">
                <div class="row">
                    <?php $count = 0; ?>
                    <?php foreach ($pastProjectRecords as $pastData) : ?>
                        <!--single Project-->
                        <div class="col-10 col-md-6 col-lg-4">
                            <div class="project-container p-5 outline">
                                <img class="img-fluid grow" src="img/projects/<?php echo $pastData['thumbnail']; ?>">
                                <a href="ProjectDetail.php/?id=<?php echo $pastData['id']; ?>" class="donation text-capitalize">View More</a>
                                <h5 class="text-capitalize text-center my-2"><?php echo $pastData['title']; ?></h5>
                            </div>
                        </div>
                        <?php $count++; ?>
                        <?php if ($count == 3) break; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        </br>
        </br>
        <hr />


        <!-- Membership card -->
        <section>
            <h2 class="text-center">MEMBERSHIP</h2>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card silver-card">
                            <div class="card-header bg-secondary text-white">
                                Silver Tier
                            </div>
                            <img src="./img/bronze.png" class="card-img-top" alt="Silver Tier">
                            <div class="card-body">
                                <h5 class="card-title">About Silver Tier</h5>
                                <p class="card-text">In this beginner-friendly tier,By donating between $1 to $9 you will become a member of our silver Tier.</p>
                                <ul>
                                    <li>Only updates</li>
                                    <li>Chat community</li>
                                    <li>One movie free ticket</li>
                                </ul>
                                <a href="Donors/paymentGateway.php?title=<?php echo "Silver Membership"; ?>" class="btn btn-primary">Join</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card gold-card">
                            <div class="card-header bg-warning text-white">
                                Gold Tier
                            </div>
                            <img src="./img/gold.png" class="card-img-top" alt="Gold Tier">
                            <div class="card-body">
                                <h5 class="card-title">About Gold Tier</h5>
                                <p class="card-text">By donating $10 monthly, you will become a member of our Gold Tier.</p>
                                <ul>
                                    <li>All Silver Tier benefits</li>
                                    <li>Exclusive monthly newsletter</li>
                                    <li>Personalized thank you message</li>
                                </ul>
                                <a href="Donors/paymentGateway.php?title=<?php echo "Gold Membership"; ?>" class="btn btn-primary">Join</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card diamond-card">
                            <div class="card-header bg-danger text-white">
                                Platinum tier
                            </div>
                            <img src="./img/Platinum-Badge.png" class="card-img-top" alt="Diamond Tier">
                            <div class="card-body">
                                <h5 class="card-title">About Platinum Tier</h5>
                                <p class="card-text">For a monthly donation of $20 or more, you will receive the exclusive benefits of our Platinum.</p>
                                <ul>
                                    <li>All Silver and Gold Tier benefits</li>
                                    <li>Personalized thank you message</li>
                                    <li>Special recognition on our website</li>
                                </ul>
                                <a href="Donors/paymentGateway.php?title=<?php echo "Platinum Membership"; ?>" class="btn btn-primary">Join</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <hr>
        </section>
        <h2 class="text-center">Our Team</h2>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, repellendus possimus id sapiente sunt ab mollitia cum.</p>
        <!--  -->
        <!-- Team Section-->
        <?php
        $teamsSql = "SELECT * FROM teams";
        $teamsresult = mysqli_query($conn, $teamsSql);
        ?>
        <section class="team">

            <section id="our-team">
                <div class="container">
                    <div class="section-title">
                        <!-- <h2 class="text-center">Our Team</h2> -->
                    </div>
                    <div class="row">
                        <?php while ($rs = mysqli_fetch_array($teamsresult)) { ?>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="team-1">
                                    <div class="pic">
                                        <img src="img/member1.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><?php echo $rs['name']; ?></h4>
                                        <span><?php echo $rs['skill']; ?></span>
                                        <div class="social">
                                            <a href="<?php echo $rs['twitter']; ?>">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            <a href="<?php echo $rs['fb']; ?>">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                            <a href="<?php echo $rs['insta']; ?>">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                            <a href="<?php echo $rs['linkedin']; ?>">
                                                <i class="fab fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
        </section>
        <hr>

        <style>
            .full-width-footer {
                /* background: rgba(153, 72, 252, 0.98); */
                padding: 20px;
                color: white;
                font-size: 14px;
                padding-left: 500px;

                text-align: center;
            }
        </style>
        </head>

        <!-- <body> -->

        <footer style="background-color: purple">
            <?php include './Footer/indexFooter.php' ?>
        </footer>

        <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
                showDivs(slideIndex += n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                if (n > x.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = x.length
                };
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                x[slideIndex - 1].style.display = "block";
            }
        </script>










        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<!-- <?php
        // }
        ?> -->


</html>