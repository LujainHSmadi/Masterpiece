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


    <div class="team-client-main-wrapper float_left ptb-100">
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th style="text-align: center" scope="col">Product</th>
                        <th style="text-align: center" scope="col">Product Quantity</th>
                        <th style="text-align: center" scope="col">Product img</th>
                        <th style="text-align: center" scope="col">Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($main_order->orders) && $main_order->orders->count() > 0)
                        @foreach ($main_order->orders as $item)
                            <tr>
                                <td style="text-align: center">{{ $item->product->name }}</td>
                                <td style="text-align: center">{{ $item->product_quantity }}</td>
                                <td style="text-align: center">
                                    <img src={{ url('public/Productimages/' . $item->product->image) }} alt="Avatar"
                                        class="rounded-circle" style="height: 100px; width: 150px;" />
                                </td>


                                <td style="text-align: center" >{{ $item->order_total_price }}</td>

                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

        </div>
    </div>
@endsection
