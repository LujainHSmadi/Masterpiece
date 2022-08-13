@extends('layouts.master')
@section('content')
    <!-- banner section start start-->
    <div class="inner-slider-wrapper float_left">
        <div class="container">
            <div class="inner-caption">
                <h4>Checkout</h4>
                <img src="images/title.png" alt="img">
            </div>
            <ol class="breadcrumb sicon">
                <li><a href="#">Home</a></li>
                <li class="active">Checkout</li>
            </ol>
            <img class="meat" src="images/title-bottom.png" alt="img">
        </div>
    </div>
    <!-- banner section start end-->

    <div class="inner-page-main-wrapper float_left ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="side-accordian">
                        <div class="accordions" id="secondAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Billing Information
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#secondAccordion">
                                    <div class="accordion-body">
                                        <div class="billing_info">
                                            <form method="post" action="{{route('users.store')}}">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3 row">
                                                    <div class="col-md-6 col-12">
                                                        <label> Name*</label>
                                                        <input type="text" class="form-control" placeholder="Enter here" value="{{$user[0]->name}}">
                                                    </div>
                                                </div>
                                                <!--  -->
                                                <div class="mb-3 row">
                                                    <div class="col-md-6 col-12">
                                                        <label>Email*</label>
                                                        <input type="email" class="form-control" placeholder="Enter here" value="{{$user[0]->email}}">
                                                    </div>

                                                    <!--  -->
                                                    <div class="mb-3 row">
                                                        <div class="col-md-6 col-12">
                                                            <label>Address*</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter here" value="{{$user[0]->address}}" required>
                                                        </div>

                                                    </div>
                                                    <div class="mb-3 row">
                                                        <div class="col-md-6 col-12">
                                                            <label>Phone No.*</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter here" value="{{$user[0]->phonenumber}}" required>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!--  -->
                                                <!--  -->

                                                <!--  -->
                                                <div class="fmb-3 row">
                                                    {{-- <div class="col-md-12 col-12">
                                                        <input type="checkbox" id="scales" name="scales" checked>
                                                        <label for="scales">Ship to Same Address As Billing</label>
                                                    </div> --}}
                                                </div>
                                                <a class="submit_btn" href="">Continue</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" id="pay">
                                        Payment Method
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#secondAccordion">
                                    <div class="accordion-body">
                                        <div class="payment_method">
                                            <form>
                                                <p>
                                                    <input type="radio" id="test3" name="radio-group" checked>
                                                    <label class="direct_bank" for="test3">Direct Bank Transfer
                                                        <span class="small-text">Make your payment directly into our bank
                                                            account.
                                                            Please use your Order ID as the payment reference. Your order
                                                            will not be
                                                            shipped until the funds have cleared in our account.</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="test4" name="radio-group">
                                                    <label for="test4">Cheque Payments
                                                        <span class="small-text">Make your payment directly into our bank
                                                            account.
                                                            Please use your Order ID as the payment reference. Your order
                                                            will not be
                                                            shipped until the funds have cleared in our account.</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="test5" name="radio-group">
                                                    <label for="test5">Cash On Delivery
                                                        <span class="small-text">Make your payment directly into our bank
                                                            account.
                                                            Please use your Order ID as the payment reference. Your order
                                                            will not be
                                                            shipped until the funds have cleared in our account.</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="test6" name="radio-group">
                                                    <label for="test6">Pay Pal</label>
                                                </p>
                                            </form>
                                            <div class="payment_card">
                                                <img class="img-fluid" src="images/payment_card.png" alt="card">
                                                <a class="submit_btn" href="#">Place Order</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="side-bar-strip">
                        <h4>Your Order</h4>
                        <img src="images/side-title.png" alt="img">
                        <div class="order_details">
                            @foreach ($user as $item)
                                
                            <p> {{$item->productName}} <span>{{$item->sub_total}}</span> </p>
                            @endforeach
                            <h3>Order Total <span>{{$total}}</span></h3>
                        </div>
                         <form method="post" action="{{route('order.store')}}">
                                                @csrf
                        <button class="custom-btn" href="{{route('order.store')}}">Place Order</button>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
