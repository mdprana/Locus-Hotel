<!-------------------------------------------------------------------------------------
    Name: Locus Hotel
    Author: Made Pranajaya
    Author URL: https://github.com/mdprana

    Note: This is Room Details Page.
--------------------------------------------------------------------------------------->

@include('layout-all')

    <!--====== Title ======-->
    <title> {{$page_name}} • Locus Hotel Room Details </title>
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
                <h2 class="page-title">Room Details</h2>

                <ul class="breadcrumb-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Rooms</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <!--====== ROOM-DETAILS START ======-->
    <section class="room-details pt-120 pb-90">
        <div class="container">
            <div class="row">
                <!-- details -->
                <div class="col-lg-8">
                    <div class="deatils-box">
                        <div class="title-wrap">
                            <div class="title">
                                <div class="room-cat">double bed</div>
                                <h2>Luxury Double Bed</h2>
                            </div>
                            <div class="price">
                                IDR 1.000.000<span>/Night</span>
                            </div>
                        </div>
                        <div class="thumb">
                          <div class="room-details-slider">
                            <img src="assets/img/room/details.jpg" alt="images">
                            <img src="assets/img/room/details-2.jpg" alt="images">
                            <img src="assets/img/room/details-3.jpg" alt="images">
                            <img src="assets/img/room/details-4.jpg" alt="images">
                            <img src="assets/img/room/details-5.jpg" alt="images">
                            <img src="assets/img/room/details-6.jpg" alt="images">
                            <img src="assets/img/room/details-7.jpg" alt="images">
                          </div>
                          <div class="room-details-slider-nav">
                            <img src="assets/img/room/sm/details.jpg" alt="images">
                            <img src="assets/img/room/sm/details-2-sm.jpg" alt="images">
                            <img src="assets/img/room/sm/details-3-sm.jpg" alt="images">
                            <img src="assets/img/room/sm/details-4-sm.jpg" alt="images">
                            <img src="assets/img/room/sm/details-5-sm.jpg" alt="images">
                            <img src="assets/img/room/sm/details-6-sm.jpg" alt="images">
                            <img src="assets/img/room/sm/details-7-sm.jpg" alt="images">
                          </div>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed
                            ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                            dolore magnam aliquam quaerat voluptatem.
                        </p>
                        <div class="room-fearures clearfix mt-60 mb-60">
                            <h3 class="subtitle">Amenities</h3>
                            <ul class="room-fearures-list">
                                <li><i class="fal fa-bath"></i> Air conditioner</li>
                                <li><i class="fal fa-wifi"></i>High speed WiFi</li>
                                <li><i class="fal fa-key"></i>Strong Locker</li>
                                <li><i class="fal fa-cut"></i>Breakfast</li>
                                <li><i class="fal fa-guitar"></i>Kitchen</li>
                                <li><i class="fal fa-lock"></i>Smart Security</li>
                                <li><i class="fal fa-broom"></i>Cleaning</li>
                                <li><i class="fal fa-shower"></i>Shower</li>
                                <li><i class="fal fa-headphones-alt"></i>24/7 Online Support</li>
                                <li><i class="fal fa-shopping-basket"></i>Grocery</li>
                                <li><i class="fal fa-bed"></i>Single bed</li>
                                <li><i class="fal fa-users"></i>Expert Team</li>
                                <li><i class="fal fa-shopping-cart"></i>shop near</li>
                                <li><i class="fal fa-bus"></i>Towels</li>
                            </ul>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed
                            ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                            dolore magnam aliquam quaerat voluptatem.
                        </p>
                        <div class="testimonials mt-60 mb-20">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="testimonial-box">
                                        <div class="client-img">
                                            <img src="assets/img/testimonial/01.png" alt="images">
                                            <span class="check"><i class="fal fa-check"></i></span>
                                        </div>
                                        <h3>Rosalina D. William</h3>
                                        <span class="clinet-post">Founder, qux co.</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="testimonial-box">
                                        <div class="client-img">
                                            <img src="assets/img/testimonial/02.png" alt="images">
                                            <span class="check"><i class="fal fa-check"></i></span>
                                        </div>
                                        <h3>Donald H. Hilixer</h3>
                                        <span class="clinet-post">Founder, hilix</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room-rules clearfix mb-60">
                            <h3 class="subtitle">Room Rules</h3>
                            <ul class="room-rules-list">
                                <li>No smoking, parties or events.</li>
                                <li>Check-in time from 2 PM, check-out by 10 AM.</li>
                                <li>Time to time car parking</li>
                                <li>Download Our minimal app</li>
                                <li>Browse regular our website</li>
                            </ul>
                        </div>
                        <div class="cancellation-box clearfix mb-60">
                            <h3 class="subtitle">Cancellation</h3>
                            <p>
                                Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus
                                mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu
                                dolor. <strong>Cancel up</strong> to <strong>14 days</strong> to get a full refund.
                            </p>
                        </div>
                        <div class="room-map mb-60" id="roomMap"></div>
                        <div class="related-room">
                            <h3 class="subtitle">Related Rooms</h3>
                            <div class="row room-gird-loop">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="room-box mb-30">
                                        <div class="room-img-wrap">
                                            <div class="room-img"
                                                style="background-image: url(assets/img/room/13.jpg);">
                                            </div>
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
                                            <h4 class="title"><a href="#">Minimal Duplex Room</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod
                                                tempor.</p>
                                            <span class="price">IDR 1.000.000/Night</span>
                                            <a href="#" class="book-btn">Booking Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="room-box mb-30">
                                        <div class="room-img-wrap">
                                            <div class="room-img"
                                                style="background-image: url(assets/img/room/14.jpg);">
                                            </div>
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
                                            <h4 class="title"><a href="#">Minimal Duplex Room</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod
                                                tempor.</p>
                                            <span class="price">IDR 1.000.000/Night</span>
                                            <a href="#" class="book-btn">Booking Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- form -->
                <div class="col-lg-4">
                    <div class="room-booking-form">
                        <h5 class="title">Check Availability</h5>
                        <form action="#">
                            <div class="input-group input-group-two left-icon mb-20">
                                <label for="arrival-date">Check In</label>
                                <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                                <input type="text" placeholder="29-9-2024" name="arrival-date" id="arrival-date">
                            </div>
                            <div class="input-group input-group-two left-icon mb-20">
                                <label for="departure-date">Check Out</label>
                                <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                                <input type="text" placeholder="30-9-2024" name="departure-date" id="departure-date">
                            </div>
                            <div class="input-group input-group-two left-icon mb-20">
                                <label for="room">Rooms</label>
                                <select name="room" id="room">
                                    <option value="1">1 Room</option>
                                    <option value="2" selected>2 Room</option>
                                    <option value="4">4 Room</option>
                                    <option value="8">8 Room</option>
                                </select>
                            </div>
                            <div class="input-group input-group-two left-icon mb-20">
                                <label for="departure-date">Guest</label>
                                <select name="guest" id="guest">
                                    <option value="8">8 Guest</option>
                                    <option value="10" selected>10 Guest</option>
                                    <option value="12">12 Guest</option>
                                    <option value="15">15 Guest</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <button class="main-btn btn-filled">check availability</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== ROOM-DETAILS END ======-->
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
