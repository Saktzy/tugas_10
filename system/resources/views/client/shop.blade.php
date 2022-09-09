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
    <link href="{{ url('public') }}/assets/css/jquery-ui.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/nice-select.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/color.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/style.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">
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


        <!-- page-title -->
        <section class="page-title centred">
            <div class="pattern-layer"
                style="background-image: url({{ url('public') }}/assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>VERPE SHOPE PAGE</h1>
                    <ul class="bread-crumb clearfix">
                        <li><i class="flaticon-home-1"></i><a href="{{ 'home' }}">Home</a></li>
                        <li>Shop Page</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- shop-page-section -->
        <section class="shop-page-section sidebar-page-container shop-page-2">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                        <div class="sidebar shop-sidebar">
                            <div class="sidebar-widget search-widget">
                                <form action="{{ url('shop/filter') }}" method="post" class="search-form">
                                    @csrf
                                    <div class="form-group">
                                        <input type="search" name="nama" placeholder="Search..." required=""
                                            value="{{ $nama ?? '' }}">
                                        <button type="submit"><i class="flaticon-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="sidebar-widget categories-widget">
                                <div class="widget-title">
                                    <h3>Shop by Categories</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="categories-list clearfix">
                                        <li><a href="{{ 'product' }}">Women’s Clothing (9)</a></li>
                                        <li><a href="{{ 'product' }}">Man Fashion (1)</a></li>
                                        <li><a href="{{ 'product' }}">Kid’s Clothing (5)</a></li>
                                        <li><a href="{{ 'product' }}">Jewelry & Watches (3)</a></li>
                                        <li><a href="{{ 'product' }}">Bags & Shoes (7)</a></li>
                                        <li><a href="{{ 'product' }}">Toys & Kids (2)</a></li>
                                        <li><a href="{{ 'product' }}">Electronics (6)</a></li>
                                        <li><a href="{{ 'product' }}">Computers (4)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget price-filter">
                                <div class="widget-title">
                                    <h3>Shop by Price</h3>
                                </div>
                                <div class="range-slider clearfix">
                                    <div class="price-range-slider"></div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <a href="#" class="theme-btn-two filter-btn">Filter</a>
                                        </div>
                                        <div class="pull-right">
                                            <p>Price:</p>
                                            <div class="title"></div>
                                            <div class="input"><input type="text" class="property-amount"
                                                    name="field-name" readonly=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget size-widget">
                                <div class="widget-title">
                                    <h3>Shop by Size</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="size-list clearfix">
                                        <li><a href="#">L Large</a></li>
                                        <li><a href="#">XL Extra Large</a></li>
                                        <li><a href="#">M Medium</a></li>
                                        <li><a href="#">S Small</a></li>
                                        <li><a href="#">XS Extra Small</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                        <div class="sidebar-content">
                            <div class="item-shorting clearfix">
                                <div class="left-column pull-left clearfix">
                                    <div class="text">
                                        <p>Showing 1–12 of 50 Results</p>
                                    </div>
                                </div>
                                <div class="right-column pull-right clearfix">
                                    <div class="short-box clearfix">
                                        <p>Short by</p>
                                        <div class="select-box">
                                            <select class="wide">
                                                <option data-display="Popularity">Popularity</option>
                                                <option value="1">New Collection</option>
                                                <option value="2">Top Sell</option>
                                                <option value="4">Top Ratted</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="menu-box">
                                        <a href="shop.html"><i class="flaticon-menu"></i></a>
                                        <a href="shop.html"><i class="flaticon-list"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="our-shop">
                                <div class="row clearfix">
                                    @foreach ($list_produk as $produk)
                                        <div class=" col-lg-4 col-md-6 col-sm-6">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="{{ url('public') }}/assets/images/resource/shop/shop-1.jpg"
                                                            alt="">
                                                        <ul class="info-list clearfix">
                                                            <li><a href="#"><i class="flaticon-heart"></i></a>
                                                            </li>
                                                            <li><a href="{{ url('product') }}">Add to cart</a></li>
                                                            <li><a href="{{ url('public') }}/assets/images/resource/shop/shop-1.jpg"
                                                                    class="lightbox-image" data-fancybox="gallery"><i
                                                                        class="flaticon-search"></i></a></li>
                                                        </ul>
                                                    </figure>
                                                    <div class="lower-content">
                                                        <a href="{{ url('product') }}">{{ $produk->nama }}</a>
                                                        <span class="price">${{ $produk->harga }} </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-page-section end -->


        <!-- main-footer -->
        <footer class="main-footer light">
            <div class="footer-bottom">
                <div class="auto-container clearfix">
                    <div class="copyright pull-right">
                        <p><a href="#">Castro</a> &copy; 2020 All Right Reserved</p>
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
    <script src="{{ url('public') }}/assets/js/jquery-ui.js"></script>

    <!-- main-js -->
    <script src="{{ url('public') }}/assets/js/script.js"></script>
</body><!-- End of .page_wrapper -->

</html>
