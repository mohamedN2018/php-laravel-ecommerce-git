@extends('layouts.app')

@section('content')
    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">




    <section class="container u-clearfix u-gradient u-section-1" id="sec-19fb">
        @include('lan-3.gan-4')
        <br><br><hr>
        @if( session()->has('success'))
            <br><div class="alert alert-success" style="text-align: center; margin: auto"> {{ session()->get('success') }}</div><br>
        @endif
        <div class="row">
        </div>
        <div class="row m-md-1">
            @foreach( $latestProducts as $product)
                <br>
                <div class="col-md-2">
                    <div class="card text-white mb-2" style="text-align: center; margin: auto;">
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










    <br><br><hr>
    @include('footer.footer')
@endsection()

@section('style')
    <style>
        body {
            background-image: linear-gradient(45deg, #203d4e, #ececec);
        }
        .container {
            max-width: 1645px;
            margin-left: 360px;
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
@endsection()
