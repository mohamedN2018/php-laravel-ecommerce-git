@include('layouts.navone')

@extends('katiger.carousel')

@section('content')
<hr>
<br>
<section>
    <div class="row m-md-2">
        @foreach( $latestProducts as $product)
            <div class="col-md-3">
                <div class="card bg-dark text-white mb-2" style="text-align: center; margin: auto;">
                    <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-success text-lg">
                            Ribbon
                        </div>
                    </div>
                    <img src="{{ $product->image }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <p class="card-text">Sld on thd make up the bulk of the card's content.</p>
                        <p><strong class="price"> $ {{ $product->price }}</strong></p>
                        <a class="button" href="{{ route('cart.add',$product)}}"> Buy </a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<br>
<hr>

<a href="{{ route('product.index',$product)}}" type="button" class="btn btn-outline-secondary btn-block" target="_blank"> more </a>


<hr>
<br>
<br><br>
<div class="text-center m-md-5">
    <h1 class="text-dark"> Advertise products </h1>
</div>
<br><br>
@include('footer.footer')
@endsection
