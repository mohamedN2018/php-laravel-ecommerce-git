{{--   { card 1 route }--}}
<div class="container products-tab-carousel">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Featured products</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Popular products</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Bestseller products</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">

        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="owl-carousel owl-theme" >
                @foreach( $latestProducts as $product)
                <div class="item" data-product style="background-color: #f3f3f3;">
                    <article class="product">
                        <a href="{{ $product->id }}" data-url>
                            <img src="{{ $product->image }}" alt="" class="u-image u-image-default u-image-1" data-image-width="200" data-image-height="200">
                        </a>
                        <h3>
                            <a href="{{ $product->id }}" data-product-url data-name data-url>{{ $product->title }}</a>
                        </h3>
                        <span class="description" data-product-description>
							Lorem ipsum
						</span>
                        <div class="price-group">
                            <div class="old-price">
                                <span class="currency" data-product-currency>$</span> <span data-product-price>385</span>
                            </div>

                            <div class="price">
                                <span class="currency" data-product-currency>EG-</span> <span data-product-price>{{ $product->price }}</span>
                            </div>
                        </div>
                        <div class="btngroup">
                            <a type="button" class="btn btn-sm btn-secondary" style="background-image: linear-gradient(to right, #3b065e, #5d3be7);"
                               title="Add to Cart" href="{{ route('cart.add',$product)}}" data-product-cart-url data-vvveb-action="addCart" data-product_id=40>
                                <i class="la la-shopping-cart"></i> Add to cart
                            </a>

                            <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
                                <i class="la la-heart"></i>
                            </button>

                            <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
                                <i class="la la-exchange"></i>
                            </button>
                        </div>

                    </article>
                    <!-- product -->
                </div>
                <!-- col-md -->
                @endforeach

            </div><!-- row -->
            <!-- products -->
        </div>
        {{--        end proslider 1 --}}
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="owl-carousel owl-theme">
                @foreach( $latestProducts as $product)
                    <div class="item" data-product>
                        <article class="product">
                            <a href="product.html" data-url>
                                <img src="{{ $product->image }}" alt="" class="u-image u-image-default u-image-1" data-image-width="200" data-image-height="200">
                            </a>
                            <h3>
                                <a href="product.html" data-product-url data-name data-url>{{ $product->title }}</a>
                            </h3>
                            <span class="description" data-product-description>
							Lorem ipsum
						</span>
                            <div class="price-group">
                                <div class="old-price">
                                    <span class="currency" data-product-currency>$</span> <span data-product-price>385</span>
                                </div>

                                <div class="price">
                                    <span class="currency" data-product-currency>EG-</span> <span data-product-price>{{ $product->price }}</span>
                                </div>
                            </div>
                            <div class="btngroup">
                                <a type="button" class="btn btn-sm btn-secondary" title="Add to Cart" href="{{ route('cart.add',$product)}}"
                                   data-product-cart-url data-vvveb-action="addCart" data-product_id=40>
                                    <i class="la la-shopping-cart"></i> Add to cart
                                </a>

                                <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
                                    <i class="la la-heart"></i>
                                </button>

                                <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
                                    <i class="la la-exchange"></i>
                                </button>
                            </div>

                        </article>
                        <!-- product -->
                    </div>
                    <!-- col-md -->
                @endforeach

            </div><!-- row -->
        </div>
        {{--        end proslider 2 --}}
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="owl-carousel owl-theme">
                @foreach( $latestProducts as $product)
                    <div class="item" data-product>
                        <article class="product">
                            <a href="product.html" data-url>
                                <img src="{{ $product->image }}" alt="" class="u-image u-image-default u-image-1" data-image-width="200" data-image-height="200">
                            </a>
                            <h3>
                                <a href="product.html" data-product-url data-name data-url>{{ $product->title }}</a>
                            </h3>
                            <span class="description" data-product-description>
							Lorem ipsum
						</span>
                            <div class="price-group">
                                <div class="old-price">
                                    <span class="currency" data-product-currency>$</span> <span data-product-price>385</span>
                                </div>

                                <div class="price">
                                    <span class="currency" data-product-currency>EG-</span> <span data-product-price>{{ $product->price }}</span>
                                </div>
                            </div>
                            <div class="btngroup">
                                <a type="button" class="btn btn-sm btn-secondary" title="Add to Cart" href="{{ route('cart.add',$product)}}"
                                   data-product-cart-url data-vvveb-action="addCart" data-product_id=40>
                                    <i class="la la-shopping-cart"></i> Add to cart
                                </a>

                                <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
                                    <i class="la la-heart"></i>
                                </button>

                                <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
                                    <i class="la la-exchange"></i>
                                </button>
                            </div>

                        </article>
                        <!-- product -->
                    </div>
                    <!-- col-md -->
                @endforeach

            </div><!-- row -->
        </div>
    </div>
        {{--        end proslider 3 --}}

</div>

{{--   { end card route }--}}
