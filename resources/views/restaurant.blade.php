<!-------------------------------------------------------------------------------------
    Name: Locus Hotel
    Author: Made Pranajaya
    Author URL: https://github.com/mdprana

    Note: This is Restaurant Page.
--------------------------------------------------------------------------------------->

@include('layout-all')

    <!--====== Title ======-->
    <title> {{$page_name}} • Locus Hotel Restaurant </title>
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
                <h2 class="page-title">Restaurant</h2>

                <ul class="breadcrumb-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Restaurant</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <!--====== RESTAURANT PART START ======-->
    <section class="restaurant-tab-area pt-120 pb-90">
        <div class="container">
            <ul class="restaurant-rood-list row justify-content-center nav nav-pills mb-30" id="restaurant-tab"
                role="tablist">
                <li class="nav-item col-lg-2 col-md-3 col-sm-4 col-6">
                    <a class="nav-link" data-bs-toggle="pill" href="#chicken">
                        <i class="flaticon-boiled"></i>
                        <span class="title">Chicken</span>
                    </a>
                </li>
                <li class="nav-item col-lg-2 col-md-3 col-sm-4 col-6">
                    <a class="nav-link active" data-bs-toggle="pill" href="#italian">
                        <i class="flaticon-pizza"></i>
                        <span class="title">italian</span>
                    </a>
                </li>
                <li class="nav-item col-lg-2 col-md-3 col-sm-4 col-6">
                    <a class="nav-link" data-bs-toggle="pill" href="#coffee">
                        <i class="flaticon-coffee"></i>
                        <span class="title">coffee</span>
                    </a>
                </li>
                <li class="nav-item col-lg-2 col-md-3 col-sm-4 col-6">
                    <a class="nav-link" data-bs-toggle="pill" href="#bake-cake">
                        <i class="flaticon-cake"></i>
                        <span class="title">bake cake</span>
                    </a>
                </li>
                <li class="nav-item col-lg-2 col-md-3 col-sm-4 col-6">
                    <a class="nav-link" data-bs-toggle="pill" href="#cokkies">
                        <i class="flaticon-cookie"></i>
                        <span class="title">cokkies</span>
                    </a>
                </li>
                <li class="nav-item col-lg-2 col-md-3 col-sm-4 col-6">
                    <a class="nav-link" data-bs-toggle="pill" href="#coctail">
                        <i class="flaticon-cocktail"></i>
                        <span class="title">coctail</span>
                    </a>
                </li>
            </ul>
            <!-- tab content -->
            <div class="tab-content " id="restaurant-tabContent">
                <div class="tab-pane fade" id="italian" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/01.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">Chicken</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/02.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">Chicken</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/03.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">Chicken</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/04.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">Chicken</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="chicken" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/01.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">italian food</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/02.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">italian food</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/03.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">italian food</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/04.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">italian food</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="coffee" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/01.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">coffee</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/02.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">coffee</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/03.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">coffee</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/04.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">coffee</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="bake-cake" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/01.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">bake cake</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/02.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">bake cake</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/03.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">bake cake</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/04.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">bake cake</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="cokkies" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/01.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">cokkies</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/02.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">cokkies</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/03.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">cokkies</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/04.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">cokkies</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="coctail" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/01.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">coctail</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/02.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">coctail</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/03.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">coctail</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="assets/img/restu/04.jpg" alt="images">
                                    <span class="price">IDR 100.000</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">coctail</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== RESTAURANT PART END ======-->

    <!--====== MENU AREA START ======-->
    <section class="menu-area gradient-white pt-115 pb-115">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title text-center mb-80">
                <span class="title-tag">available</span>
                <h2>Trending Menu</h2>
            </div>
            <!-- Menu Looop -->
            <div class="menu-loop">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="single-menu-box wow fadeInUp" data-wow-delay=".3s">
                            <div class="menu-img" style="background-image: url(assets/img/menu/01.jpg);">
                            </div>
                            <div class="menu-desc">
                                <h4><a href="#">Eggs & Bacon</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                                <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-menu-box wow fadeInUp" data-wow-delay=".4s">
                            <div class="menu-img" style="background-image: url(assets/img/menu/02.jpg);">
                            </div>
                            <div class="menu-desc">
                                <h4><a href="#">Tea or Coffee</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                                <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-menu-box wow fadeInUp" data-wow-delay=".5s">
                            <div class="menu-img" style="background-image: url(assets/img/menu/03.jpg);">
                            </div>
                            <div class="menu-desc">
                                <h4><a href="#">Chia Oatmeal</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                                <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-menu-box wow fadeInUp" data-wow-delay=".6s">
                            <div class="menu-img" style="background-image: url(assets/img/menu/04.jpg);">
                            </div>
                            <div class="menu-desc">
                                <h4><a href="#">Juice</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                                <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-menu-box wow fadeInUp" data-wow-delay=".7s">
                            <div class="menu-img" style="background-image: url(assets/img/menu/05.jpg);">
                            </div>
                            <div class="menu-desc">
                                <h4><a href="#">Chia Oatmeal</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                                <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="single-menu-box wow fadeInUp" data-wow-delay=".3s">
                            <div class="menu-img" style="background-image: url(assets/img/menu/06.jpg);">
                            </div>
                            <div class="menu-desc">
                                <h4><a href="#">Fruit Parfait</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                                <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-menu-box wow fadeInUp" data-wow-delay=".4s">
                            <div class="menu-img" style="background-image: url(assets/img/menu/07.jpg);">
                            </div>
                            <div class="menu-desc">
                                <h4><a href="#">Marmalade Selection</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                                <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-menu-box wow fadeInUp" data-wow-delay=".5s">
                            <div class="menu-img" style="background-image: url(assets/img/menu/08.jpg);">
                            </div>
                            <div class="menu-desc">
                                <h4><a href="#">Cheese Platen</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                                <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-menu-box wow fadeInUp" data-wow-delay=".6s">
                            <div class="menu-img" style="background-image: url(assets/img/menu/09.jpg);">
                            </div>
                            <div class="menu-desc">
                                <h4><a href="#">Avocado Toast</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                                <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-menu-box wow fadeInUp" data-wow-delay=".7s">
                            <div class="menu-img" style="background-image: url(assets/img/menu/10.jpg);">
                            </div>
                            <div class="menu-desc">
                                <h4><a href="#">Avocado Toast</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                                <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== MENU AREA END ======-->
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
