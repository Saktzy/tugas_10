<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>VERPESHOP SHOP</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ url('public') }}/assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ url('public') }}/assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/flaticon.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/owl.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/bootstrap.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/animate.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/color.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/style.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">
        <!-- Preloader -->
        <!-- main header -->
        <header class="main-header">
            <div class="header-lower">
                <div class="large-container">
                    <div class="outer-box">
                        <figure class="logo-box"><a href="#"><img
                                    src="{{ url('public') }}/assets/images/logo.png" alt=""></a></figure>
                        <div class="menu-area">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="{{ 'home' }}">Home</a>
                                        </li>
                                        <li><a href="{{ 'shop' }}">shop</a>
                                        </li>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <ul class="menu-right-content clearfix">
                            <li><a href="{{ 'login' }}"><i class="flaticon-user"></i></a></li>
                            <li class="shop-cart">
                                <a href="{{ 'cart' }}"><i
                                        class="flaticon-shopping-cart-1"></i><span>3</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box clearfix">
                        <div class="logo-box pull-left">
                            <figure class="logo"><a href="#"><img
                                        src="{{ url('public') }}/assets/images/small-logo.png" alt=""></a>
                            </figure>
                        </div>
                        <div class="menu-area pull-right">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="#"><img src="{{ url('public') }}/assets/images/logo-2.png"
                            alt="" title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- banner-section -->
        <section class="banner-style-three">
            <div class="large-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 carousel-column">
                        <div class="carousel-content">
                            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                                <div class="slide-item"
                                    style="background-image: url({{ url('public') }}/assets/images/resource/slider-bg-4.jpg);">
                                    <div class="content-box">
                                        <h1>Discover & Shop The Trend</h1>
                                        <p>New Modern Stylist Fashionable Men's Wear Jeans Shirt.</p>
                                    </div>
                                </div>
                                <div class="slide-item"
                                    style="background-image: url({{ url('public') }}/assets/images/resource/slider-bg-5.jpg);">
                                    <div class="content-box">
                                        <h1>Discover & Shop The Trend</h1>
                                        <p>New Modern Stylist Fashionable Men's Wear Jeans Shirt.</p>
                                    </div>
                                </div>
                                <div class="slide-item"
                                    style="background-image: url({{ url('public') }}/assets/images/resource/slider-bg-6.jpg);">
                                    <div class="content-box">
                                        <h1>Discover & Shop The Trend</h1>
                                        <p>New Modern Stylist Fashionable Men's Wear Jeans Shirt.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                        <div class="inner-box">
                            <div class="single-item clearfix"
                                style="background-image: url({{ url('public') }}/assets/images/resource/slider-bg-7.jpg);">
                                <div class="pattern-layer"
                                    style="background-image: url({{ url('public') }}/assets/images/shape/shape-4.png);">
                                </div>
                                <div class="inner pull-right">
                                    <h2>CUSTOM JACKET</h2>

                                </div>
                            </div>
                            <div class="single-item clearfix"
                                style="background-image: url({{ url('public') }}/assets/images/resource/slider-bg-8.jpg);">
                                <div class="inner">
                                    <h2>CUSTOM SHOES</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- service-style-three -->
        <section class="service-style-three">
            <div class="large-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-truck"></i></div>
                                <h3><a href="#">Free Shipping</a></h3>
                                <p>Free shipping on oder over $100</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-credit-card"></i></div>
                                <h3><a href="#">Secure Payment</a></h3>
                                <p>We ensure secure payment with PEV</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-24-7"></i></div>
                                <h3><a href="#">Support 24/7</a></h3>
                                <p>Contact us 24 hours a day, 7 days a week</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-undo"></i></div>
                                <h3><a href="#">30 Days Return</a></h3>
                                <p>Simply return it within 30 days for an exchange.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-style-three end -->
        <!-- shop-section -->
        <section class="shop-style-two">
            <div class="large-container">
                <div class="sortable-masonry sec-pad">
                    <div class="filters">
                        <ul class="filter-tabs filter-btns centred clearfix">
                            <li>OUR PRODUCT</li>
                        </ul>
                        <span class="separator"
                            style="background-image: url({{ url('public') }}/assets/images/icons/separator-1.png);"></span>
                    </div>
                    <div class="items-container row clearfix">
                        <div
                            class="col-lg-3 col-md-6 col-sm-12 shop-block masonry-item small-column best_seller new_arraivals top_rate">
                            <div class="shop-block-two">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="{{ url('public') }}/assets/images/resource/shop/shop-9.jpg"
                                            alt="">
                                        <ul class="info-list clearfix">
                                            <li>
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <span>Like us</span>
                                            </li>
                                            <li>
                                                <a href="{{ 'product' }}"><i
                                                        class="flaticon-shopping-cart-1"></i></a>
                                                <span>Add to cart</span>
                                            </li>
                                            <li>
                                                <a href="{{ url('public') }}/assets/images/resource/shop/shop-9.jpg"
                                                    class="lightbox-image" data-fancybox="gallery"><i
                                                        class="flaticon-search"></i></a>
                                                <span>View all</span>
                                            </li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="{{ 'product' }}">Cold Crewneck Sweater</a>
                                        <span class="price">$70.30</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-section end -->
        <!-- main-footer -->
        <footer class="main-footer light">
            <div class="footer-bottom">
                <div class="auto-container clearfix">
                    <div class="copyright pull-right">
                        <p><a href="#">SACTCOOP</a> &copy; 2020 All Right Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->


        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-long-arrow-alt-up"></i>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="{{ url('public') }}/assets/js/jquery.js"></script>
    <script src="{{ url('public') }}/assets/js/popper.min.js"></script>
    <script src="{{ url('public') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ url('public') }}/assets/js/owl.js"></script>
    <script src="{{ url('public') }}/assets/js/wow.js"></script>
    <script src="{{ url('public') }}/assets/js/validation.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.fancybox.js"></script>
    <script src="{{ url('public') }}/assets/js/TweenMax.min.js"></script>
    <script src="{{ url('public') }}/assets/js/appear.js"></script>
    <script src="{{ url('public') }}/assets/js/scrollbar.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.nice-select.min.js"></script>
    <script src="{{ url('public') }}/assets/js/isotope.js"></script>
    <script src="{{ url('public') }}/assets/js/countdown.js"></script>

    <!-- main-js -->
    <script src="{{ url('public') }}/assets/js/script.js"></script>
</body><!-- End of .page_wrapper -->

</html>
