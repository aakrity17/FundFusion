<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['name']) && isset($_SESSION['username'])) {
    $name = $_SESSION['name'];
}
include "./admin/routeconfig.php";
include "./database/Db_Connection.php";

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
        <!-- <section class="mt-5" id="aboutus"> -->




        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section">
                    <span>About Us</span>
                    <h2 class="mb-3">Our Mission | Vision & Plans</h2>
                </div>
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
    <!-- End About us -->
    <!-- Volunteer section -->
    <hr />
    <section>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <?php
                    if (isset($_GET['status'])) {
                        echo '<h3 style="color:green">!!Your application is submitted Successfully!!</h3>';
                    }
                    ?>
                    <h1 style="text-align: center;">Become a Volunteer</h1>
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
    <!-- Our project started -->
    <section id="projects">

        <div class="container">
            <div class="row my-3">
                <div class="col-10 mx-auto text-center">
                    <h1 class="text-uppercase">Our Latest Projects</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, provident.</p>
                </div>
            </div>
            <!----->
            <div class="row">
                <!--single Project-->
                <div class="col-10 col-md-6 col-lg-4">
                    <div class="project-container p-5 outline">
                        <img src="img/8.jpg" class="img-fluid grow" alt="">
                        <a herf="#" class="donation text-capitalize">Donate Now</a>
                    </div>
                    <h4 class="text-capitalize text-center my-2">Project-1</h4>
                    <h6 class="text-center">
                        Food
                    </h6>
                </div>
                <!--End of Single Project-->
                <!--single Project-->
                <div class="col-10 col-md-6 col-lg-4">
                    <div class="project-container p-5 outline">
                        <img src="img/p4.jpg" class="img-fluid grow" alt="">
                        <a herf="#" class="donation text-capitalize">Donate Now</a>
                    </div>
                    <h4 class="text-capitalize text-center my-2">Project-2</h4>
                    <h6 class="text-center">
                        water
                    </h6>
                </div>
                <!--End of Single Project-->
                <!--single Project-->
                <div class="col-10 col-md-6 col-lg-4">
                    <div class="project-container p-5 outline">
                        <img src="img/p3.jpg" class="img-fluid grow" alt="">
                        <a herf="#" class="donation text-capitalize">Donate Now</a>
                    </div>
                    <h4 class="text-capitalize text-center my-2">Project-3</h4>
                    <h6 class="text-center">
                        Medicine
                    </h6>
                </div>
                <!--End of Single Project-->
                <!--single Project-->
                <div class="col-10 col-md-6 col-lg-4">
                    <div class="project-container p-5 outline">
                        <img src="img/p4.jpg" class="img-fluid grow" alt="">
                        <a herf="#" class="donation text-capitalize">Donate Now</a>
                    </div>
                    <h4 class="text-capitalize text-center my-2">Project-4</h4>
                    <h6 class="text-center">
                        Education
                    </h6>
                </div>
                <!--End of Single Project-->
                <!--single Project-->
                <div class="col-10 col-md-6 col-lg-4">
                    <div class="project-container p-5 outline">
                        <img src="img/3.jpg" class="img-fluid grow" alt="">
                        <a herf="#" class="donation text-capitalize">Donate Now</a>
                    </div>
                    <h4 class="text-capitalize text-center my-2">Project-5</h4>
                    <h6 class="text-center">

                    </h6>
                </div>
                <!--End of Single Project-->
                <!--single Project-->
                <div class="col-10 col-md-6 col-lg-4">
                    <div class="project-container p-5 outline">
                        <img src="img/2.jpg" class="img-fluid grow" alt="">
                        <a herf="#" class="donation text-capitalize">Donate Now</a>
                    </div>
                    <h4 class="text-capitalize text-center my-2">Project-6</h4>
                    <h6 class="text-center">
                        Health
                    </h6>
                </div>
                <!--End of Single Project-->

            </div>
        </div>
    </section>




    <!---End of the Projects Section-->



    <!-- Membership card -->
    <section>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            .card {
                margin-bottom: 50px;
                padding: 10px;
                height: 100%;
            }

            .silver-card {
                background-color: #c0c0c0;
                color: #000;
            }

            .gold-card {
                background-color: #ffd700;
                color: #000;
            }

            .diamond-card {
                background-color: brown;
                color: #fff;
            }

            .h1 {
                text-align: center;
            }

            .container {
                display: flex;
                flex-wrap: wrap;
                align-items: stretch;
            }

            .container>.col-md-4 {
                flex-grow: 1;
            }
        </style>

        <h2 class="text-center">Membership</h2>

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
                            <p class="card-text">In this beginner-friendly tier, you will get early access to my upcoming updates.</p>
                            <ul>
                                <li>Only updates</li>
                                <li>Chat community</li>
                                <li>One movie free ticket</li>
                            </ul>
                            <a href="./Membership/membership.php?title=<?php echo "Silver Membership"; ?>" class="btn btn-primary">Donate</a>

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
                            <a href="./Membership/membership.php?title=<?php echo "Gold Membership"; ?>" class="btn btn-primary">Donate</a>

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
                            <a href="./Membership/membership.php?title=<?php echo "Platinum Membership"; ?>" class="btn btn-primary">Donate</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script>
            document.getElementById('silver-button').addEventListener('click', function() {
                window.location.href = '../FundFusion/User/userlogin.php';
            });

            document.getElementById('gold-button').addEventListener('click', function() {
                window.location.href = '..FundFusion/User/userlogin.php';
            });

            document.getElementById('platinum-button').addEventListener('click', function() {
                window.location.href = '../FundFusion/User/userlogin.php';

            });
        </script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    </section>
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
                    <h2 class="text-center">Our Team</h2>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, repellendus possimus id sapiente sunt ab mollitia cum.</p>
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
    <style>
        .full-width-footer {
            background: rgba(153, 72, 252, 0.98);
            padding: 20px;
            color: white;
            font-size: 14px;
            padding-left: 500px;

            text-align: center;
        }
    </style>
    </head>

    <body>

        <footer style="background-color: purple">
            <section class="nb-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-single useful-links">
                                <div class="footer-title">
                                    <h2>Navigation</h2>
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="index.php">Home <i class="fa fa-angle-right pull-right"></i></a></li>
                                    <li><a href="#about-us">About Us <i class="fa fa-angle-right pull-right"></i></a></li>
                                    <li><a href="../fundfusion/esewa/donate.php">Donators <i class="fa fa-angle-right pull-right"></i></a></li>
                                    <li><a href="#">Volunteer <i class="fa fa-angle-right pull-right"></i></a></li>
                                    <li><a href="Events">Events <i class="fa fa-angle-right pull-right"></i></a></li>
                                    <li><a href="#">Our Teams <i class="fa fa-angle-right pull-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix visible-sm"></div>
                        <div class="col-md-3 col-sm-6">
                            <div class="col-sm-12 left-clear right-clear footer-single footer-project">
                                <div class="footer-title">
                                    <h2>Social links

                                    </h2>
                                    <div class="col-sm-6 text-right xs-center">
                                        <ul class="list-inline footer-social">
                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fa fa-youtube-play"></i></a></li>
                                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href=""><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-single">
                                <div class="footer-title">
                                    <h2>Contact Information</h2>
                                </div>
                                <address>
                                    37300 Pokhara simalchaur-8, street 20 <br>
                                    Your State, Country <br>
                                    <i class="fa fa-phone"></i> 981234455 <br>
                                    <i class="fa fa-fax"></i> 012 123 2345<br>
                                    <i class="fa fa-envelope"></i> funffusion@example.com<br>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </section>










            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>