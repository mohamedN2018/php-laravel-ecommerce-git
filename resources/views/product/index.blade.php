@extends('layouts.app')


@section('content')
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="css/cell3.css" rel="stylesheet">


    <div class="sidebar"><br><br><br>
        <a href="{{ route('home') }}"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="#services"><i class="fa fa-fw fa-wrench"></i> Services</a>
        <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a>
        <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
    </div>
<style>
    body {
        background-image: linear-gradient(45deg, #203d4e, #ececec);
    }
    .container {
        max-width: 1645px;
        margin-left: 360px;
    }
    .sidebar {
        height: 100%;
        width: 245px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #e4e4e4;
        overflow-x: hidden;
        padding-top: 16px;
    }

    .sidebar a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 20px;
        color: #818181;
        display: block;
    }

    .sidebar a:hover {
        color: #f1f1f1;
    }
    .u-section-1 .u-text-2 {
        margin: 20px 0 20px;
        font-size: 2rem;
        color: #940029;
    }

    .u-section-1 .u-btn-1 {
        font-weight: 700;
        margin: 23px auto -17px;
        padding: 10px 60px 10px 58px;
        background-image: linear-gradient(to right, #3b065e, #5d3be7);
        border-style: none;
    }

</style>
    <br><br><br>
<section class="container u-clearfix u-gradient u-section-1" id="sec-19fb">

    @if( session()->has('success'))
        <br><div class="alert alert-success" style="text-align: center; margin: auto"> {{ session()->get('success') }}</div><br>
    @endif
    <div class="row">
    </div>
    <div class="row m-md-1">
        @foreach( $products as $product)
            <br>
            <div class="col-md-2">
                    <div class="card text-white mb-2" style="text-align: center; margin: auto;">

{{--                    <img src="{{ $product->image }}" class="card-img-top" >--}}
                        <img src="{{ $product->image }}" alt="" class="u-image u-image-default u-image-1" data-image-width="200" data-image-height="200">


                        <div class="card-body">
                        <a href="#" class="card-title">{{ $product->title }}</a>
                            <h3 class="u-align-center u-text u-text-grey-50 u-text-2">EG-{{ $product->price }}</h3>
                            <a href="{{ route('cart.add',$product)}}" class="u-btn u-btn-round u-button-style u-palette-1-base u-radius-50 u-btn-4">BUY NOW</a>
                    </div>

                    <br>
                </div>

            </div>

            <br>
        @endforeach
    </div>
</section>
<div class="container col-md-3">
    <div class="card ml-3" style="max-width: 10rem;">
        <div class="card-header bg-info text-white"> Stats.</div>
        <div class="card-body">
            <p class="card-text"> All product: {{ $product }}</p>
            <p>
            </p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 d-flex justify-content-center">
    </div>
</div>

@endsection
