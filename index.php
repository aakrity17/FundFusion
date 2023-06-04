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
    <nav class="navbar navbar-expand-lg navbar-light nav-bg fixed-top py-2" id="mainNav">
        <div class="container">
            <!-- Logo -->
            <img src="./img/Logo.png" class="logo">
            <a class="navbar-brand text-white" href="#"></a>

            <!-- Navigation toggle button -->
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

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
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">
                            <i class="fas fa-project-diagram"></i> Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Event.php">
                            <i class="fas fa-calendar-alt"></i> Events
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./sign-in/index.php">
                            <i class="fas fa-sign-in-alt"></i> Sign in
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./sign-in/index.php">
                            <i class="fas fa-user-circle"></i> Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!---End of Navbar-->
    <!--Hero Section-->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">
            <!--Slide-1-->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__backInDown">
                        Donate for the good!
                    </h2>
                    <p class="animate__animated animate__fadeInUp">
                        "A little bit of kindness goes a long way"
                    </p>
                    <a href="./sign-in/index.php" class="btn hero-btn animate__animated animate__backInUp">
                        Donate us
                    </a>
                </div>
            </div>
            <!--End of Slide-1-->
            <!--Slide-1-->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__backInDown">
                        Let's<span> donate</span>
                    </h2>
                    <p class="animate__animated animate__fadeInUp">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac sem sed arcu lobortis tempor.
                        Fusce vel magna id lorem finibus eleifend. Suspendisse potenti. Aenean ultrices malesuada justo,
                        euismod consequat lorem aliquam eget.
                    </p>
                    <!-- **************************************** -->
                    <!-- Read more ma click garda aru text aaune banaune, using js -->
                    <a href="#about-us" class="btn hero-btn animate__animated animate__backInUp">
                        Read More
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
                        Projects for Fund Fusion
                    </h2>
                    <p class="animate__animated animate__fadeInUp">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac sem sed arcu lobortis tempor.
                        Fusce vel magna id lorem finibus eleifend. Suspendisse potenti. Aenean ultrices malesuada justo,
                        euismod consequat lorem aliquam eget.
                    </p>
                    <a href="#about-us" class="btn hero-btn animate__animated animate__backInUp">
                        Read More
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
                    <h4 class="text-capitalize text-center my-2">Project-1</h4>
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
                    <h4 class="text-capitalize text-center my-2">Project-1</h4>
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
                    <h4 class="text-capitalize text-center my-2">Project-1</h4>
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
                    <h4 class="text-capitalize text-center my-2">Project-1</h4>
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
                    <h4 class="text-capitalize text-center my-2">Project-1</h4>
                    <h6 class="text-center">
                        Health
                    </h6>
                </div>
                <!--End of Single Project-->

            </div>
        </div>
    </section>
    <!---End of the Projects Section-->

    <!-- Team Section-->
    <!-- <section class="team"> -->
    <section id="our-team">
        <div class="container">
            <div class="section-title">
                <h2 class="text-center">Our Team</h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, repellendus
                    possimus id sapiente sunt ab mollitia cum. </p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team-1">
                        <div class="pic">
                            <img src="img/mem.png" class="img-fluid" alt="">
                        </div>
                        <div class="team-info">
                            <h4>Akriti Chapagai</h4>
                            <span>Frontend desiger</span>
                            <div class="social">
                                <a href="https://twitter.com/aakrity17">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://facebook.com/aakrityy17">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="https://www.instagram.com/aakrity0">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/aakrity17/">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!---->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team-1">
                        <div class="pic">
                            <img src="img/member2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-info">
                            <h4>Binaya koirala</h4>
                            <span>Backend developer</span>
                            <div class="social">
                                <a href="https://twitter.com/">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.facebook.com/">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="https://www.instagram.com/">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!---->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team-1">
                        <div class="pic">
                            <img src="img/member3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-info">
                            <h4>Laxman Parajuli</h4>
                            <span>Frontend</span>
                            <div class="social">
                                <a href="https://twitter.com/">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.facebook.com/laxman.parajuli.58">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="https://www.instagram.com/">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!---->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team-1">
                        <div class="pic">
                            <img src="img/member4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-info">
                            <h4>Ujjwal Adhikari</h4>
                            <span>Backend</span>
                            <div class="social">
                                <a href="https://twitter.com/xatey999">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.facebook.com/ujjwal.adhikari.526438">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href=" https://www.instagram.com/xatey_999">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/ujjwal-adhikari-2a7631279/?trk=contact-info">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!---->
            </div>
        </div>


    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <footer>
        <div class="footer-content">
            <h3>FundFusion </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quisquam possimus totam rem, et minima ea deserunt sit repellat, dignissimos placeat quam! Reiciendis ratione doloribus ipsum provident expedita architecto aliquid!</p>

            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>

            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright @copy;2023 FundFusion. designed by <span>aakrity</span></p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>