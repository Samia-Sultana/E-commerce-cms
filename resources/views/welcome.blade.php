<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">


</head>


<body class="pattern-bg">
    <!----===============header start===============-->
    <header class="header" id="header-area">
        <div class="container">
            <section class="wrapper">
            <!----------------dynamic logo---------------->
                <div class="header-item-left">
                    <a href="index.html" class="brand">
                        <img src="{{asset('images/'. $logo->image)}}" alt="logo not found">
                    </a>
                </div>
            <!------------daynamic navigation bar-------------------->
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
                        <li class="menu-item-has-children">
                                <a href="#">Products <i class="fas fa-chevron-down"></i> </a>
                                <div class="menu-subs menu-mega menu-column-4">
                                @foreach($catagories as $catagory)
                                    <div class="list-item text-center">
                                        <a href="{{'/' . $catagory->catagoryName}}">
                                            <img src="assets/img/product/panjabi/p1.jpg" loading="lazy"
                                                alt="Product Images">
                                            <h4 class="title">{{$catagory->catagoryName}}</h4>
                                        </a> 
                                    </div>
                                @endforeach
                                </div>
                            </li>

                            @foreach($navigation as $navItem)
               
                            <li class="menu-item"><a href="{{$navItem->url}}">{{$navItem->title}}</a></li>
               
                            @endforeach

                           
                        </ul>
                    </nav>
                </div>

            <!-------------search, mini cart,sidenav---------------->
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
                                        <a href="{{'/view-cart'}}" class="btn-add-to-cart mb-2">View Cart</a>
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
        <span class="modal-close"><img src="assets/img/cancel.png" alt="Close" class="img-fluid" /></span>
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

    <!---==================slider start====================-->
    <section class="slider-part">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme slider-carousel">

                        @foreach($slider as $item)
                        <div class="item">
                            <a href="#">
                                <img src="{{asset('images/'. $item->image)}}" alt="slider img not found">
                            </a>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---==================slider end====================-->


    <!--=========Product banner start===================-->
    <section class="p-tb-60 section-bg">
        <div class="container container-xxl">
            <div class="row">
                <?php $iteration = 0 ?>
                @foreach($latest as $item)
                    <?php $iteration = $iteration+1 ?>
                    @if($iteration == 2)
                    <div class="col-md-4">
                    <div class="banner banner-border">
                        <a href="exclusive_product.html">
                            <img src="{{asset('images/' . $item->image1)}}" class="img-responsive" alt="">
                        </a>
                        <div class="banner-content">
                            <div class="banner-title">
                                <h3>Exclusive collection</h3>
                            </div>
                            <a href="exclusive_product.html" class="link1">
                                Discover Now
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="banner-content-out">
                            <h3>Exclusive collection</h3>
                            <p>Grab Your Product</p>
                    </div>
                    </div>
                    
                    @else
                        <div class="col-md-4">
                    <div class="banner banner-border">
                        <a href="exclusive_product.html">
                            <img src="{{asset('images/' . $item->image1)}}" class="img-responsive" alt="">
                        </a>
                        <div class="banner-content">
                            <div class="banner-title">
                                <h3>Exclusive collection</h3>
                            </div>
                            <a href="exclusive_product.html" class="link1">
                                Discover Now
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                    </div>
                    
                    @endif

                @endforeach
            </div>
        </div>
    </section>

    <!--=========Product banner end=====================-->

    <!--===========product category slider======-->
    <section class="p-tb-60  pattern-3" style="position: relative;">
        <div class="container-fluid">
            <div class="heading">
                <h2>
                    Product category
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="owl-carousel owl-theme product-carousel">
                        <div class="item text-center">
                            <a href="#">
                                <img src="assets/img/product/jubba/1x1/j1.png" alt="slider img not found">
                                <span>Panjabi</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="assets/img/product/tupi/1x1/t1.png" alt="slider img not found">
                                <span>Tupi</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="assets/img/product/jubba/1x1/j1.png" alt="slider img not found">
                                <span>Jubba</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="assets/img/product/fragrance/1x1/a1.png" alt="slider img not found">
                                <span>Fragrance</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="assets/img/product/tupi/1x1/t1.png" alt="slider img not found">
                                <span>Tupi</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===========product category slider======-->

    <!--===========new arrivals start============-->
    <!--== Page Content Wrapper Start ==-->
    <div id="page-content-wrapper" class="pt-60">
        <div class="container container-xxl">
            <div class="heading">
                <h2>
                    Our Products
                </h2>
            </div>

            <!-- Shop Page Content Start -->

            <div class="shop-page-content-wrap">
                <div class="shop-page-products-wrap">
                    <div class="products-wrapper">
                        <div class="row">
                        @foreach($top as $item)
                            <div class="col-lg-3 col-sm-6 col-6 p-x-5">
                                <!-- Single Product Item -->
                                <div class="single-product-item text-center mb-3">
                                    <figure class="product-thumb">
                                        <a href="{{'/product/details/' . $item->id}}"><img src="{{asset('images/'. $item->image1)}}"
                                                alt="Products" class="img-fluid"></a>
                                    </figure>

                                    <div class="product-details">
                                        <h2 id="product_name"><a href="{{'/product/details/' . $item->id}}">{{$item->productName}}</a></h2>
                                        <div class="product-code">
                                            <span class="code-title">Product Code: </span>
                                            <span class="code-no">S-3254</span>
                                        </div>
                                        <div class="price-div">
                                            <span class="price">{{"BDT ". $item->price}}</span>
                                            <span class="discount-price line-through">BDT 1500</span>
                                        </div>

                                        <input type="hidden" id="product_id" value="{{$item->id}}"/>
                                        <button type="button" class="btn-add-to-cart" onclick="addToCart()">
                                            
                                                +Add to Cart
                                           
                                        </button>
                                       
                                    </div>

                                    <div class="product-meta">
                                        <!--<button type="button" data-toggle="modal" data-target="#quickView">
                                                    <span data-toggle="tooltip" data-placement="left"
                                                        title="Quick View"><i class="fas fa-eye"></i>
                                                </button>
                                                
                                                <a href="#" data-toggle="tooltip" data-placement="left"
                                                    title="Compare"><i class="fas fa-tag"></i></a>-->

                                        <a href="#" data-toggle="tooltip" data-placement="left"
                                            title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                    </div>
                                    <span class="product-bedge">New</span>
                                </div>
                                <!-- Single Product Item -->
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Shop Page Content End -->

            <div class="row">
                <div class="col-md-12">
                    <div class="view-more">
                        <a href="product_list.html">
                            <i class="fas fa-eye"></i>
                            view more

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Page Content Wrapper End ==-->
    <!--===========new arrivals end============-->

    <!--============product banner image =======-->
    <section class="p-tb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="product-banner-2">
                        <a href="product_list.htmk">
                            <img src="assets/img/banner/012.jpg" class="img-responsive" alt="banner image not found">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============product banner image =======-->

    <!--=================news letter==========-->

    <section class="p-tb-60 section-bg">
        <div class="container container-xxl">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="newsletter-section">
                        <h1 class="title">Join our Newsletter</h1>
                        <div class="input-wrapper">
                            <label for="newsletter" class="label-text">Enter your Email to Join</label>
                            <input type="text" id="newsletter">
                            <button class="btn arrow-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================news letter==========-->




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
                            @foreach($socialMedia as $item)
                            <li class="list-inline-item">
                                <a href="{{$item->link}}" class="sbtn btn-large mx-1" title="Facebook">
                                    {{$item->name}}
                                </a>
                            </li> 
                            @endforeach
                            <!---------------<li class="list-inline-item">
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
                            ---------------------->
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

    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
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
        function addToCart(){
            var product_name = $('#product_name').text();
            var id = $('#product_id').val();
            var quantity = 1;
            

            $.ajax({
                type: "POST",
                dataType: 'json',
                data:{
                    product_name: product_name,
                    quantity: quantity,
                    

                },
                url: "/cart/data/store/" + id,
                success:function(data){
                    console.log(data);
                }
            })
        }
        
    </script>

    <script>
        /******newsletter */
        let input = document.querySelector('#newsletter');
        let labelText = document.querySelector('.label-text');
        let root = document.querySelector('body');

        input.addEventListener('click', () => {
            labelText.classList.add('label-text-up');
        });

        document.addEventListener('mousedown', () => {
            if (!input.value) {
                labelText.classList.remove('label-text-up');
            }
        });
    </script>

</body>

</html>