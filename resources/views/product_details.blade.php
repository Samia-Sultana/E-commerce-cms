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



    <!--=================product details part start =============-->
    <section class="main-content p-tb-60">
        <div class="container container-xxl">
            <h3 class="pb-3">Product Details</h3>
            <div class="row d-flex justify-content-between">
                <div class="col-lg-5 col-md-5 single-product-page-content">
                    <div class="product__carousel">
                        <div class="gallery-parent">
                            <!-- SwiperJs and EasyZoom plugins start -->
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    <?php $iteration = 1 ?>
                                    @foreach($images as $image)
                                    @if($iteration == 1)
                                    <div class="swiper-slide easyzoom easyzoom--overlay">
                                        <a href="{{asset('images/' . $image->image)}}">
                                            <img src="{{asset('images/' . $image->image)}}" alt="img not found" />
                                        </a>
                                    </div>
                                    @else
                                        @break
                                    @endif
                                    <?php $iteration++ ?>
                                    @endforeach
                                    
                                    
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next swiper-button-white"><i class="fas fa-angle-right"></i>
                                </div>
                                <div class="swiper-button-prev swiper-button-white"><i class="fas fa-angle-left"></i>
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs">
                                <div class="swiper-wrapper">
                                    @foreach($images as $image)
                                    <div class="swiper-slide">
                                        <img src="{{asset('images/' . $image->image)}}" alt="" />
                                    </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                            <!-- SwiperJs and EasyZoom plugins end -->
                        </div>
                    </div>




                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product-details">
                        <h2 style="font-size: 22px;">{{$productDetail->productName}}</h2>
                        <div class="product-code">
                            <span class="code-title">Product Code: </span>
                            <span class="code-no">{{$productDetail->id}}</span>
                        </div>
                        <div class="price-div">
                            <span class="price">BDT {{$productDetail->productPrice}}</span>
                            <span class="discount-price line-through">BDT 1500</span>
                        </div>
                    </div>

                    <div class="product-size-part d-flex justify-content-between mt-5">
                        <div class="product-size">
                            <h4 style="margin-bottom:-15px">SIZE</h4>
                            <fieldset>
                                <ul class="">
                                    <li>
                                        <input type="radio" name="dress2" id="dress4XS" value="XS">
                                        <label class="b-1" for="dress4XS">XS</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="dress2" id="dress4S" value="S">
                                        <label class="b-1" for="dress4S">S</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="dress2" id="dress4M" value="M">
                                        <label class="b-1" for="dress4M">M</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="dress2" id="dress4L" value="L">
                                        <label class="b-1" for="dress4L">L</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="dress2" id="dress4XL" value="XL">
                                        <label class="b-1" for="dress4XL">XL</label>
                                    </li>
                                </ul>
                            </fieldset>
                        </div>

                        <div class="size-guide">
                            <button type="button" class="size-modal" data-toggle="modal" data-target="#size_chart">
                                SIZE GUIDE
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="size_chart" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="assets/img/size_guide/size-chart-1.jpg" class="img-fluid" alt="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="add-to-cart-lg">
                        
                        <a href="{{'/add-to-cart/'.$productDetail->id}}"><input type="submit" value="ADD TO CART"></a>
                        
                    </div>

                    <!--==============Collapse info========-->

                    <div id="accordion" class="accordion p-details-accordion">
                        <div class="card mb-0">
                            <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                                <a class="card-title">
                                    DESCRIPTION
                                </a>
                            </div>
                            <div id="collapseOne" class="card-body collapse" data-parent="#accordion">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                                    ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                                    truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                    ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                    craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                    heard of them accusamus labore sustainable VHS.
                                </p>
                            </div>
                            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseTwo">
                                <a class="card-title">
                                    DETAILS & FIT
                                </a>
                            </div>
                            <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                                    ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                                    truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                    ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                    craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                    heard of them accusamus labore sustainable VHS.
                                </p>
                            </div>
                            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseThree">
                                <a class="card-title">
                                    SIZE
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                    moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    samus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--==============Collapse info========-->

                </div>
            </div>
        </div>
    </section>
    <!--========= product details end =============-->



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
    <!--===========zoom ============-->
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/easyzoom.js"></script>

    <script src="assets/js/main.js"></script>
    
    <script type="text/Javascript">
        $(".button-qty").on("click", function() {
    
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
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



    <script>
        $(document).ready(function () {
            // product Gallery and Zoom
            // activation carousel plugin
            var galleryThumbs = new Swiper('.gallery-thumbs', {
                spaceBetween: 5,
                freeMode: true,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                on: {
                    init: function () {
                        console.log('swiper initialized');
                        // activation zoom plugin
                        var $easyzoom = $('.easyzoom').easyZoom();
                    },
                },
                breakpoints: {
                    0: {
                        slidesPerView: 3,
                    },
                    992: {
                        slidesPerView: 4,
                    },
                }
            });
            var galleryTop = new Swiper('.gallery-top', {
                spaceBetween: 10,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                thumbs: {
                    swiper: galleryThumbs
                },
            });
            // change carousel item height
            // gallery-top
            let productCarouselTopWidth = $('.gallery-top').outerWidth();
            $('.gallery-top').css('height', productCarouselTopWidth);

            // gallery-thumbs
            let productCarouselThumbsItemWith = $('.gallery-thumbs .swiper-slide').outerWidth();
            $('.gallery-thumbs').css('height', productCarouselThumbsItemWith);

        })
    </script>
</body>

</html>