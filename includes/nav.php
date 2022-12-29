<?php include 'site_data.php' ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="modinatheme">
    <!-- ======== Page title ============ -->
    <title>CONSULTER - Business Consulting HTML Template</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="assets/css/icons.css">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- slick slider menu css file -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- animate animation css file -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- template main style css file -->
    <link rel="stylesheet" href="style.css">

</head>

<body class="body-wrapper">


<header class="header header-1 transparent header-2">
    <div class="top-header d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-3">
                    <div class="header-logo">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/img/logo/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-9">
                    <div class="header-right-socail d-flex justify-content-end align-items-center">
                        <a class="header-contact d-none d-md-flex align-items-center">
                            <div class="icon color-yellow">
                                <i class="icon-phone"></i>
                            </div>
                            <div class="text">
                                <span class="mb-5 d-block fw-normal color-white">Call Us Today</span>
                                <h5 class="fw-600 color-white"><?php echo $phone; ?></h5>
                            </div>
                        </a>

                        <a href="mailto:<?php echo $email; ?>"
                           class="header-contact d-none d-md-flex align-items-center">
                            <div class="icon color-yellow">
                                <i class="icon-email"></i>
                            </div>
                            <div class="text">
                                <span class="mb-5 d-block fw-normal color-white">E-mail Us</span>
                                <h5 class="fw-600 color-white"><?php echo $email; ?></h5>
                            </div>
                        </a>

                        <a class="header-contact d-none d-md-flex align-items-center">
                            <div class="icon color-yellow">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="text">
                                <span class="mb-5 d-block fw-normal color-white">Our Address</span>
                                <h5 style="font-size: 10px!important;"
                                    class="fw-600 color-white"><?php echo $address; ?></h5>
                            </div>
                        </a>

                        <a class="header-contact d-none d-md-flex align-items-center">
                            <div class="icon color-yellow">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="text">
                                <span class="mb-5 d-block fw-normal color-white">Open Every Week Day</span>
                                <h5 class="fw-600 color-white">8AM : 4:30PM</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-header-wraper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between border-top">
                        <div class="header-logo d-block d-xl-none">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="assets/img/logo/logo.png" alt="logo">
                                </a>
                            </div>
                        </div>

                        <div class="social-profile last_no_bullet d-xl-block d-none">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>

                        <div class="header-menu d-none d-xl-block">
                            <div class="main-menu">
                                <ul>
                                    <li>
                                        <a href="index.php">Home</a>
                                        <ul>
                                            <li><a href="index.php">home 1</a></li>
                                            <li><a href="index-2.html">home 2</a></li>
                                            <li><a href="index-3.html">home 3</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="services.html">Our Services</a>

                                        <ul>
                                            <li><a href="services.html">Our Services 1</a></li>
                                            <li><a href="services-2.html">Our Services 2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a>Pages</a>

                                        <ul>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="table.html">Pricing Table</a></li>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="team-details.html">Team Details</a></li>
                                            <li><a href="services-details.html">Services Details</a></li>
                                            <li><a href="our-project-details.html">Our Project Details</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="our-project.html">Portfolio</a>
                                    </li>
                                    <li>
                                        <a href="blog.html">Blog</a>

                                        <ul>
                                            <li><a href="blog.html">Blog 1</a></li>
                                            <li><a href="blog-standard.html">Blog 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="header-right d-flex align-items-center">
                            <div class="header-search">
                                <a class="search-toggle" data-selector=".header-search">
                                    <span class="fas fa-search"></span>
                                </a>

                                <form class="search-box" action="#" method="get">
                                    <div class="form-group d-flex align-items-center">
                                        <input type="search" name="s" value="" class="search-input" id="search"
                                               placeholder="Search">
                                        <button type="submit" class="search-submit"><i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <div class="horizontal-bar"></div>

                            <a class="shop-cart">
                                <i class="fal fa-shopping-cart"></i>
                                <span class="number">2</span>
                            </a>

                            <div class="mobile-nav-bar d-block ml-3 ml-sm-5 d-xl-none">
                                <div class="mobile-nav-wrap">
                                    <div id="hamburger">
                                        <i class="fal fa-bars"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- mobile menu - responsive menu  -->
<div class="mobile-nav mobile-nav-yellow">
    <button type="button" class="close-nav">
        <i class="fal fa-times-circle"></i>
    </button>

    <nav class="sidebar-nav">
        <div class="navigation">
            <div class="consulter-mobile-nav">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                        <ul>
                            <li><a href="index.php">home 1</a></li>
                            <li><a href="index-2.html">home 2</a></li>
                            <li><a href="index-3.html">home 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="services.html">Our Services</a>

                        <ul>
                            <li><a href="services.html">Our Services 1</a></li>
                            <li><a href="services-2.html">Our Services 2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>Pages</a>

                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="table.html">Pricing Table</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="services-details.html">Services Details</a></li>
                            <li><a href="our-project-details.html">Our Project Details</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                            <li><a href="404.html">404</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="our-project.html">Portfolio</a>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>

                        <ul>
                            <li><a href="blog.html">Blog 1</a></li>
                            <li><a href="blog-standard.html">Blog 2</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="sidebar-nav__bottom mt-20">
                <div class="sidebar-nav__bottom-contact-infos mb-20">
                    <h6 class="color-black mb-5">Contact Info</h6>

                    <ul>
                        <li><a><i class="fal fa-clock"></i> Mon – Fri: 8.00 – 18.00</a></li>
                        <li><a href="mailto:consulter@example.com"><i class="icon-email"></i>consulter@example.com</a>
                        </li>
                        <li>
                            <a class="header-contact d-flex align-items-center">
                                <div class="icon">
                                    <i class="icon-call"></i>
                                    <!-- <img src="assets/img/icon/phone-1.svg" alt=""> -->
                                </div>
                                <div class="text">
                                    <span class="font-la mb-5 d-block fw-500">Contact For Support</span>
                                    <h5 class="fw-500">+123 556 8824</h5>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-nav__bottom-social">
                    <h6 class="color-black mb-5">Follow On:</h6>

                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<div class="offcanvas-overlay"></div> <!-- offcanvas-overlay -->
<!-- header end -->