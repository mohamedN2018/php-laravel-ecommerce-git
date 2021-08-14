 {{--        =============================             nav-2             ========================--}}
 <head>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
           integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
           integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
     <script src="https://js.stripe.com/v3/"></script>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>{{ config('app.name', 'Laravel') }}</title>
     <!-- Scripts -->
     <script src="{{ asset('js/function.js') }}" defer></script>
     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
     @yield('style')
 </head>

 <header class="container mt-5">
     {{--                << section--1-login-and-show-total >>--}}
        <div class="row">
            <div class="col-md-3">
                <a href="" class="logo d-flex align-items-center" style="margin-bottom: -3.5rem;"> <img src="img/logo.png" alt="" style="max-height: 60px;  margin-right: 6px; ;"></a>
{{--                {{ route('welcome') }}--}}
            </div>

            <div class="col-md-11">
                {{--< 1 >--}}
                <div class="dropdown float-right" id="mini-user" data-component-user>

                    <div class="d-inline-block text-dark" data-if="login">
                        @guest
                            <div class="btn btn-link dropdown-toggle bg-faded p-0 chevron-big" id="dropdownMenuLink"
                                 data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">

                                <i class="la la-user d-inline-block" style="font-size:42px"></i>&ensp;

                                <div class="d-inline-block text-dark" data-if="login">
                                    <span class="small d-block text-left">My account</span>
                                    <span class="font-weight-bold">Login/Register</span>
                                </div>
                            </div>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                @if (Route::has('login'))
                                    <div class="top-right links">
                                        @auth
                                            <a href="{{ url('/home') }}">Home</a>
                                        @else
                                            <a class="dropdown-item"  href="{{ route('login') }}">Login</a>
                                            @if (Route::has('register'))
                                                <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </div>
                        @else
                            <div class="btn btn-link dropdown-toggle bg-faded p-0 chevron-big" id="dropdownMenuLink"
                                 data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                                <i class="la la-user d-inline-block" style="font-size:42px"></i>&ensp;
                                <div class="d-inline-block text-dark" data-if="login">
                                    <span class="small d-block text-left">My account</span>
                                    <span class="font-weight-bold">  {{ Auth::user()->name }} </span>
                                </div>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <a class="dropdown-item" href="home" target="_blank"> Dashboard </a>
                                <a class="dropdown-item" href="home" target="_blank"> profile </a>
                                <a class="dropdown-item" href="home" target="_blank"> shopping </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        @endguest
                    </div>
                </div>

            {{--               << end section--1-login-and-show-total >>--}}
                {{--< 2 >--}}
            {{--                << section--2--show-cart >>--}}

  @auth
 <div class="dropdown float-right" id="mini-cart" data-component-cart>
{{--             @foreach( $products as $product)--}}

     <a class="btn btn-link dropdown-toggle bg-faded p-0 chevron-big" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @auth
               <i class="la la-shopping-cart d-inline-block" style="font-size:42px"><span class="cart-items" data-total_items>
                {{ session()->has('cart') ? session()->get('cart')->totalQty : '0' }}
                   </span></i>&ensp;
                        @endauth
           <div class="d-inline-block text-dark"><span class="small d-block text-left">Products</span>
        <span class="font-weight-bold" data-total>

     </span>
  </div>
</a>


<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
  <table class="table table-sm table-striped">
     <tbody><tr>
        <td class="text-center"> <a href="http://opencart3100.givan.ro/index.php?route=product/product&amp;language=en-gb&amp;product_id=40"><img
            src="http://opencart3100.givan.ro/image/cache/catalog/demo/iphone_1-47x47.jpg" alt="iPhone" title="iPhone" class="img-thumbnail"></a> </td>
               <td class="text-left"><a href="http://opencart3100.givan.ro/index.php?route=product/product&amp;language=en-gb&amp;product_id=40">iPhone</a>
                 </td>
                  <td class="text-right">x 1</td>
                  <td class="text-right">$</td>
                  <td class="text-center"><button type="button" onclick="cart.remove('1');" data-toggle="tooltip" title=""
                 class="btn btn-danger btn-sm" data-original-title="Remove"><i class="la la-times"></i></button></td>
         </tr>
     </tbody>
  </table>
<div>
    {{--       @endsection    --}}
   <table class="table table-sm table-bordered">
       <tbody><tr>
            <td class="text-right"><strong>Sub-Total</strong></td>
                <td class="text-right">$681.00</td>
            </tr>
            <tr>
                    <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                    <td class="text-right">$6.00</td>
            </tr>
            <tr>
                    <td class="text-right"><strong>VAT (20%)</strong></td>
                    <td class="text-right">$136.20</td>
            </tr>
            <tr>
                    <td class="text-right"><strong>Total</strong></td>
                    <td class="text-right">$823.20</td>
         </tr>
     </tbody>
  </table>
    <p class="text-right"><a href="http://opencart3100.givan.ro/index.php?route=checkout/cart&amp;language=en-gb"><strong>
     <i class="la la-shopping-cart"></i> View Cart</strong></a>&nbsp;&nbsp;&nbsp;<a href="http://opencart3100.givan.ro/index.php?route=checkout/checkout&amp;language=en-gb">
       <strong><i class="la la-share"></i> Checkout</strong></a></p>
        </div>
    </div>
</div>
                    {{--<< section--2--show-cart >>--}}
               {{--< 1 >--}}
          @endauth
     </div>
  </div>
</header>

 {{--        =============================             END-nav-2             ========================--}}
