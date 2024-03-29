@extends('layouts.app')

@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Vvveb">
    <base href="">
    <link rel="icon" href="../../favicon.ico">

    <title>Vvveb default theme</title>

    <!-- Bootstrap core CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <!-- link href="css/bootstrap.css" rel="stylesheet"-->
    <!-- link href="css/stylesheet.css" rel="stylesheet"-->
</head>



<div class="page-container">

    <article class="product-details container" data-component-product>

        <div class="row">

            <!-- gallery and tabs column -->

            <div class="col-md-8">

                <div class="zoom-gallery row">

                    <ul class="list-unstyled product-gallery col-md-2">
                        <li class="list-item">
                            <a href="img/products/1.jpg"><img src="img/products/1.jpg" class="img-fluid"></a>
                        </li>
                        <li class="list-item">
                            <a href="img/products/2.jpg"><img src="img/products/2.jpg" class="img-fluid"></a>
                        </li>
                        <li class="list-item">
                            <a href="img/products/3.jpg"><img src="img/products/3.jpg" class="img-fluid"></a>
                        </li>
                    </ul>

                    <div class="col-md-10">
                        <a href="{{ $product->image }}"><img src="{{ $product->image }}" class="img-fluid" data-image></a>
                    </div>

                </div>


            </div>

            <!-- product name and add to cart -->

            <div class="col-md-4">
                <h1 class="product-heading" data-name>Sony Vaio Ubuntu Cosmic</h1>

                <!-- product attributes -->
                <ul class="list-unstyled text-muted">
                    <li>Brand: <span>Apple</span></li>
                    <li>SKU: <span>333</span></li>
                    <li>Stock: <span>In stock</span></li>
                </ul>

                <div class="old-price">
                    <span class="currency" data-currency>$</span> <span data-price>3.150.00</span>
                </div>

                <div class="price h3">
                    <span class="currency" data-currency>$</span> <span data-price>3.050.00</span>
                </div>

                <hr>

                <div class="form-group row">
                    <label for="productQuantity" class="col-form-label col-4">Quantity</label>
                    <input id="productQuantity" class="col-8 form-control" type="number" name="quantity" min="1" max="5">
                </div>

                <button type="button" class="btn btn-primary btn-block btn-icon">
                    <i class="la la-cart-plus"></i> Add to cart
                </button>

                <button type="button" class="btn btn-outline-secondary btn-block  btn-icon">
                    <i class="la la-shopping-cart"></i> Buy now
                </button>


                <div class="btn-group mt-3" role="group">

                    <button type="button" class="btn  btn-link text-black-50 btn-sm" title="Wishlist">
                        <i class="la la-heart"></i> Wishlist
                    </button>

                    <button type="button" class="btn  btn-link text-black-50 btn-sm" title="Compare">
                        <i class="la la-exchange"></i> Compare
                    </button>

                </div>

            </div>

        </div>


        <div class="product-tabs clearfix" role="tabpanel">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-expanded="true">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-expanded="false">Specification</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" id="dropdown1-tab" href="#dropdown1" role="tab" data-toggle="tab" aria-controls="dropdown1">@fat</a>
                        <a class="dropdown-item" id="dropdown2-tab" href="#dropdown2" role="tab" data-toggle="tab" aria-controls="dropdown2">@mdo</a>
                    </div>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div role="tabpanel" class="tab-pane fade active show" id="home" aria-labelledby="home-tab" aria-expanded="true" data-description>
                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                </div>
                <div class="tab-pane fade" id="dropdown1" role="tabpanel" aria-labelledby="dropdown1-tab">
                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                </div>
                <div class="tab-pane fade" id="dropdown2" role="tabpanel" aria-labelledby="dropdown2-tab">
                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                </div>
            </div>
        </div>


    </article><!-- product-details -->



    <div class="container products-tab-carousel">

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Featured products</a>
            </div>

        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">


                <section class="container products clearfix" data-component-products="limit:4 page:0 id:1679,807,786,1597">

                    <div class="owl-carousel owl-theme">

                        <div class="item" data-product>

                            <article class="product">

                                <a href="product.html" data-url>
                                    <img src="img/products/1.jpg" class="img-fluid" data-img>
                                </a>

                                <h3>
                                    <a href="product.html" data-product-url data-name data-url>Apple cinema</a>
                                </h3>

                                <span class="description" data-product-description>
							Lorem ipsum
						</span>

                                <div class="price-group">
                                    <div class="old-price">
                                        <span class="currency" data-product-currency>$</span> <span data-product-price>385</span>
                                    </div>

                                    <div class="price">
                                        <span class="currency" data-product-currency>$</span> <span data-product-price>315</span>
                                    </div>
                                </div>



                                <div class="btngroup">
                                    <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url>
                                        <i class="la la-shopping-cart"></i> Add to cart
                                    </button>

                                    <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
                                        <i class="la la-heart"></i>
                                    </button>

                                    <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
                                        <i class="la la-exchange"></i>
                                    </button>
                                </div>


                            </article><!-- product -->

                        </div> <!-- col-md -->

                        <div class="item" data-product>

                            <article class="product">

                                <a href="product.html" data-url>
                                    <img src="img/products/2.jpg" class="img-fluid" data-img>
                                </a>

                                <h3>
                                    <a href="product.html" data-product-url data-name data-url>Apple cinema</a>
                                </h3>

                                <span class="description" data-product-description>
							Lorem ipsum
						</span>

                                <div class="price-group">
                                    <div class="old-price">
                                        <span class="currency" data-product-currency>$</span> <span data-product-price>385</span>
                                    </div>

                                    <div class="price">
                                        <span class="currency" data-product-currency>$</span> <span data-product-price>315</span>
                                    </div>
                                </div>

                                <div class="btngroup">
                                    <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url>
                                        <i class="la la-shopping-cart"></i> Add to cart
                                    </button>

                                    <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
                                        <i class="la la-heart"></i>
                                    </button>

                                    <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
                                        <i class="la la-exchange"></i>
                                    </button>

                                </div>

                            </article><!-- product -->

                        </div> <!-- col-md -->

                        <div class="item" data-product>

                            <article class="product">

                                <a href="product.html" data-url>
                                    <img src="img/products/3.jpg" class="img-fluid" data-img>
                                </a>

                                <h3>
                                    <a href="product.html" data-product-url data-name data-url>Apple cinema</a>
                                </h3>

                                <span class="description" data-product-description>
							Lorem ipsum
						</span>

                                <div class="price-group">
                                    <div class="old-price">
                                        <span class="currency" data-product-currency>$</span> <span data-product-price>385</span>
                                    </div>

                                    <div class="price">
                                        <span class="currency" data-product-currency>$</span> <span data-product-price>315</span>
                                    </div>
                                </div>


                                <div class="btngroup">
                                    <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url>
                                        <i class="la la-shopping-cart"></i> Add to cart
                                    </button>

                                    <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
                                        <i class="la la-heart"></i>
                                    </button>

                                    <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
                                        <i class="la la-exchange"></i>
                                    </button>

                                </div>



                            </article><!-- product -->

                        </div> <!-- col-md -->

                        <div class="item" data-product>

                            <article class="product">

                                <a href="product.html" data-url>
                                    <img src="img/products/4.jpg" class="img-fluid" data-img>
                                </a>

                                <h3>
                                    <a href="product.html" data-product-url data-name data-url>Apple cinema</a>
                                </h3>

                                <span class="description" data-product-description>
							Lorem ipsum
						</span>

                                <div class="price-group">
                                    <div class="old-price">
                                        <span class="currency" data-product-currency>$</span> <span data-product-price>385</span>
                                    </div>

                                    <div class="price">
                                        <span class="currency" data-product-currency>$</span> <span data-product-price>315</span>
                                    </div>
                                </div>


                                <div class="btngroup">
                                    <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url>
                                        <i class="la la-shopping-cart"></i> Add to cart
                                    </button>

                                    <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
                                        <i class="la la-heart"></i>
                                    </button>

                                    <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
                                        <i class="la la-exchange"></i>
                                    </button>

                                </div>



                            </article><!-- product -->

                        </div> <!-- col-md -->

                        <div class="item" data-product>

                            <article class="product">

                                <a href="product.html" data-url>
                                    <img src="img/products/5.jpg" class="img-fluid" data-img>
                                </a>

                                <h3>
                                    <a href="product.html" data-product-url data-name data-url>Apple cinema</a>
                                </h3>

                                <span class="description" data-product-description>
							Lorem ipsum
						</span>

                                <div class="price-group">
                                    <div class="old-price">
                                        <span class="currency" data-product-currency>$</span> <span data-product-price>385</span>
                                    </div>

                                    <div class="price">
                                        <span class="currency" data-product-currency>$</span> <span data-product-price>315</span>
                                    </div>
                                </div>


                                <div class="btngroup">
                                    <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url>
                                        <i class="la la-shopping-cart"></i> Add to cart
                                    </button>

                                    <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
                                        <i class="la la-heart"></i>
                                    </button>

                                    <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
                                        <i class="la la-exchange"></i>
                                    </button>

                                </div>



                            </article><!-- product -->

                        </div> <!-- col-md -->

                        <div class="item" data-product>

                            <article class="product">

                                <a href="product.html" data-url>
                                    <img src="img/products/6.jpg" class="img-fluid" data-img>
                                </a>

                                <h3>
                                    <a href="product.html" data-product-url data-name data-url>Apple cinema</a>
                                </h3>

                                <span class="description" data-product-description>
							Lorem ipsum
						</span>


                                <div class="price-group">
                                    <div class="old-price">
                                        <span class="currency" data-product-currency>$</span> <span data-product-price>385</span>
                                    </div>

                                    <div class="price">
                                        <span class="currency" data-product-currency>$</span> <span data-product-price>315</span>
                                    </div>
                                </div>


                                <div class="btngroup">
                                    <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url>
                                        <i class="la la-shopping-cart"></i> Add to cart
                                    </button>

                                    <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
                                        <i class="la la-heart"></i>
                                    </button>

                                    <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
                                        <i class="la la-exchange"></i>
                                    </button>

                                </div>



                            </article><!-- product -->

                        </div> <!-- col-md -->


                    </div><!-- row -->
                </section> <!-- products -->


            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

            </div>

            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

            </div>
        </div>

    </div>
