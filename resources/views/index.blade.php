<!-------------------------------------------------------------------------------------
    Name: Locus Hotel
    Author: Made Pranajaya
    Author URL: https://github.com/mdprana

    Note: This is Home Page.
--------------------------------------------------------------------------------------->

@include('layout-home')

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
<!--====== BANNER PART START ======-->
<section class="banner-area banner-style-two" id="bannerSlider">
    <div class="single-banner d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="banner-content text-center">
                        <span class="promo-tag" data-animation="fadeInDown" data-delay=".6s">The ultimate luxury
                            experience</span>
                        <h1 class="title" data-animation="fadeInLeft" data-delay=".9s">The Perfect <br> Base For You
                        </h1>
                        <ul>
                            <li data-animation="fadeInUp" data-delay="1.1s">
                                <a class="main-btn btn-filled popup-video" href="https://my.matterport.com/show/?m=hwj4JLtoJsu&hr=1&f=0&play=1">take a tour </a>
                            </li>
                            <li data-animation="fadeInUp" data-delay="1.3s">
                                <a class="main-btn btn-border" href="{{ url('about-us') }}">Learn More</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner bg -->
        <div class="banner-bg" style="background-image: url(assets/img/banner/04.jpg);"></div>
        <div class="banner-overly"></div>
    </div>
    <div class="single-banner d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="banner-content text-center">
                        <span class="promo-tag" data-animation="fadeInDown" data-delay=".6s">The ultimate luxury
                            experience</span>
                        <h1 class="title" data-animation="fadeInLeft" data-delay=".9s">The Perfect <br> Base For You
                        </h1>
                        <ul>
                            <li data-animation="fadeInUp" data-delay="1.1s">
                                <a class="main-btn btn-filled popup-video" href="https://my.matterport.com/show/?m=hwj4JLtoJsu&hr=1&f=0&play=1">take a tour </a>
                                <a class="main-btn btn-border" href="{{ url('about-us') }}">Learn More</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner bg -->
        <div class="banner-bg" style="background-image: url(assets/img/banner/05.jpg);"></div>
        <div class="banner-overly"></div>
    </div>
</section>
<!--====== BANNER PART ENDS ======-->
<!--====== BOOKING FORM START ======-->
<section class="booking-form">
    <div class="container">
        <div class="booking-form-inner">
            <form action="#">
                <div class="row align-items-end">
                    <div class="col-lg-3 col-md-6">
                        <div class="inputs-filed mt-30">
                            <label for="arrival-date">Arrival Date</label>
                            <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                            <input type="text" placeholder="29th September 2024" name="arrival-date" id="arrival-date">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="inputs-filed mt-30">
                            <label for="departure-date">Departure Date</label>
                            <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                            <input type="text" placeholder="30th September 2024" name="departure-date"
                                id="departure-date">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="inputs-filed mt-30">
                            <label for="guests">Guests</label>
                            <select name="guests" id="guests">
                                <option value="" disabled selected>Select From Here</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="4">4</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="inputs-filed mt-30">
                            <button type="submit">check availability</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!--====== BOOKING FORM END ======-->
<!--====== TEXT BLOCK START ======-->
<section class="text-block pt-115 pb-115">
    <div class="container">
        <div class="row align-items-center justify-content-center wow fadeInLeft" data-wow-delay=".3s">
            <div class="col-lg-7">
                <div class="text-img text-center text-lg-left mb-small">
                    <img src="assets/img/text-block/02.jpg" alt="Image">
                </div>
            </div>
            <div class="col-lg-5 col-md-8 col-sm-10 wow fadeInRight" data-wow-delay=".5s">
                <div class="block-text">
                    <div class="section-title mb-20">
                        <span class="title-tag">Take a tour</span>
                        <h2>Discover Our Underground.</h2>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="{{ url('our-offers') }}" class="main-btn btn-filled mt-40">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== TEXT BLOCK END ======-->
