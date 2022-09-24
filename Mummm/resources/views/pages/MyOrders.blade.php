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
                        <th scope="col">#</th>
                        <th scope="col">Product Quantity</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($main_orders) && $main_orders->count() > 0)
                   
                    @foreach ($main_orders as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->product_quantity }}</td>
                            <td>{{ $item->order_total_price }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>

                                <a href="{{ route('ShowMyOrder', $item->id) }}"
                                    class="confirm mb-1 btn btn-sm btn-danger"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                   
                    @endif
                </tbody>
            </table>

        </div>
    </div>
@endsection
