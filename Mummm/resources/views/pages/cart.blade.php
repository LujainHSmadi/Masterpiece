@extends('layouts.master')

@section('content')
    <!-- header end -->
    <!-- banner section start start-->
    <div class="inner-slider-wrapper float_left">
        <div class="container">
            <div class="inner-caption">
                <h4>Shopping Cart</h4>
                <img src="images/title.png" alt="img">
            </div>
            <ol class="breadcrumb sicon">
                <li><a href="#">Home</a></li>
                <li><a href="#">Page</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
            <img class="meat" src="images/title-bottom.png" alt="img">
        </div>
    </div>
    <!-- banner section start end-->

    <div class="shopping-cart-main-wrapper float_left ptb-100">
        <div class="container">
            <div class="cart-strip-main-wrapper mt-4">
                <div class="cart-item">
                    <div class="cart-item-img">

                        <h4>Food</h4>
                    </div>
                </div>
                <div class="cart-item">
                    <h4>price</h4>
                </div>

                <div class="cart-item">

                    <div class="number">
                        <h4>Quantity </h4>
                    </div>

                </div>


                <div class="cart-item">
                    <p>
                    <h4>Total<h4>
                            </p>
                </div>
                <div class="cart-item">
                    <span></span>
                </div>
            </div>
            {{--  --}}

            <!--  -->

            <!--  -->
            @foreach ($cartItems as $item)
                <div class="cart-strip-main-wrapper mt-4">
                    <div class="cart-item">
                        <div class="cart-item-img">
                            <img src="images/cart3.jpg" alt="logo" />
                            <h5>{{ $item->name }}</h5>
                        </div>
                    </div>
                    <div class="cart-item">
                        <h4>{{ $item->price }} JD</h4>
                    </div>
                    <div class="cart-item">
                        <div class="quantity-field">

                            <form action="{{ route('decrease', $item->id) }}" method="post">
                                {{-- @method('PATCH') --}}
                                @csrf
                                <button type="submit" class="value-button decrease-button" title="add" name='increase'>-</button>
                            </form>

                            <div class="number">{{ $item->quantity }}</div>

                            <form action="{{ route('cart.update', $item->id) }}" method="post">
                                @method('PUT')
                                @csrf
                                <button type="submit" class="value-button increase-button" title="remove">+</button>

                            </form>

                        </div>
                    </div>

                    <div class="cart-item">
                        <p>
                        <h4>{{ $item->sub_total }}<h4>
                                </p>
                    </div>
                    <div class="cart-item">
                        <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button style="border:none; background:#fff"><i class="fa-solid fa-trash-can"
                                    style="margin-left:40px"></i></a></button>
                        </form>
                    </div>
                </div>
                <!--  -->
            @endforeach

        </div>
    </div>


    <div class="shopping-details-wrapper float_left">
        <div class="container">
            <div class="row shoping-box">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="terms">
                        <form>
                            <div class="mb-3 form-check">

                                <label class="form-check-label" for="exampleCheck1">Wish you a Happy Time with Mumms Kitchen
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">

                </div>
                <div class="shipping-account-wrapper mt-4">
                    <p>Total </p>
                    <h5>{{ $total }}JD</h5>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="cart-btn-wrapper float_left">
        <div class="container">
            <div class="cart-btn">
                <a class="out-line" href='/'>Continue to shop</a>
                <a class="custom-btn" href="{{route('order.index')}}">Proceed to Payment</a>
            </div>
        </div>
    </div>
@endsection
