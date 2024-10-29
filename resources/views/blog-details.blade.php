<!-------------------------------------------------------------------------------------
    Name: Locus Hotel
    Author: Made Pranajaya
    Author URL: https://github.com/mdprana

    Note: This is Blog Details Page.
--------------------------------------------------------------------------------------->

@include('layout-all')

  <!--====== Title ======-->
  <title> {{$page_name}} • Locus Hotel Blog Details </title>
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
        <h2 class="page-title">Blog Details</h2>

        <ul class="breadcrumb-nav">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li class="active">Blog</li>
        </ul>
      </div>
    </div>
  </section>
  <!--====== BREADCRUMB PART END ======-->
  <!--====== BLOG SECTION START ======-->
  <section class="blog-section pt-120 pb-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="blog-details-box">
            <div class="entry-content">
              <a href="#" class="cat">Businese</a>
              <h2 class="title">Lorem ipsum dolor sit amet, consecte cing elit, sed do eiusmod tempor.
              </h2>
              <ul class="post-meta">
                <li><a href="#"><i class="fal fa-user"></i>by Piklo D. Sindom</a></li>
                <li><a href="#"><i class="fal fa-calendar-alt"></i>24th March 2019</a></li>
                <li><a href="#"><i class="fal fa-comments"></i>35 Comments</a></li>
              </ul>
              <p class="mb-30">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam
                eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.
              </p>
              <figure class="mt-45 mb-45">
                <img src="assets/img/blog-details/01.jpg" alt="Image">
              </figure>
              <h3 class="subtitle"> A cleansing hot shower or bath</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
              </p>
              <div class="gap"></div>
              <h3 class="subtitle">Setting the mood with incense</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
              </p>
              <div class="gap"></div>
              <h3 class="subtitle">Setting the mood with incense</h3>
              <ul class="list-icon">
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</li>
              </ul>
              <blockquote class="mt-40 mb-40">
                <span class="quote-by">by Hetmayar</span>
                Viral dreamcatcher keytar typewriter, aest hetic offal umami. Aesthetic polaroid pug
                pitchfork post-ironic.
              </blockquote>
              <p class="mb-30">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                voluptatem accusantium.
              </p>
              <div class="row align-items-center">
                <div class="col-md-5 mb-30">
                  <img src="assets/img/blog-details/02.jpg" alt="Image">
                </div>
                <div class="col-md-7 mb-30">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat
                  </p>
                </div>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                voluptatem.
              </p>
            </div>
            <div class="entry-footer">
              <div class="tag-and-share mt-50 mb-50 d-md-flex align-items-center justify-content-between">
                <div class="tag">
                  <h5>Related Tags</h5>
                  <ul>
                    <li><a href="#">Popular</a></li>
                    <li><a href="#">desgin</a></li>
                    <li><a href="#">ux</a></li>
                  </ul>
                </div>
                <div class="share text-md-right">
                  <h5>Social Share</h5>
                  <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-medium"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#"><i class="fab fa-tumblr"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="post-nav d-md-flex align-items-center justify-content-between">
                <div class="prev-post">
                  <span>Prev Post</span>
                  <a href="#">Tips On Minimalist</a>
                </div>
                <span class="icon">
                  <img src="assets/img/blog-details/icon.png" alt="icon">
                </span>
                <div class="next-post text-right">
                  <span>Next Post</span>
                  <a href="#">Less Is More</a>
                </div>
              </div>
              <div class="related-post mt-50">
                <h3 class="mb-30">Releted Post</h3>
                <div class="row">
                  <div class="col-md-6">
                    <div class="related-post-box mb-50">
                      <div class="thumb" style="background-image: url(assets/img/blog-details/03.jpg);">
                      </div>
                      <div class="desc">
                        <a href="#" class="date"><i class="far fa-calendar-alt"></i>24th March
                          2019</a>
                        <h4><a href="#">A series of iOS 7 inspire vector icons sense.</a></h4>
                        <p>Lorem ipsum dolor sit amet, conse ctet ur adipisicing elit, sed
                          doing.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="related-post-box mb-50">
                      <div class="thumb" style="background-image: url(assets/img/blog-details/04.jpg);">
                      </div>
                      <div class="desc">
                        <a href="#" class="date"><i class="far fa-calendar-alt"></i>24th March
                          2019</a>
                        <h4><a href="#">A series of iOS 7 inspire vector icons sense.</a></h4>
                        <p>Lorem ipsum dolor sit amet, conse ctet ur adipisicing elit, sed
                          doing.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="author-info-box mb-45">
                <div class="author-img">
                  <img src="assets/img/blog-details/author.jpg" alt="Image">
                </div>
                <div class="info-text">
                  <span>Written by</span>
                  <h3>Rosalina D. William</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation is enougn for today.
                  </p>
                </div>
              </div>
            </div>
            <div class="comment-template">
              <h3 class="box-title">03 Comments</h3>
              <ul class="comments-list mb-100">
                <li>
                  <div class="comment-img">
                    <img src="assets/img/blog-details/avatar-1.jpg" alt="img">
                  </div>
                  <div class="comment-desc">
                    <div class="desc-top">
                      <h6>Rosalina Kelian</h6>
                      <span class="date">19th May 2018</span>
                      <a href="#" class="reply-link"><i class="far fa-reply"></i>Reply</a>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat.
                    </p>
                  </div>
                  <ul class="children">
                    <li>
                      <div class="comment-img">
                        <img src="assets/img/blog-details/avatar-2.jpg" alt="img">
                      </div>
                      <div class="comment-desc">
                        <div class="desc-top">
                          <h6>Rosalina Kelian</h6>
                          <span class="date">19th May 2018</span>
                          <a href="#" class="reply-link"><i class="far fa-reply"></i>Reply</a>
                        </div>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                          eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                          veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                          commodo
                          consequat.
                        </p>
                      </div>
                    </li>
                  </ul>
                </li>
                <li>
                  <div class="comment-img">
                    <img src="assets/img/blog-details/avatar-3.jpg" alt="img">
                  </div>
                  <div class="comment-desc">
                    <div class="desc-top">
                      <h6>Rosalina Kelian</h6>
                      <span class="date">19th May 2018</span>
                      <a href="#" class="reply-link"><i class="far fa-reply"></i>Reply</a>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat.
                    </p>
                  </div>
                </li>
              </ul>
              <h3 class="box-title">Post Comment</h3>
              <div class="comment-form">
                <form action="#">
                  <div class="input-group input-group-two textarea mb-20">
                    <textarea placeholder="Type your comments...."></textarea>
                    <div class="icon"><i class="fas fa-pen"></i></div>
                  </div>
                  <div class="input-group input-group-two mb-20">
                    <input type="text" placeholder="Type your Name....">
                    <div class="icon"><i class="fas fa-user"></i></div>
                  </div>
                  <div class="input-group input-group-two mb-20">
                    <input type="email" placeholder="Type your email....">
                    <div class="icon"><i class="fas fa-envelope"></i></div>
                  </div>
                  <div class="input-group input-group-two mb-20">
                    <input type="url" placeholder="Type your Website....">
                    <div class="icon"><i class="fas fa-globe"></i></div>
                  </div>
                  <div class="input-group  mt-30">
                    <button type="submit" class="main-btn btn-filled"><i class="far fa-comments"></i> Post
                      Comment</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Blog Sidebar -->
        <div class="col-lg-4 col-md-8 col-sm-10">
          <div class="sidebar">
            <!-- About Author Widget -->
            <div class="widget about-author-widget mb-40">
              <h5 class="widget-title">About Me</h5>
              <div class="author-box">
                <img src="assets/img/author.png" alt="author">
                <h6>Rosalina D. Willaimson</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt ut labore.</p>
                <ul class="social-icon">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-behance"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- Search Widget -->
            <div class="widget search-widget mb-40">
              <h5 class="widget-title">Search Objects</h5>
              <form action="#">
                <input type="text" placeholder="Search your keyword...">
                <button type="submit"><i class="far fa-search"></i></button>
              </form>
            </div>
            <!-- Popular Post Widget -->
            <div class="widget popular-feeds mb-40">
              <h5 class="widget-title">Popular Feeds</h5>
              <div class="popular-feed-loop">
                <div class="single-popular-feed">
                  <div class="feed-img">
                    <img src="assets/img/recent-post-wid/04.png" alt="Image">
                  </div>
                  <div class="feed-desc">
                    <h6><a href="#">Lorem ipsum dolor sit cing elit, sed do.</a></h6>
                    <span class="time"><i class="far fa-calendar-alt"></i> 24th March 2020</span>
                  </div>
                </div>
                <div class="single-popular-feed">
                  <div class="feed-img">
                    <img src="assets/img/recent-post-wid/05.png" alt="Image">
                  </div>
                  <div class="feed-desc">
                    <h6><a href="#">Lorem ipsum dolor sit cing elit, sed do.</a></h6>
                    <span class="time"><i class="far fa-calendar-alt"></i> 24th March 2020</span>
                  </div>
                </div>
                <div class="single-popular-feed">
                  <div class="feed-img">
                    <img src="assets/img/recent-post-wid/06.png" alt="Image">
                  </div>
                  <div class="feed-desc">
                    <h6><a href="#">Lorem ipsum dolor sit cing elit, sed do.</a></h6>
                    <span class="time"><i class="far fa-calendar-alt"></i> 24th March 2020</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Categories Widget -->
            <div class="widget categories-widget mb-40">
              <h5 class="widget-title">Categories</h5>
              <ul>
                <li>
                  <a href="#">Business<span>26</span></a>
                </li>
                <li>
                  <a href="#">Consultant<span>26</span></a>
                </li>
                <li>
                  <a href="#">Creative<span>26</span></a>
                </li>
                <li>
                  <a href="#">UI/UX<span>26</span></a>
                </li>
                <li>
                  <a href="#">Technology<span>26</span></a>
                </li>
              </ul>
            </div>
            <!-- Social Icon Widget -->
            <div class="widget socail-widget mb-40">
              <h5 class="widget-title">Never Miss Blog</h5>
              <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
              </ul>
            </div>
            <!-- Twitter Feeds Widget -->
            <div class="widget twitter-feed-widget mb-40">
              <h5 class="widget-title">Twitter Feeds</h5>
              <div class="twitter-looop">
                <div class="single-twitter">
                  <a href="#">
                    Rescue - #Gutenberg ready @ wordpress Theme for Creative Bloggers available on @
                    ThemeForest https://t.co/2r1POjOjgVC… https://t.co/rDAnPyClu1
                  </a>
                  <span class="date">November 25, 2018</span>
                </div>
                <div class="single-twitter">
                  <a href="#">
                    Rescue - #Gutenberg ready @ wordpress Theme for Creative Bloggers available on @
                    ThemeForest https://t.co/2r1POjOjgVC… https://t.co/rDAnPyClu1
                  </a>
                  <span class="date">November 25, 2018</span>
                </div>
                <div class="single-twitter">
                  <a href="#">
                    Rescue - #Gutenberg ready @ wordpress Theme for Creative Bloggers available on @
                    ThemeForest https://t.co/2r1POjOjgVC… https://t.co/rDAnPyClu1
                  </a>
                  <span class="date">November 25, 2018</span>
                </div>
              </div>
            </div>
            <!-- Instagram Feeds Widget -->
            <div class="widget instagram-feed-widget mb-40">
              <h5 class="widget-title">Instagram Feeds</h5>
              <ul>
                <li><img src="assets/img/instagram-wid/01.jpg" alt="Image"></li>
                <li><img src="assets/img/instagram-wid/02.jpg" alt="Image"></li>
                <li><img src="assets/img/instagram-wid/03.jpg" alt="Image"></li>
                <li><img src="assets/img/instagram-wid/04.jpg" alt="Image"></li>
                <li><img src="assets/img/instagram-wid/05.jpg" alt="Image"></li>
                <li><img src="assets/img/instagram-wid/06.jpg" alt="Image"></li>
                <li><img src="assets/img/instagram-wid/07.jpg" alt="Image"></li>
                <li><img src="assets/img/instagram-wid/08.jpg" alt="Image"></li>
                <li><img src="assets/img/instagram-wid/09.jpg" alt="Image"></li>
              </ul>
            </div>
            <!-- Popular Tags Widget -->
            <div class="widget popular-tag-widget mb-40">
              <h5 class="widget-title">Popular Tags</h5>
              <ul>
                <li><a href="#">Popular</a></li>
                <li><a href="#">design</a></li>
                <li><a href="#">ux</a></li>
                <li><a href="#">usability</a></li>
                <li><a href="#">develop</a></li>
                <li><a href="#">icon</a></li>
                <li><a href="#">business</a></li>
                <li><a href="#">consult</a></li>
                <li><a href="#">kit</a></li>
                <li><a href="#">keyboard</a></li>
                <li><a href="#">mouse</a></li>
                <li><a href="#">tech</a></li>
              </ul>
            </div>
            <!-- Banner Ad Widget -->
            <div class="widget banner-ad-widget">
              <img src="assets/img/banner-widget.jpg" alt="Image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--====== BLOG SECTION END ======-->
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
