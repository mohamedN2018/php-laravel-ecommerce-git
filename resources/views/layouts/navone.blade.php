<!-- ======= Header ======= -->
<link href="assets/css/style.css" rel="stylesheet">

<header id="header" class="header fixed-top">
    <div class="container">
         <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center"> <img src="img/logo.png" alt=""> </a>
          <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active"  href="{{ route('product.index') }}">جميع الفئات</a>
                </li>
                <li><a class="nav-link scrollto active" href="{{ route('store') }}">product</a>
                </li>
                <li><a class="nav-link scrollto" href="#"></a></li>
                <li><a class="nav-link scrollto" href="{{ route('lan-4.long-1') }}">  موبايلات </a>
                </li>
                <li><a class="nav-link scrollto" href="{{ route('lan-4.long-2') }}">لاب توب</a>
                </li>
                <li><a href="{{ route('lan-4.long-3') }}">شاشة</a>
                </li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down">
                        </i>
                    </a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a>
                                </li>
                                <li><a href="#">Deep Drop Down 2</a>
                                </li>
                                <li><a href="#">Deep Drop Down 3</a>
                                </li>
                                <li><a href="#">Deep Drop Down 4</a>
                                </li>
                                <li><a href="#">Deep Drop Down 5</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a>
                        </li>
                        <li><a href="#">Drop Down 3</a>
                        </li>
                        <li><a href="#">Drop Down 4</a>
                        </li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a>
                </li>
                <li><a class="getstarted scrollto" href="#about">Get Started</a>
                </li>


                <div class="col-md-4">
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

{{--    <div class="btn btn-link  bg-faded p-0 chevron-big" id="dropdownMenuLink"  aria-haspopup="true" aria-expanded="false">--}}
     <div id="dropdownMenuLink"  aria-haspopup="true" aria-expanded="false">
      <a href="{{ route('cart.show') }}" class="nav-link">
     @auth

     <i class="la la-shopping-cart d-inline-block" style="font-size:42px">
         <span class="cart-items" data-total_items>
     {{ session()->has('cart') ? session()->get('cart')->totalQty : '0' }}
     </span>
    </i>&ensp;
{{--      <span class="cart-items" data-total_items>--}}
{{--     {{ session()->has('cart') ? session()->get('cart')->totalQty : '0' }}--}}
{{--     {{$cart->totalQty}}--}}

{{--     </span>--}}
    @endauth
     </a>
     </div>