<!--====== CORE FEATURES START ======-->
<section class="core-feature-section bg-white pt-115 pb-115">
    <div class="container">
        <div class="section-title text-center mb-50">
            <span class="title-tag"> facilities </span>
            <h2>Core Features</h2>
        </div>
        <!-- Featre Loop -->
        <div class="row features-loop">
            <div class="col-lg-4 col-sm-6 order-1">
                <div class="feature-box with-hover-img wow fadeInLeft" data-wow-delay=".3s">
                    <div class="icon">
                        <i class="flaticon-rating"></i>
                    </div>
                    <h3><a href="#">Have High Rating</a></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna..
                    </p>
                    <span class="count">01</span>
                    <div class="hover-img" style="background-image: url(assets/img/feature/01.jpg);"></div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 order-2">
                <div class="feature-box wow fadeInUp" data-wow-delay=".4s">
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
                <div class="feature-box with-hover-img wow fadeInRight" data-wow-delay=".5s">
                    <div class="icon">
                        <i class="flaticon-location-pin"></i>
                    </div>
                    <h3><a href="#">Best Locations</a></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna..
                    </p>
                    <span class="count">03</span>
                    <div class="hover-img" style="background-image: url(assets/img/feature/02.jpg);"></div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 order-4 order-sm-3 order-lg-4">
                <div class="feature-box wow fadeInLeft" data-wow-delay=".7s">
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
                <div class="feature-box with-hover-img wow fadeInUp" data-wow-delay=".9s">
                    <div class="icon">
                        <i class="flaticon-credit-card"></i>
                    </div>
                    <h3><a href="#">Payment Options</a></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna..
                    </p>
                    <span class="count">05</span>
                    <div class="hover-img" style="background-image: url(assets/img/feature/03.jpg);"></div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 order-6">
                <div class="feature-box wow fadeInDown" data-wow-delay="1.1s">
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
<!--====== FEATURE ROOM START ======-->
<section class="feature-room-section pt-155 pb-115">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-8 col-sm-7">
                <div class="section-title">
                    <span class="title-tag">Room</span>
                    <h2>Featured Room</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-5 d-none d-sm-block">
                <div class="feature-room-arrow arrow-style text-right">
                </div>
            </div>
        </div>
        <!-- Room Looop -->
        <div class="row room-gird-loop mt-80 feature-room-slider">
            <div class="col-lg-4">
                <div class="room-box">
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
            <div class="col-lg-4">
                <div class="room-box">
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
            <div class="col-lg-4">
                <div class="room-box">
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
            <div class="col-lg-4">
                <div class="room-box">
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
        </div>
    </div>
</section>
<!--====== FEATURE ROOM END ======-->
<!--====== COUNTER UP START ======-->
<section class="counter-section bg-black pt-100 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-6">
                <div class="counter-box">
                    <div class="icon">
                        <img src="assets/img/icon/01.png" alt="Icon">
                    </div>
                    <h4><span class="counter">100</span>k<span class="plus-icon">+</span></h4>
                    <span class="title">Served Clients</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div class="counter-box">
                    <div class="icon">
                        <img src="assets/img/icon/02.png" alt="Icon">
                    </div>
                    <h4><span class="counter">250</span><span class="plus-icon">+</span></h4>
                    <span class="title">Staff Members</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div class="counter-box">
                    <div class="icon">
                        <img src="assets/img/icon/03.png" alt="Icon">
                    </div>
                    <h4><span class="counter">10</span>M<span class="plus-icon">+</span></h4>
                    <span class="title">Funds Raised</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div class="counter-box">
                    <div class="icon">
                        <img src="assets/img/icon/04.png" alt="Icon">
                    </div>
                    <h4><span class="counter">30</span>k<span class="plus-icon">+</span></h4>
                    <span class="title">Available Rooms</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== COUNTER UP END ======-->
<!--====== TESTIMONIAL SLIDER START ======-->
<section class="testimonial-section pb-115 pt-115">
    <div class="container">
        <div class="section-title text-center mb-80">
            <span class="title-tag">testimonials</span>
            <h2>Client Feedback</h2>
        </div>
        <!-- testimonials loop  -->
        <div class="row testimonial-slider">
            <div class="col-lg-4">
                <div class="testimonial-box">
                    <div class="client-img">
                        <img src="assets/img/testimonial/01.png" alt="images">
                        <span class="check"><i class="fal fa-check"></i></span>
                    </div>
                    <h3>Rosalina D. William</h3>
                    <span class="clinet-post">Founder, qux co.</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-box">
                    <div class="client-img">
                        <img src="assets/img/testimonial/02.png" alt="images">
                        <span class="check"><i class="fal fa-check"></i></span>
                    </div>
                    <h3>Donald H. Hilixer</h3>
                    <span class="clinet-post">Founder, hilix</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-box">
                    <div class="client-img">
                        <img src="assets/img/testimonial/03.png" alt="images">
                        <span class="check"><i class="fal fa-check"></i></span>
                    </div>
                    <h3>Browfish Dumble</h3>
                    <span class="clinet-post">Founder, Condo</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-box">
                    <div class="client-img">
                        <img src="assets/img/testimonial/01.png" alt="images">
                        <span class="check"><i class="fal fa-check"></i></span>
                    </div>
                    <h3>Donald H. Hilixer</h3>
                    <span class="clinet-post">Founder, hilix</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== TESTIMONIAL SLIDER END ======-->
