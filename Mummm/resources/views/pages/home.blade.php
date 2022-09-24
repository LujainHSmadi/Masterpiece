@extends('layouts.master')
@section('content')
    {{-- =========================================================== --}}
    {{-- ====================== Sweet Alert ======================== --}}
    {{-- =========================================================== --}}
    <div>
        @if (session()->has('success'))
            <script>
                swal("Great Job !!!", "{!! Session::get('success') !!}", "success", {
                    button: "OK",
                });
            </script>
        @endif
        @if (session()->has('danger'))
            <script>
                swal("Oops !!!", "{!! Session::get('danger') !!}", "error", {
                    button: "Close",
                });
            </script>
        @endif
    </div>
    <!-- banner section start start-->
    <div class="index1-slider-wrapper float_left ptb-100">
        <div class="container">
            <div class="slider-caption wow fadeInUp" data-wow-delay="0.1s">
                <h4>A wide selection of the best chefs with the most delicious dishes</h4>
                <a class="custom-btn" href="product.html"> Shop Now </a>
            </div>
            <div class="slider-item">
                <ul>
                    <li class="wow fadeInUp" data-wow-delay="0.1s">
                        <div class="item-icon">
                            <img alt="img" src="images/dish1.png">
                        </div>
                        <div class="item-text">
                            <h4>Free Delivery on Orders Over 10 JOD</h4>
                            <p>Fast Delivery.</p>
                        </div>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="item-icon">
                            <img alt="img" src="images/dish2.png">
                        </div>
                        <div class="item-text">
                            <h4>On-demand Quantities from Master Chefs</h4>
                            <p>Fresh Dishes.</p>
                        </div>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay="0.3s">
                        <div class="item-icon">
                            <img alt="img" src="images/dish3.png">
                        </div>
                        <div class="item-text">
                            <h4>Choose your own Delivery Date</h4>
                            <p>For All Occasions.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- banner section start end-->
    <div class="about-sec-wrapper float_left ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about-img float_left">
                        <img src="images/dreamstime.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about-text float_left">
                        <h4 id='about'>About <i id="mum">Mumm</i></h4>
                        <p>we are committed to total transparency about our Chefs.</p>
                    </div>
                    <div class="div_line-yal2">
                        <img class="img-fluid" src="images/line-yal.png" alt="img">
                    </div>
                    <div class="div_p">
                        <p>Nunc elementum purus vel ex iaculis eleifend. Curabitur bibendum odio dui, at placerat
                            antperer vitae. In hac habitasse platea dictumst. Phasellus nec sodales enim. Mauris
                            malesuada
                            nulla
                            hole enim, nec eleifend lacus vulputate ut. Sed eu diam tellus. Sed feugiat, risus ut porta
                            iaculis
                            mauris metus volutpat metus, vitae egestas nibh neque vulputate libero.
                        </p>
                        <br>
                        <p>Nunc elementum purus vel ex iaculis eleifend. Curabitur bibendum odio dui, at placerat
                            antperer vitae. In hac habitasse platea dictumst. Phasellus nec sodales enim. Mauris
                            malesuada
                            nulla
                            hole enim, nec eleifend lacus vulputate ut. Sed eu diam tellus. Sed feugiat, risus ut porta
                            iaculis
                            mauris metus volutpat metus, vitae egestas nibh neque vulputate libero.
                        </p>
                        <a class="custom-btn" href="about-us.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end about --}}

    {{-- start teams --}}


    <div class="team-client-main-wrapper float_left ptb-100" id="Kitchens">
        <div class="container">
            <div class="heading-title">
                <h4> Kitchens </h4>
                <p>know about our delivery processes</p>
                <img class="img-fluid" src="images/line-yal.png" alt="img">
            </div>
            <div class="row">
                @foreach ($categories as $item)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="team-box-wrapper">
                            <div class="team-img">
                                <a href={{ route('category.show', $item->id) }}><img class="img-fluid"
                                        src={{ url('public/Image/' . $item->image) }} alt="img"
                                        style="width:500px; height:300px;"></a>
                            </div>
                            <div class="team-text">
                                <h4> <a href={{ route('category.show', $item->id) }} target="_blank">{{ $item->name }}</a>
                                </h4>
                                <p>{{ $item->description }}</p>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
        <div class="team-text">


        </div>

    </div>
    </div>
    {{-- end teame section --}}

    {{-- end teams --}}

    {{-- start delivery --}}
    <div class="home-delivery-sec-wrapper float_left">
        <div class="container">
            <div class="heading-title">
                <h4>Home Delivery</h4>
                <p>know about our delivery processes</p>
                <img class="img-fluid" src="images/line-yal.png" alt="img">
            </div>
            <div class="delivery-main-wrapper">
                <div class="delivery-box">
                    <img src="images/icon01.png" alt="img">
                    <h4> Choose </h4>
                    <p>Nunc elementum purus ex iaculis elfend. Curabitur bibendum odio</p>
                </div>
                <div class="delivery-box">
                    <img src="images/icon02.png" alt="img">
                    <h4> Recieve </h4>
                    <p>Aunc elementum purus ex iaculis elfend. Curabitur bibendum odio</p>
                </div>

                <div class="delivery-box arro-remove">
                    <img src="images/icon04.png" alt="img">
                    <h4> Eat </h4>
                    <p>Aunc elementum purus ex iaculis elfend. Curabitur bibendum odio</p>
                </div>
            </div>
        </div>
    </div>


    <div class="product-filter-main-wrapper float_left ptb-100">
        <div class="container">
            <div class="heading-title">
                <h4>Our Product's</h4>
                <p>know about our delivery processes</p>
                <img class="img-fluid" src="images/line-yal.png" alt="img">
            </div>
            <div class="row">

                <div class="col-lg-9 col-md-9 col-12" style="width: 100%">
                    <div class="custom-tbs-content">

                        <div id="Poultry" class="tabcontent">

                            <div class="product-new-filter-block">
                                @foreach ($popular_products as $item)
                                    <div class="custom-tabs-prdt">
                                        <div class="product-thumbnail">
                                            <a href="javascript:;">
                                                <img src="{{ url('public/Productimages/' . $item->image) }}" alt="img" width="150px" height="300px">
                                            </a>
                                        </div>
                                        <div class="product-body">
                                            <h5 class="product-title">
                                                <a href="product-single.html" title="Beef">{{ $item->name }}</a>
                                            </h5>
                                           
                                            <span class="product-price">{{ $item->price }} JOD </span>
                                            <p class="product-text">{{ $item->description }}</p>
                                            <form action="{{ route('cart.store') }}" method="post">
                                                @csrf

                                                <input type="hidden" name="id" value="{{ $item->id }}" />
                                                <input type="hidden" name="quantity" value="1" />
                                                <input type="hidden" name="product_price" value="{{ $item->price }}" />

                                                <button type="submit" class="custom-btn">Add Cart
                                                    {{-- <a class="custom-btn" href="product-single.html">Add Cart</a> --}}
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="our-butchery-wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="about-text float_left">
                        <h4>Our Process</h4>
                        <p>we are committed to total transparency about our products.</p>
                    </div>
                    <div class="div_line-yal2">
                        <img class="img-fluid" src="images/line-yal.png" alt="img">
                    </div>
                    <div class="div_p">
                        <p class="p1">Nunc elementum purus vel ex iaculis eleifend. Curabitur bibendum odio dui, at
                            placerat
                            antperer vitae. In hac habitasse platea dictumst. Phasellus nec sodales enim. Mauris malesuada
                            nulla
                            hole enim, nec eleifend lacus vulputate ut. Sed eu diam tellus. Sed feugiat, risus ut porta
                            iaculis
                            mauris metus volutpat metus, vitae egestas nibh neque vulputate libero.
                        </p>
                        <br>
                        <p class="p1">Nunc elementum purus vel ex iaculis eleifend. Curabitur bibendum odio dui, at
                            placerat
                            antperer vitae. In hac habitasse platea dictumst. Phasellus nec sodales enim. Mauris malesuada
                            nulla
                            hole enim, nec eleifend lacus vulputate ut. Sed eu diam tellus. Sed feugiat, risus ut porta
                            iaculis
                            mauris metus volutpat metus, vitae egestas nibh neque vulputate libero.
                        </p>
                        <a class="custom-btn" href="about-us.html">Read More</a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="about-img-block">
                        <figure class="img1">
                            <img class="img-fluid" src="images/about1.jpg" alt="img">
                        </figure>
                        <figure class="img2">
                            <img class="img-fluid" src="images/about2.jpg" alt="img">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- team start --}}

    {{-- end teame section --}}


    <div class="call-now-wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-6"></div>
                <div class="col-lg-6 col-md-12 align-self-end">
                    <div class="call-sec-wrapper float_left">
                        <h4>Call Now</h4>
                        <img class="img-fluid" src="images/line-yal-red.png" alt="img">
                        <h2 class="call">+962 773 836 624</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentumlaoreet velit ut
                            rhoncus.
                            Class aptent taciti sociosqu ad litora torquent per conubia nostra</p>
                        <a class="custom-btn" href="/#contact">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <div class="countdown-wrapper float_left">
        <div class="container">
            <div class="counter-main-wrapper">
                <div class="count-box">
                    <div class="count">100</div>
                    <span class="customer">Customer’s</span>
                </div>
                <div class="count-box">
                    <div class="count">60</div>
                    <span class="customer customer1">Kitchens</span>
                </div>
                <div class="count-box">
                    <div class="count">70</div>
                    <span class="customer customer2">Organic products</span>
                </div>
                <div class="count-box">
                    <div class="count">50</div>
                    <span class="customer customer3">Outlet's</span>
                </div>
            </div>
            <div class="counter-text">
                <img class="img-fluid" src="images/line-cd.png" alt="img">
                <p>Donec blandit, tellus sed molestie posuere, erat lorem tempor enim, vestibulum tincidunt ex diam in elit.
                    Suspendisse sed ipsum nibh. Proin euismod luctus mauris, quis scelerisque arcu ultricies condimentum.
                    Donec pellentesque dictum tellus, ut tincidunt nibh ultricies vitae. Etiam luctus justo eu tellus
                    maximus, id venenatis sem euismod.</p>
            </div>
        </div>
    </div>


    <div class="contact_img_background">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="logo-white">
                        <img src="images/white-logo.png" alt="logo">
                    </div>





                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12" id='contact'>
                    <div class="request-form-wrapper">
                        <h4>Send Your Request</h4>
                        <p>We Are Committed To Total Transparency About Our Products.</p>
                        <div class="div_line-yal">
                            <img class="img-fluid" src="images/line-yal.png" alt="img">
                        </div>
                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="mb-3 icon-filed">
                                <input type="text" class="form-control require" name="name" required=""
                                    placeholder="Enter Name" value={!! old('name') ? old('name') : null !!}>
                                <span><i class="fa fa-user"></i></span>
                                <strong class="text-danger">
                                    *
                                    @error('name')
                                        -
                                        {{ $message }}
                                    @enderror
                                </strong>
                            </div>
                            <div class="mb-3 icon-filed">
                                <input type="email" class="form-control require" name="email" required=""
                                    data-valid="email" data-error="Email should be valid." placeholder="Enter Email"
                                    value={!! old('email') ? old('email') : null !!}>
                                <span><i class="fa fa-envelope"></i></span>
                                <strong class="text-danger">
                                    *
                                    @error('email')
                                        -
                                        {{ $message }}
                                    @enderror
                                </strong>
                            </div>
                            <div class="mb-3 icon-filed">
                                <input value="{!! old('phone') ? old('phone') : null !!}" type="text" class="form-control require" name="phone"
                                    placeholder="Enter Mob. Number">
                                <span><i class="fa fa-phone"></i></span>
                                <strong class="text-danger">
                                    *
                                    @error('phone')
                                        -
                                        {{ $message }}
                                    @enderror
                                </strong>
                            </div>
                            <div class="mb-3 icon-filed">
                                <textarea rows="3" cols="3" class="form-control require" name="message" placeholder="Enter Message"></textarea>
                                <span><i class="fas fa-edit"></i></span>
                                <strong class="text-danger">
                                    *
                                    @error('message')
                                        -
                                        {{ $message }}
                                    @enderror
                                </strong>
                            </div>
                            <button class="submitForm custom-btn">Send Now</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="brand-company-wrapper float_left ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                    <div class="brand-img">
                        <img src="images/brand3.jpg" alt="img">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                    <div class="brand-img">
                        <img src="images/brand1.jpg" alt="img">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                    <div class="brand-img">
                        <img src="images/brand2.jpg" alt="img">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                    <div class="brand-img">
                        <img src="images/brand4.jpg" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
