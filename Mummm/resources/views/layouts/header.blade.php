<!DOCTYPE html>

<html lang="zxx" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <title>Meat Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <!--Template style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="/css/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="/css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="/css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/owl.theme.default.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/tabs.css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/css/responsive.css" />
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav-icon.png" />
    <script src='../../google_analytics_auto.js'></script>
</head>

<body>
    <div id="preloader">
        <div id="status">
            <img src="/images/loader.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <!-- top to return -->
    <a href="javascript:;" id="return-to-top" class="change-bg2"> <i class="fas fa-angle-double-up"></i></a>
    <!-- header start -->
    <div class="main-header-wrapper1 float_left">

        <div class="sb-main-header1">
            <div class="menu-items-wrapper menu-item-wrapper3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                <div class="top-header-wrapper float_left">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-sm-9 col-xs-6">
                                <ul class="contact-details">
                                    <li class="hidden-xs"><a href="#">Irbid-Jordan</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-phone"></i> <b>+962 777777777</b></a>
                                    </li>
                                    <li class="hidden-xs"><a href="#"><i
                                                class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;contact@mumm.com</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="float_left">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="index1-logo">
                                    <a href="/">
                                        <img src="/images/logo.jpg" alt="logo">
                                    </a>
                                </div>
                                <nav class="navbar navbar-expand-lg">
                                    <ul class="navbar-nav">
                                        <li class="nav-item  menu-click5 ps-rel">
                                            <a class="nav-link" href="/">Home <span>
                                        </li>

                                        <li class="nav-item menu-click3 ps-rel">
                                            <a class="nav-link" href="kitchens">Kitchens</a>
                                        </li>


                                        <li class="nav-item">
                                            <a class="nav-link" href="/#contact">Contact</a>
                                        </li>



                                        {{-- auth --}}
                                        @if (Route::has('login'))
                                            @auth

                                                @if (Auth::user()->utype === 'ADM')



                                                    <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
                                                    </li>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                        @csrf

                                                    </form>

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/admindash">Hello {{ Auth::user()->name }}</a>
                                                    </li>

                                                    {{-- <li class="nav-item"><a class="nav-link"
                                                            href="{{ route('register') }}">Sign-up</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="{{ route('login') }}">Login</a></li> --}}
                                                @else
                                                    
                                                    <li>
                                                    <li class="nav-item  menu-click5 ps-rel">
                                                        <a class="nav-link" href="javascript:;">{{ Auth::user()->name }} <span><i
                                                                    class="fas fa-chevron-down"></i></span></a>
                                                        <ul class="dropdown-items menu-open5">
                                                            <li class="nav-item"><a class="nav-link"
                                                                    href="{{ route('logout') }}"
                                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="/user/profile ">Profile</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="{{ route('MyOrder') }}">My Order</a>
                                                            </li>
                                                           
                                                        </ul>
                                                    </li>

                                                    </li>


                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                        @csrf

                                                    </form>
                                                   
                                                @endif
                                            @else
                                                <li>
                                                <li class="nav-item  menu-click5 ps-rel">
                                                    <a class="nav-link" href="javascript:;">Account <span><i
                                                                class="fas fa-chevron-down"></i></span></a>
                                                    <ul class="dropdown-items menu-open5">
                                                        <li><a class="nav-link"href="{{ route('register') }}">Sign-up</a>
                                                        </li>
                                                        <li><a class="nav-link" href="{{ route('login') }}">Login</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                </li>

                                            @endif
                                            @endif
                                            {{-- auth --}}
                                            @php
                                                use App\Models\Cart;
                                                if (Auth::user() && Cart::where('user_id', Auth::user()->id)->count() > 0) {
                                                    $cartItems = Cart::orderBy('carts.id', 'ASC')
                                                        ->where('user_id', auth()->user()->id)
                                                        ->join('users', 'carts.user_id', '=', 'users.id')
                                                        ->join('products', 'carts.product_id', '=', 'products.id')
                                                        ->get(['carts.id', 'carts.sub_total', 'carts.quantity', 'products.image', 'products.name', 'products.price']);
                                                    //  dd($cartItems);
                                                }
                                            @endphp
                                            <li class="nav-item menu-click1 ps-rel">
                                                <a class="nav-link" href="javascript:;">Cart &nbsp;<i
                                                        class="fa fa-shopping-cart" aria-hidden="true"></i></a>

                                                <ul class="dropdown-items menu-open1">
                                                    <li>
                                                        <span>{{ $cartItems[0]->quantity ?? 0 }} Item</span>
                                                        <a href="/cart"> View Cart</a>
                                                    </li>
                                                    @if (Auth::user() && Cart::where('user_id', Auth::user()->id)->count() > 0)
                                                        <li class="cart_list">
                                                            <div class="select_cart">
                                                                <a href="#">{{ $cartItems[0]->name }}</a>
                                                                <span>{{ $cartItems[0]->quantity }}x</span>
                                                            </div>
                                                            <div class="select_img">
                                                                <img alt="img" src={{ $cartItems[0]->image }}>
                                                                <div class="close_btn">
                                                                    <i class="fa fa-times"></i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="sub_total">
                                                            <p>Sub Total:<span>{{ $cartItems[0]->sub_total }} JD</span></p>
                                                        </li>
                                                        <li class="cart_btn">
                                                            <a href="/cart"><i class="fas fa-shopping-cart"></i>&nbsp;
                                                                View
                                                                Cart</a>
                                                            <a href="{{ route('order.index') }}"><i
                                                                    class="fas fa-share"></i>&nbsp;
                                                                Checkout</a>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- responsive menu bar start -->
                <div class="mobile-menu-wrapper d-xl-none d-lg-none d-md-block d-sm-block">
                    <div class="container">
                        <div class="row">
                            <div class=" col-md-4 col-sm-4 col-6">
                                <div class="mobile-logo">
                                    <a href="index-2.html">
                                        <img src="images/logo.jpg" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-6">
                                <div class="d-flex  justify-content-end">
                                    <div class="social-media-icons">
                                        <ul>
                                            <li class="login-btn">
                                                <a href="javascript:;">
                                                    Cart<span><i class="fa fa-shopping-cart"
                                                            aria-hidden="true"></i></span>
                                                </a>
                                                <div class="user-text">
                                                    <p>Item <span>View Cart</span> </p>
                                                    <div class="cart-list">
                                                        <h5>Bee Meat <span>1 x $258.00</span></h5>
                                                    </div>
                                                    <div class="cart-right">
                                                        <img alt="img" src="images/pm3.gif">
                                                        <div class="close_btn">
                                                            <i class="fa fa-times"></i>
                                                        </div>
                                                    </div>
                                                    <div class="total">
                                                        <p>Sub Total: <span>$ 289.00</span> </p>
                                                    </div>
                                                    <div class="btn-cart">
                                                        <a href="/cart"><i class="fas fa-shopping-cart"></i>&nbsp; View
                                                            Cart</a>
                                                        <a href="checkout.html"><i class="fas fa-share"></i>&nbsp;
                                                            Checkout</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="toggle-main-wrapper mt-2" id="sidebar-toggle">
                                            <span class="line"></span>
                                            <span class="line"></span>
                                            <span class="line"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- responsive menu End -->
        </div>
        </div>
        <!-- header end -->