<!--====== VIDEO WRAP START ======-->
<section class="video-wrap video-wrap-two video-about mb-60" style="background-image: url(assets/img/bg/05.jpg);">
    <a href="https://www.youtube.com/watch?v=US7bGTUkBfg" class="popup-video wow fadeInDown" data-wow-delay=".3s">
        <i class="fas fa-play"></i>
    </a>
</section>
<!--====== VIDEO WRAP END ======-->
<!--====== LATEST BLOG START ======-->
<section class="latest-blog pt-115 pb-115">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-8 col-sm-7">
                <div class="section-title">
                    <span class="title-tag">Blog</span>
                    <h2>Blog Feeds</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-5 d-none d-sm-block">
                <div class="latest-post-arrow arrow-style text-right">

                </div>
            </div>
        </div>
        <!-- Latest post loop -->
        <div class="row latest-post-slider mt-80">
            <div class="col-lg-4">
                <div class="latest-post-box">
                    <div class="post-img" style="background-image: url(assets/img/latest-post/01.jpg);"></div>
                    <div class="post-desc">
                        <ul class="post-meta">
                            <li>
                                <a href="{{ url('blog-details') }}"><i class="fal fa-calendar-alt"></i>23rd March 2024</a>
                            </li>
                            <li>
                                <a href="{{ url('blog-details') }}"><i class="fal fa-user"></i>By Admin</a>
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
            <div class="col-lg-4">
                <div class="latest-post-box">
                    <div class="post-img" style="background-image: url(assets/img/latest-post/02.jpg);"></div>
                    <div class="post-desc">
                        <ul class="post-meta">
                            <li>
                                <a href="{{ url('blog-details') }}"><i class="fal fa-calendar-alt"></i>23rd March 2024</a>
                            </li>
                            <li>
                                <a href="{{ url('blog-details') }}"><i class="fal fa-user"></i>By Admin</a>
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
            <div class="col-lg-4">
                <div class="latest-post-box">
                    <div class="post-img" style="background-image: url(assets/img/latest-post/03.jpg);"></div>
                    <div class="post-desc">
                        <ul class="post-meta">
                            <li>
                                <a href="{{ url('blog-details') }}"><i class="fal fa-calendar-alt"></i>23rd March 2024</a>
                            </li>
                            <li>
                                <a href="{{ url('blog-details') }}"><i class="fal fa-user"></i>By Admin</a>
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
            <div class="col-lg-4">
                <div class="latest-post-box">
                    <div class="post-img" style="background-image: url(assets/img/latest-post/01.jpg);"></div>
                    <div class="post-desc">
                        <ul class="post-meta">
                            <li>
                                <a href="{{ url('blog-details') }}"><i class="fal fa-calendar-alt"></i>23rd March 2024</a>
                            </li>
                            <li>
                                <a href="{{ url('blog-details') }}"><i class="fal fa-user"></i>By Admin</a>
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
            <div class="col-lg-4">
                <div class="latest-post-box">
                    <div class="post-img" style="background-image: url(assets/img/latest-post/02.jpg);"></div>
                    <div class="post-desc">
                        <ul class="post-meta">
                            <li>
                                <a href="{{ url('blog-details') }}"><i class="fal fa-calendar-alt"></i>23rd March 2024</a>
                            </li>
                            <li>
                                <a href="{{ url('blog-details') }}"><i class="fal fa-user"></i>By Admin</a>
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
            <div class="col-lg-4">
                <div class="latest-post-box">
                    <div class="post-img" style="background-image: url(assets/img/latest-post/03.jpg);"></div>
                    <div class="post-desc">
                        <ul class="post-meta">
                            <li>
                                <a href="{{ url('blog-details') }}"><i class="fal fa-calendar-alt"></i>23rd March 2024</a>
                            </li>
                            <li>
                                <a href="{{ url('blog-details') }}"><i class="fal fa-user"></i>By Admin</a>
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
<!--====== INSTAGRAM FEED PART START ======-->
<section class="instagram-feed-section">
    <div class="container-fluid p-0">
        <div class="instagram-slider">
            <div class="image">
                <a href="assets/img/instagram/01.jpg" class="insta-popup">
                    <img src="assets/img/instagram/01.jpg" alt="instagram-feed">
                </a>
            </div>
            <div class="image">
                <a href="assets/img/instagram/02.jpg" class="insta-popup">
                    <img src="assets/img/instagram/02.jpg" alt="instagram-feed">
                </a>
            </div>
            <div class="image">
                <a href="assets/img/instagram/03.jpg" class="insta-popup">
                    <img src="assets/img/instagram/03.jpg" alt="instagram-feed">
                </a>
            </div>
            <div class="image">
                <a href="assets/img/instagram/04.jpg" class="insta-popup">
                    <img src="assets/img/instagram/04.jpg" alt="instagram-feed">
                </a>
            </div>
            <div class="image">
                <a href="assets/img/instagram/05.jpg" class="insta-popup">
                    <img src="assets/img/instagram/05.jpg" alt="instagram-feed">
                </a>
            </div>
            <div class="image">
                <a href="assets/img/instagram/06.jpg" class="insta-popup">
                    <img src="assets/img/instagram/06.jpg" alt="instagram-feed">
                </a>
            </div>
            <div class="image">
                <a href="assets/img/instagram/01.jpg" class="insta-popup">
                    <img src="assets/img/instagram/01.jpg" alt="instagram-feed">
                </a>
            </div>
            <div class="image">
                <a href="assets/img/instagram/02.jpg" class="insta-popup">
                    <img src="assets/img/instagram/02.jpg" alt="instagram-feed">
                </a>
            </div>
            <div class="image">
                <a href="assets/img/instagram/03.jpg" class="insta-popup">
                    <img src="assets/img/instagram/03.jpg" alt="instagram-feed">
                </a>
            </div>
            <div class="image">
                <a href="assets/img/instagram/04.jpg" class="insta-popup">
                    <img src="assets/img/instagram/04.jpg" alt="instagram-feed">
                </a>
            </div>
            <div class="image">
                <a href="assets/img/instagram/05.jpg" class="insta-popup">
                    <img src="assets/img/instagram/05.jpg" alt="instagram-feed">
                </a>
            </div>
            <div class="image">
                <a href="assets/img/instagram/06.jpg" class="insta-popup">
                    <img src="assets/img/instagram/06.jpg" alt="instagram-feed">
                </a>
            </div>
        </div>
    </div>
