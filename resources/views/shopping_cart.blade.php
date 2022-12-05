<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maknoon Lifestyle</title>

    <!---===========favicon=====-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/logo/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/logo/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/logo/favicon/site.webmanifest">

    <!--======== Bootstrap 4.6===-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--======== font awesome===-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!---======= owl carousel======-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <!---======= Header css-->
    <link rel="stylesheet" href="assets/css/header-css/reset.min.css">
    <!---==========zoom css=========-->
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/easyzoom.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">


</head>


<body class="pattern-bg">
    <!----===============header start===============-->
    <header class="header" id="header-area">
        <div class="container">
            <section class="wrapper">
                <div class="header-item-left">
                    <a href="index.html" class="brand">
                        <img src="assets/img/logo/logo.png" alt="logo not found">
                    </a>
                </div>
                <!-- Navbar Section -->
                <div class="header-item-center">
                    <div class="overlay"></div>
                    <nav class="menu" id="menu">
                        <div class="menu-mobile-header">
                            <button type="button" class="menu-mobile-arrow"><i
                                    class="ion ion-ios-arrow-back"></i></button>
                            <div class="menu-mobile-title"></div>
                            <button type="button" class="menu-mobile-close"><i class="ion ion-ios-close"></i></button>
                        </div>
                        <ul class="menu-section mb-0">
                            <li class="menu-item blinking"><a href="new_arrival.html">New Arrivals</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Products <i class="fas fa-chevron-down"></i> </a>
                                <div class="menu-subs menu-mega menu-column-4">
                                    <div class="list-item text-center">
                                        <a href="#">
                                            <img src="assets/img/product/panjabi/p1.jpg" loading="lazy"
                                                alt="Product Images">
                                            <h4 class="title">Panjabi</h4>
                                        </a>
                                    </div>
                                    <div class="list-item text-center">
                                        <a href="#">
                                            <img src="assets/img/product/jubba/jubba.jpg" loading="lazy"
                                                alt="Product Images">
                                            <h4 class="title">Product Two</h4>
                                        </a>
                                    </div>
                                    <div class="list-item text-center">
                                        <a href="#">
                                            <img src="assets/img/product/tupi/tupi.jpg" loading="lazy"
                                                alt="Product Images">
                                            <h4 class="title">Tupi</h4>
                                        </a>
                                    </div>
                                    <div class="list-item text-center">
                                        <a href="#">
                                            <img src="assets/img/product/fragrance/attar.jpg" loading="lazy"
                                                alt="Product Images">
                                            <h4 class="title">Fragrance</h4>
                                        </a>
                                    </div>
                                    <div class="list-item text-center">
                                        <a href="#">
                                            <img src="assets/img/product/panjabi/p1.jpg" loading="lazy"
                                                alt="Product Images">
                                            <h4 class="title">Panjabi</h4>
                                        </a>
                                    </div>
                                    <div class="list-item text-center">
                                        <a href="#">
                                            <img src="assets/img/product/jubba/jubba.jpg" loading="lazy"
                                                alt="Product Images">
                                            <h4 class="title">Product Two</h4>
                                        </a>
                                    </div>
                                    <div class="list-item text-center">
                                        <a href="#">
                                            <img src="assets/img/product/tupi/tupi.jpg" loading="lazy"
                                                alt="Product Images">
                                            <h4 class="title">Tupi</h4>
                                        </a>
                                    </div>
                                    <div class="list-item text-center">
                                        <a href="#">
                                            <img src="assets/img/product/fragrance/attar.jpg" loading="lazy"
                                                alt="Product Images">
                                            <h4 class="title">Fragrance</h4>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item"><a href="blog.html">Blog</a></li>
                            <li class="menu-item"><a href="contact.html">Contact Us</a></li>
                            <li class="menu-item"><a href="sale.html">Sale</a></li>
                        </ul>
                    </nav>
                </div>


                <div class="header-right-meta text-right header-item-righ">
                    <ul>
                        <li><a href="#" class="modal-active"><i class="fa fa-search"></i></a></li>
                        <li class="settings"><a href="#"><i class="fas fa-user"></i></a>
                            <div class="site-settings d-block d-sm-flex">
                                <dl class="my-account">
                                    <dt>My Account</dt>
                                    <dd><a href="profile.html">Profile</a></dd>
                                    <dd><a href="login.html">Sign</a></dd>
                                </dl>
                            </div>
                        </li>
                        <li class="shop-cart">
                            <i class="fa fa-shopping-bag" style="font-size: 20px;" onclick="openNav()"></i> <span
                                class="count">3</span>
                            <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Close</a>

                                <hr>
                                <div class="mini-cart">
                                    <div class="mini-cart-body">
                                        <div class="single-cart-item d-flex">
                                            <figure class="product-thumb">
                                                <a href="#"><img class="img-fluid"
                                                        src="assets/img/product/panjabi/p1.jpg" alt="Products" /></a>
                                            </figure>

                                            <div class="product-details">
                                                <h2><a href="#">Sprite Yoga Companion</a></h2>
                                                <div class="cal d-flex justify-content-between align-items-center">
                                                    <div class="size d-flex">
                                                        <span class="font-weight-normal mr-1">Size: </span>
                                                        <span class="">XL</span>
                                                    </div>
                                                    <div class="price-part tk-part">
                                                        <span class="tk-sign">20,000</span>
                                                    </div>
                                                </div>
                                                <div class="pro-quantity">
                                                    <div class="product-count">
                                                        <form action="#" class="display-flex">
                                                            <div class="increment-wrapper">
                                                                <input type="text" value="1">
                                                                <button class="button-qty inc">
                                                                    <i class="fas fa-sort-up"></i></button>
                                                                <button class="button-qty dec">
                                                                    <i class="fas fa-sort-down"></i></span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="remove-icon"><i class="far fa-trash-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="single-cart-item d-flex">
                                            <figure class="product-thumb">
                                                <a href="#"><img class="img-fluid"
                                                        src="assets/img/product/panjabi/p1.jpg" alt="Products" /></a>
                                            </figure>
                                            <div class="product-details">
                                                <h2><a href="#">Sprite Yoga Companion</a></h2>
                                                <div class="cal d-flex justify-content-between align-items-center">
                                                    <div class="size d-flex">
                                                        <span class="font-weight-normal mr-1">Size: </span>
                                                        <span class="">XL</span>
                                                    </div>
                                                    <div class="price-part tk-part">
                                                        <span class="tk-sign">20,000</span>
                                                    </div>
                                                </div>
                                                <div class="pro-quantity">
                                                    <div class="product-count">
                                                        <form action="#" class="display-flex">
                                                            <div class="increment-wrapper">
                                                                <input type="text" value="1">
                                                                <button class="button-qty inc">
                                                                    <i class="fas fa-sort-up"></i></button>
                                                                <button class="button-qty dec">
                                                                    <i class="fas fa-sort-down"></i></span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="remove-icon"><i class="far fa-trash-alt"></i></a>
                                        </div>
                                        <div class="single-cart-item d-flex">
                                            <figure class="product-thumb">
                                                <a href="#"><img class="img-fluid"
                                                        src="assets/img/product/panjabi/p1.jpg" alt="Products" /></a>
                                            </figure>
                                            <div class="product-details">
                                                <h2><a href="#">Sprite Yoga Companion</a></h2>
                                                <div class="cal d-flex justify-content-between align-items-center">
                                                    <div class="size d-flex">
                                                        <span class="font-weight-normal mr-1">Size: </span>
                                                        <span class="">XL</span>
                                                    </div>
                                                    <div class="price-part tk-part">
                                                        <span class="tk-sign">20,000</span>
                                                    </div>
                                                </div>
                                                <div class="pro-quantity">
                                                    <div class="product-count">
                                                        <form action="#" class="display-flex">
                                                            <div class="increment-wrapper">
                                                                <input type="text" value="1">
                                                                <button class="button-qty inc">
                                                                    <i class="fas fa-sort-up"></i></button>
                                                                <button class="button-qty dec">
                                                                    <i class="fas fa-sort-down"></i></span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="remove-icon"><i class="far fa-trash-alt"></i></a>
                                        </div>


                                        <div class="cart-subtotal">
                                            <span>Cart Subtotal</span>
                                            <span class="subtotal-price tk-sign">30000</span>
                                        </div>
                                    </div>
                                    <div class="mini-cart-footer">
                                        <a href="shopping_cart.html" class="btn-add-to-cart mb-2">View Cart</a>
                                        <a href="checkout.html" class="btn-add-to-cart">Checkout</a>
                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
                <button type="button" class="menu-mobile-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

            </section>
        </div>
    </header>
    <!---====================== header end================-->

    <!--== Search Box Area Start ==-->
    <div class="body-popup-modal-area">
        <span class="modal-close"><img src="assets/img/cancel.png" alt="Close" class="img-responsive" /></span>
        <div class="modal-container d-flex">
            <div class="search-box-area">
                <div class="search-box-form">
                    <form action="#" method="post">
                        <input type="search" placeholder="type keyword and hit enter" />
                        <button class="btn" type="button"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--== Search Box Area End ==-->



    <!--=================cart part start =============-->
    <section class="main-content p-tb-60">
        <div class="container container-xxl">
            <h3 class="pb-3">Shopping Cart</h3>
            <!-- Cart Page Content Start -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Cart Table Area -->
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Thumbnail</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-size">Size</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sessionData->items as $product)
                                
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-responsive"
                                                src="{{asset('images/' . $product['item']['image1'])}}" alt="Product" /></a></td>
                                    <td class="pro-title"><a href="#">{{$product['item']['productName']}}</a></td>
                                    <td class="pro-size">XS</td>
                                    <td class="pro-price tk-part"><span class="tk-sign">{{$product['item']['price']}}</span></td>
                                    <td class="pro-quantity">
                                        <div class="product-count">
                                            <form action="#" class="display-flex">
                                                <div class="increment-wrapper">
                                                    <input type="text" class="qtyField" value="{{$product['qty']}}" readonly>
                                                    <button class="button-qty inc">
                                                        <i class="fas fa-sort-up"></i></button>
                                                    <button class="button-qty dec">
                                                        <i class="fas fa-sort-down"></i></span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="pro-subtotal tk-part"><span class="tk-sign">2,950</span></td>
                                    <td class="pro-remove"><a href="#"><i class="fas fa-trash"></i></a></td>
                                </tr>
                                @endforeach
                               

                            </tbody>
                        </table>
                    </div>


                </div>
            </div>

            <div class="row pt-5">
                <div class="col-lg-6 ml-auto">
                    <!-- Cart Calculation Area -->
                    <div class="cart-calculator-wrapper">
                        <h3>Cart Totals</h3>
                        <div class="cart-calculate-items">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Sub Total</td>
                                        <td class="tk-part">
                                            <span class="tk-sign">230</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td class="tk-part">
                                            <span class="tk-sign">230</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td class="tk-part">
                                            <span class="tk-sign font-weight-bold">230</span>
                                        </td>

                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Cart Page Content End -->

            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="continue-shop">
                        <a href="all.html">Continue Shopping</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkout-part">
                        <a href="checkout.html" class="btn-submit">Proceed To Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========= Cart part end =============-->



    <!--===============Footer start=============-->
    <footer class="d-flex-column" style="border-top: 1px solid #c5c5c5;">
        <div class="container container-xxl text-left p-tb-60 ">
            <div class="row   text-center">
                <hr class="clearfix w-100 d-md-none mb-0">
                <div class="col-md-3 m-tb-10 shfooter">
                    <div class="footer-heading">
                        <h3 class="my-2 font-footer font-weight-bold d-none d-md-block">CUSTOMER CARE</h3>
                    </div>
                    <div class="d-md-none title" data-target="#Product" data-toggle="collapse">
                        <div class="mt-3 font-weight-bold center-text">CUSTOMER CARE
                            <div class="float-right navbar-toggler">
                                <i class="fas fa-angle-down"></i>
                                <i class="fas fa-angle-up"></i>
                            </div>
                        </div>
                    </div>
                    <div class="footer-link d-md-block list-unstyled collapse" id="Product">
                        <ul class="center-text">
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                            <li>
                                <a href="#">FAQS</a>
                            </li>
                            <li>
                                <a href="#">Size guide</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <hr class="clearfix w-100 d-md-none mb-0">

                <div class="col-md-3 m-tb-10 shfooter">
                    <div class="footer-heading">
                        <h3 class="my-2 font-footer font-weight-bold d-none d-md-block">SHIPPING INFO</h3>
                    </div>
                    <div class="d-md-none title" data-target="#Company" data-toggle="collapse">
                        <div class="mt-3 font-weight-bold center-text">SHIPPING INFO
                            <div class="float-right navbar-toggler">
                                <i class="fas fa-angle-down"></i>
                                <i class="fas fa-angle-up"></i>
                            </div>
                        </div>
                    </div>
                    <div class="footer-link list-unstyled collapse" id="Company">
                        <ul class="center-text">
                            <li>
                                <a href="#">Shipping information</a>
                            </li>
                            <li>
                                <a href="#">return policy</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <hr class="clearfix w-100 d-md-none mb-0">

                <div class="col-md-3 m-tb-10 shfooter">
                    <div class="footer-heading">
                        <h3 class="my-2 font-footer font-weight-bold d-none d-md-block">ABOUT</h3>
                    </div>
                    <div class="d-md-none title" data-target="#Resources" data-toggle="collapse">
                        <div class="mt-3 font-weight-bold center-text">ABOUT
                            <div class="float-right navbar-toggler">
                                <i class="fas fa-angle-down"></i>
                                <i class="fas fa-angle-up"></i>
                            </div>
                        </div>
                    </div>
                    <div class="footer-link list-unstyled collapse" id="Resources">
                        <ul class="center-text">
                            <li>
                                <a href="#">our story</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <hr class="clearfix w-100 d-md-none mb-0">

                <div class="col-md-3 m-tb-10 shfooter">
                    <div class="footer-heading">
                        <h3 class="center-text font-footer my-2">FOLLOW US</h3>

                    </div>

                    <div class="pt-2 center-text">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="#!" class="sbtn btn-large mx-1" title="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!" class="sbtn btn-large mx-1" title="Linkedin">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="#!" class="sbtn btn-large mx-1" title="Youtube">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p class="mb-0">© All Right Reserved 2021. Developed By <a href="https://aveenirit.com/">Aveenir IT</a></p>
        </div>
    </footer>

    <!--===============Footer end=============-->


    <!---=====jquery====-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!--=====popper js=====-->
    <script src="assets/js/popper.min.js"></script>
    <!--=====bootstrap=====-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=====Owl carousel=====-->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!--=====header script=====-->
    <script src="assets/js/script.js"></script>
    <!--=====header script=====-->
    <script src="assets/js/main.js"></script>
    <script type="text/Javascript">
        $(".button-qty").on("click", function() {
    
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        var productPrice = $button.parent('.pro-price').val();
        $button.blur();
        if ($button.hasClass("inc")) {
        var newVal = parseFloat(oldValue) + 1;
      } else {
     // Don't allow decrementing below zero
      if (oldValue > 1) {
        var newVal = parseFloat(oldValue) - 1;
      } else {
        newVal = 1;
      }
    }
    
    $button.parent().find("input").val(newVal);
    
   
    
    });
      </script>
      
    <script>
        /* Set the width of the side navigation to 250px */
        function openNav() {
            if ($(window).width() > 600) {
                document.getElementById("mySidenav").style.width = "23vw";

            } else {
                document.getElementById("mySidenav").style.width = "90vw";
            }
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";

        }
        
    </script>



</body>

</html>