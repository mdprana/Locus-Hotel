<!-------------------------------------------------------------------------------------
    Name: Locus Hotel
    Author: Made Pranajaya
    Author URL: https://github.com/mdprana

    Note: This is Layout for Home Page.
--------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--====== Title ======-->
    <title> {{$page_name}} • Locus Hotel </title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/png" />
    <!--====== Animate Css ======-->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <!--====== Flaticon css ======-->
    <link rel="stylesheet" href="assets/css/flaticon.css" />
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <!--====== Owl Carousel css ======-->
    <link rel="stylesheet" href="assets/css/slick.css" />
    <!--====== Nice Select ======-->
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <!--====== Bootstrap Datepicker ======-->
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css" />
    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css" />
    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <!--====== PRELoader ======-->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="cssload-container">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>

    <!--====== HEADER START ======-->
    <header class="header-absolute header-two sticky-header">
        <div class="container container-custom-one">
            <div class="nav-container d-flex align-items-center justify-content-between">
                <!-- Main Menu -->
                <div class="nav-menu d-lg-flex align-items-center">

                    <!-- Navbar Close Icon -->
                    <div class="navbar-close">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Off canvas Menu  -->
                    <div class="toggle">
                        <a href="#" id="offCanvasBtn"><i class="fal fa-bars"></i></a>
                    </div>
                    <!-- Menu Items -->
                    <div class="menu-items">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('rooms') }}">Rooms</a></li>
                            <li><a href="{{ url('gallery') }}">Gallery</a></li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                            <li><a href="{{ url("blog") }}">Blog</a></li>
                            <li><a href="{{ url('about-us') }}">About Us</a></li>
                        </ul>
                    </div>

                    <!-- from pushed-item -->
                    <div class="nav-pushed-item"></div>
                </div>

                <!-- Site Logo -->
                <div class="site-logo">
                    <a href="{{ url('/') }}" class="main-logo"><img src="assets/img/logo-white.png" alt="Logo"></a>
                    <a href="{{ url('/') }}" class="sticky-logo"><img src="assets/img/logo.png" alt="Logo"></a>
                </div>

                <!-- Header Info Pussed To Menu Wrap -->
                <div class="nav-push-item">
                    <!-- Header Info -->
                    <div class="header-info d-lg-flex align-items-center">
                        <div class="item">
                            <i class="fal fa-phone"></i>
                            <span>Phone Number</span>
                            <a href="tel:+6281234567890">
                                <h5 class="title">081234567890</h5>
                            </a>
                        </div>
                        <div class="item">
                            <i class="fal fa-envelope"></i>
                            <span>Email Address</span>
                            <a href="mailto:locushotel@business.com">
                                <h5 class="title">locushotel@business.com</h5>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Navbar Toggler -->
                <div class="navbar-toggler">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
    </header>
    <!--====== HEADER END ======-->
