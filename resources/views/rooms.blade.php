<!-------------------------------------------------------------------------------------
    Name: Locus Hotel
    Author: Made Pranajaya
    Author URL: https://github.com/mdprana

    Note: This is Rooms Page (View as Grid).
--------------------------------------------------------------------------------------->

@include('layout-all')

    <!--====== Title ======-->
    <title> {{$page_name}} • Locus Hotel Rooms </title>
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
                <h2 class="page-title">Ultimate Room</h2>

                <ul class="breadcrumb-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Rooms</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <!--====== ROOM-GRIRD START ======-->
    <section class="room-section rooms-style pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center room-gird-loop">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="room-box mb-30">
                        <div class="room-img-wrap">
                            <div class="room-img" style="background-image: url(assets/img/room/01.jpg);"></div>
                        </div>
                        <div class="room-desc">
                            <ul class="icons">
                                <li><i class="fal fa-bed"></i></li>
                                <li><i class="fal fa-wifi"></i></li>
                                <li><i class="fal fa-car"></i></li>
                                <li><i class="fal fa-coffee"></i></li>
                                <li><i class="fal fa-concierge-bell"></i></li>
                                <li><i class="fal fa-compress-arrows-alt"></i></li>
                                <li><i class="fal fa-swimmer"></i></li>
                            </ul>
                            <h4 class="title"><a href="{{ url('rooms-details') }}">Minimal Duplex Room</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                            <span class="price">IDR 1.000.000/Night</span>
                            <a href="#" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="room-box mb-30">
                        <div class="room-img-wrap">
                            <div class="room-img" style="background-image: url(assets/img/room/02.jpg);"></div>
                        </div>
                        <div class="room-desc">
                            <ul class="icons">
                                <li><i class="fal fa-bed"></i></li>
                                <li><i class="fal fa-wifi"></i></li>
                                <li><i class="fal fa-car"></i></li>
                                <li><i class="fal fa-coffee"></i></li>
                                <li><i class="fal fa-concierge-bell"></i></li>
                                <li><i class="fal fa-compress-arrows-alt"></i></li>
                                <li><i class="fal fa-swimmer"></i></li>
                            </ul>
                            <h4 class="title"><a href="{{ url('rooms-details') }}">Minimal Duplex Room</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                            <span class="price">IDR 1.000.000/Night</span>
                            <a href="#" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="room-box mb-30">
                        <div class="room-img-wrap">
                            <div class="room-img" style="background-image: url(assets/img/room/03.jpg);"></div>
                        </div>
                        <div class="room-desc">
                            <ul class="icons">
                                <li><i class="fal fa-bed"></i></li>
                                <li><i class="fal fa-wifi"></i></li>
                                <li><i class="fal fa-car"></i></li>
                                <li><i class="fal fa-coffee"></i></li>
                                <li><i class="fal fa-concierge-bell"></i></li>
                                <li><i class="fal fa-compress-arrows-alt"></i></li>
                                <li><i class="fal fa-swimmer"></i></li>
                            </ul>
                            <h4 class="title"><a href="{{ url('rooms-details') }}">Minimal Duplex Room</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                            <span class="price">IDR 1.000.000/Night</span>
                            <a href="#" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="room-box mb-30">
                        <div class="room-img-wrap">
                            <div class="room-img" style="background-image: url(assets/img/room/04.jpg);"></div>
                        </div>
                        <div class="room-desc">
                            <ul class="icons">
                                <li><i class="fal fa-bed"></i></li>
                                <li><i class="fal fa-wifi"></i></li>
                                <li><i class="fal fa-car"></i></li>
                                <li><i class="fal fa-coffee"></i></li>
                                <li><i class="fal fa-concierge-bell"></i></li>
                                <li><i class="fal fa-compress-arrows-alt"></i></li>
                                <li><i class="fal fa-swimmer"></i></li>
                            </ul>
                            <h4 class="title"><a href="{{ url('rooms-details') }}">Minimal Duplex Room</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                            <span class="price">IDR 1.000.000/Night</span>
                            <a href="#" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="room-box mb-30">
                        <div class="room-img-wrap">
                            <div class="room-img" style="background-image: url(assets/img/room/05.jpg);"></div>
                        </div>
                        <div class="room-desc">
                            <ul class="icons">
                                <li><i class="fal fa-bed"></i></li>
                                <li><i class="fal fa-wifi"></i></li>
                                <li><i class="fal fa-car"></i></li>
                                <li><i class="fal fa-coffee"></i></li>
                                <li><i class="fal fa-concierge-bell"></i></li>
                                <li><i class="fal fa-compress-arrows-alt"></i></li>
                                <li><i class="fal fa-swimmer"></i></li>
                            </ul>
                            <h4 class="title"><a href="{{ url('rooms-details') }}">Minimal Duplex Room</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                            <span class="price">IDR 1.000.000/Night</span>
                            <a href="#" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="room-box mb-30">
                        <div class="room-img-wrap">
                            <div class="room-img" style="background-image: url(assets/img/room/06.jpg);"></div>
                        </div>
                        <div class="room-desc">
                            <ul class="icons">
                                <li><i class="fal fa-bed"></i></li>
                                <li><i class="fal fa-wifi"></i></li>
                                <li><i class="fal fa-car"></i></li>
                                <li><i class="fal fa-coffee"></i></li>
                                <li><i class="fal fa-concierge-bell"></i></li>
                                <li><i class="fal fa-compress-arrows-alt"></i></li>
                                <li><i class="fal fa-swimmer"></i></li>
                            </ul>
                            <h4 class="title"><a href="{{ url('rooms-details') }}">Minimal Duplex Room</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                            <span class="price">IDR 1.000.000/Night</span>
                            <a href="#" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="room-box mb-30">
                        <div class="room-img-wrap">
                            <div class="room-img" style="background-image: url(assets/img/room/07.jpg);"></div>
                        </div>
                        <div class="room-desc">
                            <ul class="icons">
                                <li><i class="fal fa-bed"></i></li>
                                <li><i class="fal fa-wifi"></i></li>
                                <li><i class="fal fa-car"></i></li>
                                <li><i class="fal fa-coffee"></i></li>
                                <li><i class="fal fa-concierge-bell"></i></li>
                                <li><i class="fal fa-compress-arrows-alt"></i></li>
                                <li><i class="fal fa-swimmer"></i></li>
                            </ul>
                            <h4 class="title"><a href="{{ url('rooms-details') }}">Minimal Duplex Room</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                            <span class="price">IDR 1.000.000/Night</span>
                            <a href="#" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="room-box mb-30">
                        <div class="room-img-wrap">
                            <div class="room-img" style="background-image: url(assets/img/room/08.jpg);"></div>
                        </div>
                        <div class="room-desc">
                            <ul class="icons">
                                <li><i class="fal fa-bed"></i></li>
                                <li><i class="fal fa-wifi"></i></li>
                                <li><i class="fal fa-car"></i></li>
                                <li><i class="fal fa-coffee"></i></li>
                                <li><i class="fal fa-concierge-bell"></i></li>
                                <li><i class="fal fa-compress-arrows-alt"></i></li>
                                <li><i class="fal fa-swimmer"></i></li>
                            </ul>
                            <h4 class="title"><a href="{{ url('rooms-details') }}">Minimal Duplex Room</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                            <span class="price">IDR 1.000.000/Night</span>
                            <a href="#" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="room-box mb-30">
                        <div class="room-img-wrap">
                            <div class="room-img" style="background-image: url(assets/img/room/09.jpg);"></div>
                        </div>
                        <div class="room-desc">
                            <ul class="icons">
                                <li><i class="fal fa-bed"></i></li>
                                <li><i class="fal fa-wifi"></i></li>
                                <li><i class="fal fa-car"></i></li>
                                <li><i class="fal fa-coffee"></i></li>
                                <li><i class="fal fa-concierge-bell"></i></li>
                                <li><i class="fal fa-compress-arrows-alt"></i></li>
                                <li><i class="fal fa-swimmer"></i></li>
                            </ul>
                            <h4 class="title"><a href="{{ url('rooms-details') }}">Minimal Duplex Room</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                            <span class="price">IDR 1.000.000/Night</span>
                            <a href="#" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="room-box mb-30">
                        <div class="room-img-wrap">
                            <div class="room-img" style="background-image: url(assets/img/room/10.jpg);"></div>
                        </div>
                        <div class="room-desc">
                            <ul class="icons">
                                <li><i class="fal fa-bed"></i></li>
                                <li><i class="fal fa-wifi"></i></li>
                                <li><i class="fal fa-car"></i></li>
                                <li><i class="fal fa-coffee"></i></li>
                                <li><i class="fal fa-concierge-bell"></i></li>
                                <li><i class="fal fa-compress-arrows-alt"></i></li>
                                <li><i class="fal fa-swimmer"></i></li>
                            </ul>
                            <h4 class="title"><a href="{{ url('rooms-details') }}">Minimal Duplex Room</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                            <span class="price">IDR 1.000.000/Night</span>
                            <a href="#" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="room-box mb-30">
                        <div class="room-img-wrap">
                            <div class="room-img" style="background-image: url(assets/img/room/11.jpg);"></div>
                        </div>
                        <div class="room-desc">
                            <ul class="icons">
                                <li><i class="fal fa-bed"></i></li>
                                <li><i class="fal fa-wifi"></i></li>
                                <li><i class="fal fa-car"></i></li>
                                <li><i class="fal fa-coffee"></i></li>
                                <li><i class="fal fa-concierge-bell"></i></li>
                                <li><i class="fal fa-compress-arrows-alt"></i></li>
                                <li><i class="fal fa-swimmer"></i></li>
                            </ul>
                            <h4 class="title"><a href="{{ url('rooms-details') }}">Minimal Duplex Room</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                            <span class="price">IDR 1.000.000/Night</span>
                            <a href="#" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="room-box mb-30">
                        <div class="room-img-wrap">
                            <div class="room-img" style="background-image: url(assets/img/room/12.jpg);"></div>
                        </div>
                        <div class="room-desc">
                            <ul class="icons">
                                <li><i class="fal fa-bed"></i></li>
                                <li><i class="fal fa-wifi"></i></li>
                                <li><i class="fal fa-car"></i></li>
                                <li><i class="fal fa-coffee"></i></li>
                                <li><i class="fal fa-concierge-bell"></i></li>
                                <li><i class="fal fa-compress-arrows-alt"></i></li>
                                <li><i class="fal fa-swimmer"></i></li>
                            </ul>
                            <h4 class="title"><a href="{{ url('rooms-details') }}">Minimal Duplex Room</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                            <span class="price">IDR 1.000.000/Night</span>
                            <a href="#" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination-wrap">
                <ul>
                    <li><a href="#"><i class="far fa-angle-double-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">10</a></li>
                    <li><a href="#"><i class="far fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== ROOM-GRIRD END ======-->
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