{{--       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">--}}

{{--       @if($cart)--}}
{{--          @foreach( $cart->items as $product)--}}
{{--           <table class="table table-sm table-striped">--}}
{{--            <tbody>--}}
{{--             <tr>--}}
{{--            <td class="text-center">--}}
{{--                <a href="http://opencart3100.givan.ro/index.php?route=product/product&amp;language=en-gb&amp;product_id=40">--}}
{{--                    <img src="{{ $product['image'] }}" alt="iPhone" title="iPhone" class="img-thumbnail">--}}
{{--                  </a>--}}
{{--               </td>--}}
{{--              <td class="text-left"><a href="http://opencart3100.givan.ro/index.php?route=product/product&amp;language=en-gb&amp;product_id=40">iPhone</a>--}}
{{--                </td>--}}

{{--                        <td class="text-right">${{ $product['price'] }}</td>--}}
{{--                       <td class="text-center">--}}
{{--                        <button type="button" onclick="cart.remove('1');" data-toggle="tooltip"  class="btn btn-danger btn-sm" data-original-title="Remove">--}}
{{--                         <i class="la la-times">--}}
{{--                         </i>--}}
{{--                        </button>--}}
{{--                       </td>--}}
{{--                     </tr>--}}
{{--                   </tbody>--}}
{{--                </table>--}}
{{--               @endforeach--}}
{{--           @else--}}
{{--               <p>There are no items in the cart</p>--}}
{{--           @endif--}}
{{--      <div>--}}
{{--        <table class="table table-sm table-bordered ">--}}
{{--             <tbody class="text-center">--}}
{{--             <tr>--}}
{{--             <tr>--}}
{{--                <td class="text-right"><strong>Total</strong></td>--}}
{{--                <td class="text-right">${{$cart->totalPrice}}</td>--}}
{{--             </tr>--}}
{{--             </tbody>--}}
{{--   </table>--}}

{{--    <p class="text-right"><a href="#"><strong>--}}

{{--      <i class="la la-shopping-cart"></i> View Cart</strong></a>&nbsp;&nbsp;&nbsp;--}}
{{--        <a href="{{ route('cart.checkout', $cart->totalPrice)}}" type="button" class="btn btn-primary btn-block"><i class="la la-share"></i> Checkout</a>--}}
{{--    </p>--}}
{{--             </div>--}}

{{--             </div>--}}
{{--             </div>--}}

             @endauth



                    {{--<< section--2--show-cart >>--}}
                  {{--< 1 >--}}
{{--            </div>   --}}

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
           <!-- .navbar -->
         </div>
    </div>

</header>
<!-- End Header -->


<script>
    /**
     * Template Name: FlexStart - v1.2.0
     * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
     * Author: BootstrapMade.com
     * License: https://bootstrapmade.com/license/
     */
    (function() {
        "use strict";

        /**
         * Easy selector helper function
         */
        const select = (el, all = false) => {
            el = el.trim()
            if (all) {
                return [...document.querySelectorAll(el)]
            } else {
                return document.querySelector(el)
            }
        }

        /**
         * Easy event listener function
         */
        const on = (type, el, listener, all = false) => {
            if (all) {
                select(el, all).forEach(e => e.addEventListener(type, listener))
            } else {
                select(el, all).addEventListener(type, listener)
            }
        }

        /**
         * Easy on scroll event listener
         */
        const onscroll = (el, listener) => {
            el.addEventListener('scroll', listener)
        }

        /**
         * Navbar links active state on scroll
         */
        let navbarlinks = select('#navbar .scrollto', true)
        const navbarlinksActive = () => {
            let position = window.scrollY + 200
            navbarlinks.forEach(navbarlink => {
                if (!navbarlink.hash) return
                let section = select(navbarlink.hash)
                if (!section) return
                if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
                    navbarlink.classList.add('active')
                } else {
                    navbarlink.classList.remove('active')
                }
            })
        }
        window.addEventListener('load', navbarlinksActive)
        onscroll(document, navbarlinksActive)

        /**
         * Scrolls to an element with header offset
         */
        const scrollto = (el) => {
            let header = select('#header')
            let offset = header.offsetHeight

            if (!header.classList.contains('header-scrolled')) {
                offset -= 10
            }

            let elementPos = select(el).offsetTop
            window.scrollTo({
                top: elementPos - offset,
                behavior: 'smooth'
            })
        }

        /**
         * Toggle .header-scrolled class to #header when page is scrolled
         */
        let selectHeader = select('#header')
        if (selectHeader) {
            const headerScrolled = () => {
                if (window.scrollY > 100) {
                    selectHeader.classList.add('header-scrolled')
                } else {
                    selectHeader.classList.remove('header-scrolled')
                }
            }
            window.addEventListener('load', headerScrolled)
            onscroll(document, headerScrolled)
        }

        /**
         * Back to top button
         */
        let backtotop = select('.back-to-top')
        if (backtotop) {
            const toggleBacktotop = () => {
                if (window.scrollY > 100) {
                    backtotop.classList.add('active')
                } else {
                    backtotop.classList.remove('active')
                }
            }
            window.addEventListener('load', toggleBacktotop)
            onscroll(document, toggleBacktotop)
        }

        /**
         * Mobile nav toggle
         */
        on('click', '.mobile-nav-toggle', function(e) {
            select('#navbar').classList.toggle('navbar-mobile')
            this.classList.toggle('bi-list')
            this.classList.toggle('bi-x')
        })

        /**
         * Mobile nav dropdowns activate
         */
        on('click', '.navbar .dropdown > a', function(e) {
            if (select('#navbar').classList.contains('navbar-mobile')) {
                e.preventDefault()
                this.nextElementSibling.classList.toggle('dropdown-active')
            }
        }, true)

        /**
         * Scrool with ofset on links with a class name .scrollto
         */
        on('click', '.scrollto', function(e) {
            if (select(this.hash)) {
                e.preventDefault()

                let navbar = select('#navbar')
                if (navbar.classList.contains('navbar-mobile')) {
                    navbar.classList.remove('navbar-mobile')
                    let navbarToggle = select('.mobile-nav-toggle')
                    navbarToggle.classList.toggle('bi-list')
                    navbarToggle.classList.toggle('bi-x')
                }
                scrollto(this.hash)
            }
        }, true)

        /**
         * Scroll with ofset on page load with hash links in the url
         */
        window.addEventListener('load', () => {
            if (window.location.hash) {
                if (select(window.location.hash)) {
                    scrollto(window.location.hash)
                }
            }
        });

        /**
         * Clients Slider
         */
        new Swiper('.clients-slider', {
            speed: 400,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            slidesPerView: 'auto',
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true
            },
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween: 40
                },
                480: {
                    slidesPerView: 3,
                    spaceBetween: 60
                },
                640: {
                    slidesPerView: 4,
                    spaceBetween: 80
                },
                992: {
                    slidesPerView: 6,
                    spaceBetween: 120
                }
            }
        });

        /**
         * Porfolio isotope and filter
         */
        window.addEventListener('load', () => {
            let portfolioContainer = select('.portfolio-container');
            if (portfolioContainer) {
                let portfolioIsotope = new Isotope(portfolioContainer, {
                    itemSelector: '.portfolio-item',
                    layoutMode: 'fitRows'
                });

                let portfolioFilters = select('#portfolio-flters li', true);

                on('click', '#portfolio-flters li', function(e) {
                    e.preventDefault();
                    portfolioFilters.forEach(function(el) {
                        el.classList.remove('filter-active');
                    });
                    this.classList.add('filter-active');

                    portfolioIsotope.arrange({
                        filter: this.getAttribute('data-filter')
                    });
                    aos_init();
                }, true);
            }

        });

        /**
         * Initiate portfolio lightbox
         */
        const portfolioLightbox = GLightbox({
            selector: '.portfokio-lightbox'
        });

        /**
         * Portfolio details slider
         */
        new Swiper('.portfolio-details-slider', {
            speed: 400,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true
            }
        });

        /**
         * Testimonials slider
         */
        new Swiper('.testimonials-slider', {
            speed: 600,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            slidesPerView: 'auto',
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 40
                },

                1200: {
                    slidesPerView: 3,
                }
            }
        });

        /**
         * Animation on scroll
         */
        function aos_init() {
            AOS.init({
                duration: 1000,
                easing: "ease-in-out",
                once: true,
                mirror: false
            });
        }
        window.addEventListener('load', () => {
            aos_init();
        });

    })();
</script>
