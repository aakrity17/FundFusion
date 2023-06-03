<!doctype html>
<html lang="en">

<head>
    <title>FundFusion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
            <img src="./img/Logo.png" class="logo">

            <!-- even if it has no work, we put it so that the nav will not mess  -->

            <a class="navbar-brand text-white" href="#"></a>

            <!-- Nav barrrrrrrrrrrr ko lagiiiiiiiii, plus tala button vayeko -->
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="./index.html">Home</a></li>

                    <!-- have to implement feature of scrolling -->
                    <!-- <li><a href="#about-us">About Us</a></li> -->

                    <li class="nav-item"><a class="nav-link" href="#about-us">About us</a></li>

                    <li class="nav-item"><a class="nav-link" href="./Donation.php">Donation</a></li>
                    <li class="nav-item"><a class="nav-link" href="#our-team">Our Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>

                    <li class="nav-item"><a class="nav-link" href="./Event.php">Events</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="./team.php">Contributors</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="./sign-in/index.php">Sign in</a></li>

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
                    <a href="#" class="btn hero-btn animate__animated animate__backInUp">
                        Donate us
                    </a>
                </div>
            </div>
            <!--End of Slide-1-->
            <!--Slide-1-->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__backInDown">
                        Let's<span>donate</span>
                    </h2>
                    <p class="animate__animated animate__fadeInUp">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac sem sed arcu lobortis tempor.
                        Fusce vel magna id lorem finibus eleifend. Suspendisse potenti. Aenean ultrices malesuada justo,
                        euismod consequat lorem aliquam eget.
                    </p>
                    <!-- **************************************** -->
                    <!-- Read more ma click garda aru text aaune banaune, using js -->
                    <a href="#" class="btn hero-btn animate__animated animate__backInUp">
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
                    <a href="#" class="btn hero-btn animate__animated animate__backInUp">
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
        <script>
            $(document).ready(function () {
                $('a[href^="#"]').on('click', function (event) {
                    var target = $(this.hash);
                    if (target.length) {
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 800); // Adjust the scrolling speed here
                    }
                });
            });
        </script>



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
                            <div class="img" style="background-image: url(/img/h.jpg);"></div>
                            <h3><a href="#">About Us</a></h3>
                            <p>Welcome to our charity app! We are a team of passionate individuals dedicated to making a
                                positive impact in the world. Our mission is to connect people with the causes they care
                                about and make it easy for them to support those causes.

                            </p>
                        </div>
                        <!----->
                        <div class="tab-pane container p-0" id="about-2">
                            <div class="img" style="background-image: url(img/plan.jpg);"></div>
                            <h3><a href="#">Our Beginning</a></h3>
                            <p>After months of hard work, the charity app was finally ready,
                                to the public for the first time.
                                From that moment on, our charity app has been on a mission to make charitable giving
                                more accessible and impactful. We are proud of our beginning, and we look forward to
                                continuing to make a difference in the lives of people and communities around the world.
                            </p>
                        </div>
                        <!----->
                        <div class="tab-pane container p-0" id="about-3">
                            <div class="img" style="background-image: url(img/d.jpg);"></div>
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
                            <div class="img" style="background-image: url(img/i.jpg);"></div>
                            <h3><a href="#">Our Vision</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac sem sed arcu lobortis
                                tempor.
                                Fusce vel magna id lorem finibus eleifend. Suspendisse potenti. Aenean ultrices
                                malesuada justo,
                                euismod consequat lorem aliquam eget..</p>
                        </div>
                        <!----->
                        <div class="tab-pane container p-0" id="about-5">
                            <div class="img" style="background-image: url(img/m.jpg);"></div>
                            <h3><a href="#">Our Mandate</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac sem sed arcu lobortis
                                tempor.
                                Fusce vel magna id lorem finibus eleifend. Suspendisse potenti. Aenean ultrices
                                malesuada justo,
                                euismod consequat lorem aliquam eget.</p>
                        </div>
                        <!----->
                        <div class="tab-pane container p-0" id="about-6">
                            <div class="img" style="background-image: url(img/p4.jpg)no-repeat"></div>
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

    <!---Projects Section-->


    <!-- <section class="project py-5" id="projects
    "> -->
    <section id="projects">
        <script>
            $(document).ready(function () {
                $('a[href^="#"]').on('click', function (event) {
                    var target = $(this.hash);
                    if (target.length) {
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 800); // Adjust the scrolling speed here
                    }
                });
            });
        </script>
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
                        Specification
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
                        Specification
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
                        Specification
                    </h6>
                </div>
                <!--End of Single Project-->
                <!--single Project-->
                <div class="col-10 col-md-6 col-lg-4">
                    <div class="project-container p-5 outline">
                        <img src="img/bg1.jpg" class="img-fluid grow" alt="">
                        <a herf="#" class="donation text-capitalize">Donate Now</a>
                    </div>
                    <h4 class="text-capitalize text-center my-2">Project-1</h4>
                    <h6 class="text-center">
                        Specification
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
                        Specification
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
                        Specification
                    </h6>
                </div>
                <!--End of Single Project-->

            </div>
        </div>
    </section>
    <!---End of the Projects Section-->

    <!-- Team Section-->
    <section id="our-team">
        <script>
            $(document).ready(function () {
                $('a[href^="#"]').on('click', function (event) {
                    var target = $(this.hash);
                    if (target.length) {
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 800); // Adjust the scrolling speed here
                    }
                });
            });
        </script>

        <!-- <section class="team"> -->
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
                            <img src="img/member1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-info">
                            <h4>John Doe</h4>
                            <span>Specification</span>
                            <div class="social">
                                <a href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="">
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
                            <h4>John Doe</h4>
                            <span>Specification</span>
                            <div class="social">
                                <a href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="">
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
                            <h4>John Doe</h4>
                            <span>Specification</span>
                            <div class="social">
                                <a href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="">
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
                            <h4>John Doe</h4>
                            <span>Specification</span>
                            <div class="social">
                                <a href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="">
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
    <!---End of Team Section-->
    <!--Finished projects-->
    <!-- <section>
        <div class="container">
            <div class="text-center">
                <h2 class="mb-5">Finished Projects</h2>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <a class="project-item" href="">
                        <span class="text">
                            <span class="des">
                                <h1>Animal Rescue</h1>
                                <p class="mb-0">
                                    This was one of our best projects in which we rescued animals and landed them to a
                                    safe and secure place.
                                </p>
                            </span>
                        </span>
                        <img src="img/p1.jpg" class="img-fluid" alt="">
                    </a>
                </div>
                <!---->
    <!-- <div class="col-lg-6">
        <a class="project-item" href="">
            <span class="text">
                <span class="des">
                    <h1>Love Animals</h1>
                    <p class="mb-0">
                        This was an amazing webinar in which we taught people about loving and caring
                        animals as we care about humans. Animals are a precious gifts by nature.
                    </p>
                </span>
            </span>
            <img src="img/p2.jpg" class="img-fluid" alt="">
        </a>
    </div>
    <!---->
    <!-- <div class="col-lg-6">
        <a class="project-item" href="">
            <span class="text">
                <span class="des">
                    <h1>Animals in Air</h1>
                    <p class="mb-0">
                        This was a wonderful session in which we demonstrated about not keeping animals in
                        cages. They also have right to move freely. Definitely you can make forests for them
                        and let them wonder there freely.
                    </p>
                </span>
            </span>
            <img src="img/p3.jpg" class="img-fluid" alt="">
        </a>
    </div> -->
    <!---->
    <!-- <div class="col-lg-6">
        <a class="project-item" href="">
            <span class="text">
                <span class="des">
                    <h1>Uncage the Birds</h1>
                    <p class="mb-0">
                        Once abundant across large parts of India, the species like Parakeets, Mynas,
                        Owls,Sparrows etc have slipped into the danger of extinction. This is a humble
                        request to birds and animal lovers, say No to "Bird Trade".
                    </p>
                </span>
            </span>
            <img src="img/p4.jpg" class="img-fluid" alt="">
        </a> -->
    </div> -->
    <!---->
    </div>
    </div>
    </section> -->
    <!---End of finished projects Section-->
    <!---Donation Section-->
    <section class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-55">
                        <h3>Make a Donation</h3>
                    </div>
                </div>
            </div>
            <!---->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form class="donation-form">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="amount">
                                    <div class="input-field">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>

                                            <input type="text" class="form-control" placeholder="10,000"
                                                aria-label="Username">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----->
                            <div class="col-md-8">
                                <div class="amount">
                                    <div class="need d-flex align-items-center
                        justify-content-between">
                                        <div class="select">
                                            <h5>Select Amount</h5>
                                        </div>
                                        <div class="funds">
                                            <input type="radio" name="radio-group">
                                            <label for="fund-1">100</label>
                                        </div>
                                        <div class="funds">
                                            <input type="radio" name="radio-group">
                                            <label for="fund-2">150</label>
                                        </div>
                                        <div class="funds">
                                            <input type="radio" name="radio-group">
                                            <label for="Other">Other</label>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <div class="donation-btn text-center">
                        <a href="" class="btn btn-don">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!---End of Donation section Section-->
    <footer class="footer mt-5">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-des">
                            <h3>Fund Fusion</h3>
                            <p class="pb-3">
                                <em>An initiative to Donate for the good!</em>
                            </p>
                            <p>Simalchaur, Pokhara <br>
                                12345, <br><br><strong>
                                    Phone;
                                </strong>
                                +97981234567<br>
                                <strong>
                                    Email:
                                </strong>
                                FundFusion@info.com<br>

                            </p>
                            <div class="social-links mt-3">
                                <a href=""><i class="fab fa-twitter">

                                    </i></a>
                                <a href=""><i class="fab fa-facebook">

                                    </i></a>
                                <a href=""><i class="fab fa-instagram">

                                    </i></a>
                                <a href=""><i class="fab fa-linkedin">

                                    </i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>About Us</h4>
                        <ul>
                            <li>
                                <i class="fas fa-chevron-right"></i>
                                <a href="">Projects</a>


                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i>
                                <a href="">Initiatives</a>


                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i>
                                <a href="">Our Team</a>


                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i>
                                <a href="">Our Plans</a>


                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i>
                                <a href="">Contact Us</a>


                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful links</h4>
                        <ul>
                            <li>
                                <i class="fas fa-chevron-right"></i>
                                <a href="">Project-1</a>


                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i>
                                <a href="">Project-2</a>


                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i>
                                <a href="">Project-3</a>


                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i>
                                <a href="">Project-4</a>


                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i>
                                <a href="">Project-5</a>


                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <!-- <h4>Our News Letters</h4> -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae excepturi aut consectetur
                            consequatur fugiat commodi quidem, minus, vero quo eaque praesentium asperiores. Officiis
                            suscipit mollitia dolore et ea impedit tempore!
                        </p>
                        <form>
                            <input type="email" name="email">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>