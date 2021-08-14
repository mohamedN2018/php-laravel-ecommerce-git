<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Vvveb">
    <!-- base href="/app/public/themes/default/" -->
    <base href="">
    <link rel="icon" href="../../favicon.ico">

    <title>show cart</title>

    <!-- Bootstrap core CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- link href="css/bootstrap.css" rel="stylesheet"-->
    <!-- link href="css/stylesheet.css" rel="stylesheet"-->
</head>

    @include('layouts.navone')
    <br><br><br>
{{--    @include('layouts.navtow')--}}
{{--    @include('layouts.navthree')--}}
    @include('layouts.nav4')



<div class="container-fluid">

    <div class=" row6" data-spy="scroll" data-target="#myScrollspy" data-offset="1">
         <div class="row3">
             <br><br>

        {{--<  nav >--}}

             <nav class=" col-sm-3 col-4" id="myScrollspy">
            <ul class="nav nav-pills flex-column">
                        <!--Grid column-->
                        <div class="col-lg-10">

                            <!-- Card -->
                            <div class="mb-3" >
                                <div class="container pt-4">

                                    <h5 class="mb-3">The total amount of</h5>

                                    <li class=" d-flex justify-content-between ">
                                        Temporary amount
                                        <span>${{$cart->totalPrice}}</span>
                                    </li>

                                    <li class=" d-flex justify-content-between ">
                                        <div>
                                            <strong>The total amount of</strong>
                                            <strong>
                                                <br>
                                                <p class="mb-0">(including VAT)</p>
                                            </strong>
                                        </div>
                                        <br>
                                        <span><strong>{{$cart->totalQty}}</strong></span>
                                    </li>
                                    <br>
                                    <a href="{{ route('cart.checkout', $cart->totalPrice)}}" type="button" class="btn btn-primary btn-block">go to checkout</a>
                                </div>
                            </div>
                            <!-- Card -->

                            <!-- Card -->
                            <div class="mb-3">
                                <div class="pt-4">

                                    <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample"
                                       aria-expanded="false" aria-controls="collapseExample">
                                        Add a discount code (optional)
                                        <span><i class="fas fa-chevron-down pt-1"></i></span>
                                    </a>
                                    <div class="collapse" id="collapseExample">
                                        <div class="mt-3">
                                            <div class="md-form md-outline mb-0">
                                                <input type="text" id="discount-code" class="form-control font-weight-light"
                                                       placeholder="Enter discount code">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->

                            <!-- Card -->
                            <div class="mb-3">
                                <div class="pt-4">

                                    <h5 class="mb-4">Expected shipping delivery</h5>

                                    <p class="mb-0"> Thu., 12.03. - Mon., 16.03.</p>
                                </div>
                            </div>
                            <!-- Card -->

                            <!-- Card -->
                            <div class="mb-3">
                                <div class="pt-4">
                                    <h5 class="mb-4">We accept</h5>

                                    <img class="mr-2" width="45px"
                                         src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                                         alt="Visa">
                                    <img class="mr-2" width="45px"
                                         src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                                         alt="American Express">
                                    <img class="mr-2" width="45px"
                                         src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                                         alt="Mastercard">
                                    <img class="mr-2" width="45px"
                                         src="https://mdbootstrap.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
                                         alt="PayPal acceptance mark">
                        </div>
                   </div>
                   <!-- Card -->
              </div>
            </ul>

        </nav>

{{--< end nav >--}}

                <div class="row">
                    @if($cart)
                        <div class="col-12">


                            @foreach( $cart->items as $product)
                                <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="table-responsive">

                                        <table class="table table-bordered" data-cart>
                                            <thead style="background-color: #d2d2d2;">
                                            <tr>
                                                <td class="text-center">Image</td>
                                                <td class="text-left">Product Name</td>
                                                <td class="text-left">Model</td>
                                                <td class="text-left">Quantity</td>
                                                <td class="text-right">Unit Price</td>
                                                <td class="text-right">Total</td>
                                            </tr>
                                            </thead>

                                            <tbody>

                                            <tr data-product>
                                                <td class="text-center">
                                                    <a href="https://demo.opencart.com/index.php?route=product/product&amp;product_id=40" data-url>
{{--                                                        <a href="{{ route( $product['id']  ) }}" data-url>--}}
                                                        <img src="{{ $product['image'] }} " width="47" alt="iPhone" data-img>
                                                    </a>
                                                </td>

                                                <td class="text-left"><a href="https://demo.opencart.com/index.php?route=product/product&amp;product_id=40" data-name>{{ $product['title'] }}</a>
                                                    <span class="text-danger">***</span>
                                                </td>
                                                <td class="text-left">product 11</td>
{{--                                                <td class="text-left">{{ $product['model'] }}</td>--}}
                                                <td class="text-left">
                                                    <div class="input-group btn-block" style="max-width: 200px;">
                                                        <input type="text" name="quantity[YToxOntzOjEwOiJwcm9kdWN0X2lkIjtpOjQwO30=]" value="2" size="1" class="form-control">
                                                        <span class="input-group-btn">

			<button type="submit" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Update"><i class="la la-refresh"></i></button>
			<button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="cart.remove('YToxOntzOjEwOiJwcm9kdWN0X2lkIjtpOjQwO30=');" data-original-title="Remove">
            <i class="la la-times-circle">

                 </i>
                </button>
             </span>
              </div>
          </td>
            <td class="text-right">${{ $product['price'] }}</td>
                  <td class="text-right">{{$cart->totalQty}}</td>
                                            </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </form>
                            @endforeach
                        </div>
                </div>
        </div>
    </div>

    @else
        <p>There are no items in the cart</p>
    @endif

</div>
@include('footer.footer')


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script>
    $('#product-tabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })
</script>
<!-- script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script -->
<script src="js/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<!-- script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script -->
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>



<style>
    .row6 {
        background-color: #e6e7e8;
    }

    .col-lg-10 {
        flex: 0 0 83.33333%;
        max-width: 100.33333%;
    }

    .container-fluid {
        width: 100%;
        padding-right: 100px;
        padding-left: 100px;
        margin-right: auto;
        margin-left: auto;
        margin-bottom: 1px;
    }


    .row3 {
        display: flex;
        flex-wrap: wrap;
        margin-left: 77px;
    }
    .row4 {

        display: flex;
        flex-wrap: wrap;
        margin-right: -652px;
        margin-left: 20px;
    }
    .table-bordered th, .table-bordered td {
        border: 1px solid #6950df;
    }
    .form-control {
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 0.88rem;
        line-height: 1.0;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 30px;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        margin: -3px;
    }

    body {
        position: relative;
        background-color: #d4d5d6;
    }
    .col-sm-3 {
        flex: 58 0 170%;
        max-width: 25%;
    }
    .col-12 {
        flex: 0 0 100%;
        max-width: 150%;
    }


</style>



