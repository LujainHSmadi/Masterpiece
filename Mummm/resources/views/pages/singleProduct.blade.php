@extends('layouts.master')
@section('content')
    <div class="inner-slider-wrapper float_left">
        <div class="container">
            <div class="inner-caption">
                <h4>Product Details</h4>
                <img src="/images/title.png" alt="img">
            </div>
            <ol class="breadcrumb sicon">
                <li><a href="#">Home</a></li>
                <li><a href="#">Category</a></li>
                <li class="active">Product Single</li>
            </ol>
            <img class="meat" src="/images/title-bottom.png" alt="img">
        </div>
    </div>
    <!-- banner section start end-->
    <style>
        /* .comment{
        border: 1px solid rgba(16, 46, 46, 1);
        background-color: rgba(16, 46, 46, 0.973);
        float: left;
        border-radius: 5px;
        padding-left: 40px;
        padding-right: 30px;
        padding-top: 10px;
         */
        }
    </style>

    <div class="product-client-say-wrapper float_left ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="testi-slider float_left">
                        <div id="my-carousel" class="owl-carousel">
                            <div class="item">
                                <img src={{ url('public/Productimages/' . $product->image) }} alt="img">
                            </div>
                            <div class="item">
                                <img src={{ url('public/Productimages/' . $product->image) }} alt="img">
                            </div>
                            <div class="item">
                                <img src={{ url('public/Productimages/' . $product->image) }} alt="img">
                            </div>
                        </div>
                        <div class="navigation-img-wrapper">
                            <div class="navigator" data-item="0"><img
                                    src={{ url('public/Productimages/' . $product->image) }} alt="img"></div>
                            <div class="navigator" data-item="1"><img
                                    src={{ url('public/Productimages/' . $product->image) }}></div>
                            <div class="navigator" data-item="2"><img
                                    src={{ url('public/Productimages/' . $product->image) }}></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="product-des">

                        <h4>{{ $product->name }}</h4>
                        <span>Healthy food</span>
                        <h5>{{ $product->price }} JOD</h5>
                        <ul class="star-review">
                            <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                            <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                            <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                            <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                            <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                        </ul>
                        <div class="card-product">
                            <div class="card-product-text">
                                <h5>{{ $product->description }}</h5>
                                <span>This quantity serves (2-4) </span>
                            </div>
                            <div class="card-product-rate">
                                <form>

                                </form>
                            </div>
                        </div>


                    </div>
                    <div class="value-produt">
                        <!-- <div>
                             <button class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</button>
                             <input type="number" id="number" value="0" />
                             <button class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</button>
                          </div> -->

                        <form action="{{ route('cart.store') }}" method="post">
                            @csrf

                            <input type="hidden" name="id" value="{{ $product->id }}" />
                            <input type="hidden" name="quantity" value="1" />
                            <input type="hidden" name="product_price" value="{{ $product->price }}" />

                            <button type="submit" class="custom-btn">Add Cart
                                {{-- <a class="custom-btn" href="product-single.html">Add Cart</a> --}}
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <div class="about-the-product float_left">
        <div class="container">
            <div class="heading-title">
                <h4>About the Product</h4>
                <p>Additional information,reviews & description</p>
                <img class="img-fluid " src="/images/under-line.png" alt="img">
            </div>
            <div class="custom-tabs float_left">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Description</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Review

                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="col-sm-5 col-md-6 col-12 pb-4">
                            <span>Comments</span>
                            @foreach ($comments as $item)
                                <div class="comment mt-4 text-justify">
                                    <img src="http://www.caiml.co.uk/wp-content/uploads/2016/03/270x270-male-avatar.png"
                                        alt="" class="rounded-circle" width="40" height="40">
                                    <h6 style="font-size: 15px">{{ $item->name }}</h6>
                                    <span>{{ $item->created_at }}</span>
                                    <br>
                                    <textarea name="comment" id="" cols="28" rows="5" disabled>{{ $item->comment }}</textarea>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <h5>Be the first one to review "WHOLE CHICKEN"</h5>
                        <span>We Care about your Opinion</span>

                        <form action="{{ route('comment', $product->id) }}" method="post">
                            @csrf
                            <div class="text-msg">
                                <textarea name="comment" id="" cols="30" rows="5" placeholder="Type Here.."></textarea>
                                <button type="submit" class="custom-btn">Add comment
                                    {{-- <a class="custom-btn" href="product-single.html">Add Cart</a> --}}
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="customer-blog-wrapper float_left ptb-100">
        <div class="container">
            <div class="heading-title">
                <h4>Customers Also Bought</h4>
                <p>You may also like</p>
                <img class="img-fluid " src="/images/under-line.png" alt="img">
            </div>
            <div class="product-single-wrapper">
                @foreach ($related_products as $item)
                    <div class="custom-tabs-prdt">
                        <div class="product-thumbnail">
                            <a href="javascript:;">
                                <img src={{ url('public/Productimages/' . $item->image) }} alt="img">
                            </a>
                        </div>
                        <div class="product-body">
                            <h5 class="product-title">
                                <a href="product-left-sidebar.html" title="Beef">{{ $item->name }}</a>
                            </h5>

                            <span class="product-price">{{ $item->price }} JOD </span>
                            <p class="product-text">{{ $item->discription }}</p>
                            <form action="{{ route('cart.store') }}" method="post">
                                @csrf

                                <input type="hidden" name="id" value="{{ $product->id }}" />
                                <input type="hidden" name="quantity" value="1" />
                                <input type="hidden" name="product_price" value="{{ $product->price }}" />

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

    <!-- footer section start -->
@endsection
