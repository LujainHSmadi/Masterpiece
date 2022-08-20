@extends('layouts.master')
@section('content')
    <div class="inner-slider-wrapper float_left">
        <div class="container">
            <div class="inner-caption">
                <h4>Kitchens </h4>
                <img src="images/title.png" alt="img">
            </div>
            <ol class="breadcrumb sicon">
                <li><a href="#">Home</a></li>
                <li class="active">Product Left Sidebar</li>
            </ol>
            <img class="meat" src="images/title-bottom.png" alt="img">
        </div>
    </div>
    {{-- start teams --}}


    <div class="team-client-main-wrapper float_left ptb-100">
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
                            <img class="img-fluid" src={{ url('public/Image/' . $item->image) }} alt="img" >
                        </div>
                        <div class="team-text">
                            <h4> <a href="team-single.html" target="_blank">{{$item->name}}</a> </h4>
                            <p>OWNER</p>

                        </div>
                    </div>
                </div>
               @endforeach

            </div>
            {{-- categories part 2 --}}
            <div class="heading-title">

            </div>
            <div class="row">

            </div>
            <div class="team-text">


            </div>

        </div>
    </div>
    {{-- end teame section --}}

    {{-- end teams --}}
@endsection
