<!-------------------------------------------------------------------------------------
    Name: Locus Hotel
    Author: Made Pranajaya
    Author URL: https://github.com/mdprana

    Note: This is About Us Page.
--------------------------------------------------------------------------------------->

@include('layout-all')

    <!--====== Title ======-->
    <title> {{$page_name}} • Locus Hotel About us </title>
    <!--====== OFF CANVAS START ======-->
    <div class="offcanvas-wrapper">
        <div class="offcanvas-overly"></div>
        <div class="offcanvas-widget">
            <a href="#" class="offcanvas-close"><i class="fal fa-times"></i></a>
            <!-- Search Widget -->
            <div class="widget search-widget">
                <h5 class="widget-title">Search room</h5>
                <form action="#">
                    <input type="text" placeholder="Search your keyword...">
                    <button type="submit"><i class="far fa-search"></i></button>
                </form>
            </div>

            <!-- About Widget -->
            <div class="widget about-widget">
                <h5 class="widget-title">About us</h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia reiciendis illo ipsa asperiores,
                    perspiciatis corrupti veritatis assumenda architecto commodi provident quas necessitatibus
                    consequatur praesentium magnam optio deserunt fugiat repellat culpa.
                </p>
            </div>
            <!-- Nav Widget -->
            <div class="widget nav-widget">
                <h5 class="widget-title">Our pages</h5>
                <ul>
                    <li><a href="{{ url('about-us') }}">About Us</a></li>
                    <li><a href="{{ url('rooms') }}">Rooms</a></li>
                    <li><a href="{{ url('our-offers') }}">Offers</a></li>
                    <li><a href="{{ url('gallery') }}">Our Gallery</a></li>
                    <li><a href="{{ url('food-menu') }}">Food Menu</a></li>
                    <li><a href="{{ url('restaurant') }}">Restaurant</a></li>
                    <li><a href="{{ url('places') }}">Places</a></li>
                    <li><a href="{{ url('contact') }}">Contact</a></li>
                    <li><a href="{{ url('blog') }}">Blog</a></li>
                </ul>
            </div>
            <!-- Social Link -->
            <div class="widget social-link">
                <h5 class="widget-title">Contact with us</h5>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--====== OFF CANVAS END ======-->
    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url(assets/img/bg/04.jpg);">
        <div class="container">
            <div class="breadcrumb-text">
                <span>The ultimate luxury</span>
                <h2 class="page-title">About Us</h2>

                <ul class="breadcrumb-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">About</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <!--====== ABOUT PART START ======-->
    <section class="about-section pt-115 pb-115">
        <div class="container">
            <div class="video-wrap video-wrap-two video-about mb-60"
                style="background-image: url(assets/img/text-block/04.jpg);">
                <a href="https://www.youtube.com/watch?v=y_j2nhAJQtY" class="popup-video"><i
                        class="fas fa-play"></i></a>
            </div>
            <div class="section-title about-title text-center">
                <span class="title-tag">since <span>1994</span></span>
                <h2>Hello. Our hotel has been present for over 20 years. We make the best or all our customers.</h2>
            </div>
            <ul class="about-features">
                <li class="wow fadeInUp" data-wow-delay=".3s">
                    <a href="#">
                        <i class="flaticon-coffee"></i>
                        <i class="hover-icon flaticon-coffee"></i>
                        <span class="title">breakfast</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".4s">
                    <a href="#">
                        <i class="flaticon-air-freight"></i>
                        <i class="hover-icon flaticon-air-freight"></i>
                        <span class="title">Airport Pickup</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".5s">
                    <a href="#">
                        <i class="flaticon-marker"></i>
                        <i class="hover-icon flaticon-marker"></i>
                        <span class="title">city guide</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".6s">
                    <a href="#">
                        <i class="flaticon-barbecue"></i>
                        <i class="hover-icon flaticon-barbecue"></i>
                        <span class="title">bbq party</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".7s">
                    <a href="#">
                        <i class="flaticon-hotel"></i>
                        <i class="hover-icon flaticon-hotel"></i>
                        <span class="title">luxury room</span>
                    </a>
                </li>
            </ul>

            <div class="about-text-box">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="assets/img/text-block/05.jpg" alt="images">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-text">
                            <span>Restaurant</span>
                            <h3>Get Restaurant Facilities & Many Other More</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip.
                            </p>
                            <a href="{{ url('restaurant') }}" class="main-btn btn-filled">take a tour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== ABOUT PART END ======-->
    <!--====== CORE FEATURES START ======-->
    <section class="core-feature-section bg-black pt-115 pb-115">
        <div class="container">
            <div class="section-title white-color text-center mb-50">
                <span class="title-tag"> facilities </span>
                <h2>Core Features</h2>
            </div>
            <!-- Featre Loop -->
            <div class="row features-loop">
                <div class="col-lg-4 col-sm-6 order-1">
                    <div class="feature-box dark-box wow fadeInLeft" data-wow-delay=".3s">
                        <div class="icon">
                            <i class="flaticon-rating"></i>
                        </div>
                        <h3><a href="#">Have High Rating</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">01</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-2">
                    <div class="feature-box dark-box wow fadeInDown" data-wow-delay=".4s">
                        <div class="icon">
                            <i class="flaticon-clock"></i>
                        </div>
                        <h3><a href="#">Quiet Hours</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">02</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-3 order-sm-4 order-lg-3">
                    <div class="feature-box dark-box wow fadeInRight" data-wow-delay=".5s">
                        <div class="icon">
                            <i class="flaticon-location-pin"></i>
                        </div>
                        <h3><a href="#">Best Locations</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">03</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-4 order-sm-3 order-lg-4">
                    <div class="feature-box dark-box wow fadeInLeft" data-wow-delay=".6s">
                        <div class="icon">
                            <i class="flaticon-clock-1"></i>
                        </div>
                        <h3><a href="#">Free Cancellation</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">04</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-5">
                    <div class="feature-box dark-box wow fadeInUp" data-wow-delay=".7s">
                        <div class="icon">
                            <i class="flaticon-credit-card"></i>
                        </div>
                        <h3><a href="#">Payment Options</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">05</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-6">
                    <div class="feature-box dark-box wow fadeInRight" data-wow-delay=".8s">
                        <div class="icon">
                            <i class="flaticon-discount"></i>
                        </div>
                        <h3><a href="#">Special Offers</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">06</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== CORE FEATURES END ======-->
    <!--====== COUNTER UP START ======-->
    <section class="counter-section pt-115">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title mb-80">
                <span class="title-tag">COUNTER</span>
                <h2>Some Fun Facts</h2>
            </div>
            <!-- Counter -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-6">
                    <div class="counter-box counter-box-two">
                        <div class="icon">
                            <i class="flaticon-user-1"></i>
                        </div>
                        <h4><span class="counter">10000</span></h4>
                        <span class="title">Happy Users</span>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="counter-box counter-box-two">
                        <div class="icon">
                            <i class="flaticon-like"></i>
                        </div>
                        <h4><span class="counter">10</span>M</h4>
                        <span class="title">Reviews & Appriciate</span>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="counter-box counter-box-two">
                        <div class="icon">
                            <i class="flaticon-suitcase"></i>
                        </div>
                        <h4><span class="counter">100</span></h4>
                        <span class="title">Country Coverage</span>
                    </div>
                </div>
            </div>
            <!-- Gallery -->
            <div class="row">
                <div class="col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="image mt-30">
                        <img src="assets/img/gallery/09.jpg" alt="image">
                    </div>
                </div>
                <div class="col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="image mt-30">
                        <img src="assets/img/gallery/10.jpg" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== COUNTER UP END ======-->
    <!--====== LATEST BLOG START ======-->
    <section class="latest-blog pt-115 pb-115">
        <div class="container">
            <div class="section-title text-center">
                <span class="title-tag">Blog</span>
                <h2>Blog Feeds</h2>
            </div>
            <!-- Latest post loop -->
            <div class="row justify-content-center mt-50">
                <div class="col-lg-4 col-sm-6">
                    <div class="latest-post-box mt-30">
                        <div class="post-img" style="background-image: url(assets/img/latest-post/01.jpg);"></div>
                        <div class="post-desc">
                            <ul class="post-meta">
                                <li>
                                    <a href="#"><i class="fal fa-calendar-alt"></i>23rd March 2024</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fal fa-user"></i>By Admin</a>
                                </li>
                            </ul>
                            <h4><a href="{{ url('blog-details') }}">Each of our 8 double rooms has its own distinct.</a></h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="latest-post-box mt-30">
                        <div class="post-img" style="background-image: url(assets/img/latest-post/03.jpg);"></div>
                        <div class="post-desc">
                            <ul class="post-meta">
                                <li>
                                    <a href="#"><i class="fal fa-calendar-alt"></i>23rd March 2024</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fal fa-user"></i>By Admin</a>
                                </li>
                            </ul>
                            <h4><a href="{{ url('blog-details') }}">Each of our 8 double rooms has its own distinct.</a></h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="latest-post-box mt-30">
                        <div class="post-img" style="background-image: url(assets/img/latest-post/02.jpg);"></div>
                        <div class="post-desc">
                            <ul class="post-meta">
                                <li>
                                    <a href="#"><i class="fal fa-calendar-alt"></i>23rd March 2024</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fal fa-user"></i>By Admin</a>
                                </li>
                            </ul>
                            <h4><a href="{{ url('blog-details') }}">Each of our 8 double rooms has its own distinct.</a></h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== LATEST BLOG END ======-->
    <!--====== Back to Top ======-->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fal fa-angle-double-up"></i>
    </a>
    <!--====== FOOTER PART START ======-->
    <footer>
        <div class="footer-subscibe-area pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="subscribe-text text-center">
                            <div class="footer-logo mb-45">
                                <img src="assets/img/logo-2.png" alt="images">
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doing
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi.
                            </p>
                            <form class="subscribe-form mt-50">
                                <input type="email" placeholder="Enter your email address" name="subscriber_email" id="subscriber_email" required="">
                                <button type="submit" onclick="addSubscriber()">subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area pt-20 pb-20">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 order-2 order-md-1">
                        <p class="copyright-text">copyright by Locus Hotel</p>
                    </div>
                    <div class="col-md-7 order-1 order-md-2">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--====== FOOTER PART END ======-->
    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>
    <!--====== Isotope js ======-->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--====== inview js ======-->
    <script src="assets/js/jquery.inview.min.js"></script>
    <!--====== counterup js ======-->
    <script src="assets/js/jquery.countTo.js"></script>
    <!--====== Nice Select ======-->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!--====== Bootstrap datepicker ======-->
    <script src="assets/js/bootstrap-datepicker.js"></script>
    <!--====== Wow JS ======-->
    <script src="assets/js/wow.min.js"></script>
    <!--====== Google Map ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="assets/js/map.js"></script>
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
</body>
</html>
