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
    <link href="{{ url('public') }}/assets/css/jquery.bootstrap-touchspin.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/nice-select.css" rel="stylesheet">
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
                                        <li><a href="shop-2.html">shop</a>
                                        </li>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <ul class="menu-right-content clearfix">
                            <li><a href="my-account.html"><i class="flaticon-user"></i></a></li>
                            <li class="shop-cart">
                                <a href="cart.html"><i class="flaticon-shopping-cart-1"></i><span>3</span></a>
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
                <div class="nav-logo"><a href="index.html"><img src="{{ url('public') }}/assets/images/logo-2.png"
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
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
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
                    <h1>Cart Page</h1>
                    <ul class="bread-crumb clearfix">
                        <li><i class="flaticon-home-1"></i><a href="index.html">Home</a></li>
                        <li>Cart Page</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- cart section -->
        <section class="cart-section cart-page">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 table-column">
                        <div class="table-outer">
                            <table class="cart-table">
                                <thead class="cart-header">
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th class="prod-column">Product Name</th>
                                        <th>&nbsp;</th>
                                        <th>&nbsp;</th>
                                        <th class="price">Price</th>
                                        <th class="quantity">Quantity</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="4" class="prod-column">
                                            <div class="column-box">
                                                <div class="remove-btn">
                                                    <i class="flaticon-close"></i>
                                                </div>
                                                <div class="prod-thumb">
                                                    <a href="#"><img
                                                            src="{{ url('public') }}/assets/images/resource/shop/cart-1.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="prod-title">
                                                    Black Boys Shirt
                                                </div>
                                            </div>
                                        </td>
                                        <td class="price">$50.00</td>
                                        <td class="qty">
                                            <div class="item-quantity">
                                                <input class="quantity-spinner" type="text" value="1"
                                                    name="quantity">
                                            </div>
                                        </td>
                                        <td class="sub-total">$50.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="prod-column">
                                            <div class="column-box">
                                                <div class="remove-btn">
                                                    <i class="flaticon-close"></i>
                                                </div>
                                                <div class="prod-thumb">
                                                    <a href="#"><img
                                                            src="{{ url('public') }}/assets/images/resource/shop/cart-2.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="prod-title">
                                                    Girls Print Tops
                                                </div>
                                            </div>
                                        </td>
                                        <td class="price">$50.00</td>
                                        <td class="qty">
                                            <div class="item-quantity">
                                                <input class="quantity-spinner" type="text" value="1"
                                                    name="quantity">
                                            </div>
                                        </td>
                                        <td class="sub-total">$50.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="prod-column">
                                            <div class="column-box">
                                                <div class="remove-btn">
                                                    <i class="flaticon-close"></i>
                                                </div>
                                                <div class="prod-thumb">
                                                    <a href="#"><img
                                                            src="{{ url('public') }}/assets/images/resource/shop/cart-3.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="prod-title">
                                                    Baby Backpacks
                                                </div>
                                            </div>
                                        </td>
                                        <td class="price">$70.00</td>
                                        <td class="qty">
                                            <div class="item-quantity">
                                                <input class="quantity-spinner" type="text" value="1"
                                                    name="quantity">
                                            </div>
                                        </td>
                                        <td class="sub-total">$70.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="othre-content clearfix">
                    <div class="coupon-box pull-left clearfix">
                        <input type="text" placeholder="Enter coupon code...">
                        <button type="submit" class="theme-btn-two">Apply coupon<i
                                class="flaticon-right-1"></i></button>
                    </div>
                    <div class="update-btn pull-right">
                        <button type="submit" class="theme-btn-one">Update Cart<i
                                class="flaticon-right-1"></i></button>
                    </div>
                </div>
                <div class="cart-total">
                    <div class="row">
                        <div class="col-xl-5 col-lg-12 col-md-12 offset-xl-7 cart-column">
                            <div class="total-cart-box clearfix">
                                <h4>Cart Totals</h4>
                                <ul class="list clearfix">
                                    <li>Subtotal:<span>$150</span></li>
                                    <li>Order Total:<span>$150</span></li>
                                </ul>
                                <a href="cart.html" class="theme-btn-two">Proceed to Checkout<i
                                        class="flaticon-right-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart section end -->


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
    <script src="{{ url('public') }}/assets/js/jquery-ui.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.bootstrap-touchspin.js"></script>

    <!-- main-js -->
    <script src="{{ url('public') }}/assets/js/script.js"></script>
</body><!-- End of .page_wrapper -->

</html>