</div>

<footer class="bg-faded text-muted py-5 mt-5">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>

        <p>Album example is © Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
    </div>
</footer>

</div>

@include('footer.footer')
@endsection()

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script -->
<script src="js/jquery.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>

<script>
    $('#product-tabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })

    $(document).ready(function() {
        $('.zoom-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            closeOnContentClick: false,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom mfp-img-mobile',
            image: {
                verticalFit: true,
                titleSrc: function(item) {
                    return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
                }
            },
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300, // don't foget to change the duration also in CSS
                opener: function(element) {
                    return element.find('img');
                }
            }

        });
    });

    $('.owl-carousel').owlCarousel({
        loop:true,
        navRewind:true,
        margin:10,
        nav:true,
        dots:false,
        navText: ['<i class="la la-angle-left"></i>','<i class="la la-angle-right"></i> '],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
</script>

<style>

    .image-source-link {
        color: #98C3D1;
    }

    .mfp-with-zoom .mfp-container,
    .mfp-with-zoom.mfp-bg {
        opacity: 0;
        -webkit-backface-visibility: hidden;
        /* ideally, transition speed should match zoom duration */
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
    }

    .mfp-with-zoom.mfp-ready .mfp-container {
        opacity: 1;
    }
    .mfp-with-zoom.mfp-ready.mfp-bg {
        opacity: 0.8;
    }

    .mfp-with-zoom.mfp-removing .mfp-container,
    .mfp-with-zoom.mfp-removing.mfp-bg {
        opacity: 0;
    }

</style>