</section>
<!--====== INSTAGRAM FEED PART END ======-->
<!--====== Back to Top ======-->
<a href="#" class="back-to-top" id="backToTop">
    <i class="fal fa-angle-double-up"></i>
</a>
<!--====== FOOTER START ======-->
<footer class="footer-two">
    <div class="footer-widget-area pt-100 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 order-1">
                    <!-- Site Info Widget -->
                    <div class="widget site-info-widget mb-50">
                        <div class="footer-logo mb-50">
                            <img src="assets/img/footer-logo.png" alt="Logo">
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitat ion ullamco laboris nisi.
                        </p>
                        <div class="social-links mt-40">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-3 order-lg-2">
                    <!-- Nav Widget -->
                    <div class="widget nav-widget mb-50">
                        <div>
                            <h4 class="widget-title">Services.</h4>
                            <ul>
                                <li><a href="#">Resturent & Bar</a></li>
                                <li><a href="#">Gaming Zone</a></li>
                                <li><a href="#">Swimming Pool</a></li>
                                <li><a href="#">Marrige Party</a></li>
                                <li><a href="#">Restaurant</a></li>
                                <li><a href="#">Party Planning</a></li>
                                <li><a href="#">Conference Room</a></li>
                                <li><a href="#">Tour Consultancy</a></li>
                                <li><a href="#">Coctail Party Houses</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 order-2 order-lg-3">
                    <!-- Contact Widget -->
                    <div class="widget contact-widget mb-50">
                        <h4 class="widget-title">Contact Us.</h4>
                        <div class="contact-lists">
                            <div class="contact-box">
                                <div class="icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="desc">
                                    <h6 class="title">Phone Number</h6>
                                    +62 812 3456 7890
                                </div>
                            </div>
                            <div class="contact-box">
                                <div class="icon">
                                    <i class="flaticon-message"></i>
                                </div>
                                <div class="desc">
                                    <h6 class="title">Email Address</h6>
                                    <a href="#">locushotel@business.com</a>
                                </div>
                            </div>
                            <div class="contact-box">
                                <div class="icon">
                                    <i class="flaticon-location-pin"></i>
                                </div>
                                <div class="desc">
                                    <h6 class="title">Office Address</h6>
                                    Badung, Bali, Indonesia
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area pt-30 pb-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-5 order-2 order-md-1">
                    <p class="copyright-text copyright-two">Copyright By@<a href="#">Locus Hotel</a> - 2024</p>
                </div>
                <div class="col-lg-6 col-md-7 order-1 order-md-2">
                    <div class="footer-menu text-center text-md-right">
                        <ul>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy Environmental Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--====== FOOTER END ======-->

<!--====== jquery js ======-->
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
