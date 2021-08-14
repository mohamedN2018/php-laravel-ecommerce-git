@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Vvveb">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- base href="/app/public/themes/default/" -->
    <base href="">
    <link rel="icon" href="../../favicon.ico">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <title>Shopping-cart</title>

    <style>
        .card button {
            border: none;
            outline: 0;
            padding: 5px;
            color: #0f0d50;
            background-color: #64bfc3;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 12px;
        }

        .card button:hover {
            opacity: 0.1;
        }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
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

        section {
            padding: 47px 150px;
            overflow: hidden;
        }
        .carousel {
            position: relative;
            margin: 45px 80px 45px 80px;
        }
    </style>
</head>

<body style="background-color: #babcbd">
    <br><br><br>
            {{--< carousel >--}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/laptop/hero_endframe__ea0qze85eyi6_large_2x.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/laptop/hero_endframe__ea0qze85eyi6_large_2x.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/laptop/hero_endframe__ea0qze85eyi6_large_2x.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
             {{--< end carousel >--}}
    @include('wel-cart.procart')

    @include('wel-cart.proslider')
    <br><br>
    @include('wel-cart.proslider')

{{--   { card 2 route }--}}
<section id="parallax_1" class="module parallax white mb-3">
          <div>
             <div class="container">
             <h3>Parallax call to action</h3>
            <p>Kale chips wolf banh mi, Tumblr polaroid Truffaut semiotics Echo Park<br> listicle sustainable meditation cold-pressed deep v twee keytar</p>
            <a href="/index.php?route=product/category&amp;path=20" class="btn btn-default">Buy now!</a>
       </div>
    </div>
</section>
    @include('wel-cart.proslider')
<div class="alert alert-light alert-dismissible fade alert-top" role="alert">
    <div class="container">

        <div class="message">
            Product was added to cart.
        </div>

        <button type="button" class="close"  aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
    @include('wel-cart.procart')
    @include('wel-cart.proslider')
    @include('wel-cart.procart')

    {{--    brands   --}}
    <section class="u-align-center u-clearfix u-section-5" id="sec-2bdf">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-text u-text-1">brands me</h2>
            <div class="u-clearfix u-gutter-20 u-layout-wrap u-layout-wrap-1">
                <div class="u-gutter-0 u-layout">
                    <div class="u-layout-col">
                        <div class="u-size-30">
                            <div class="u-layout-row">
                                <div class="u-container-style u-expand-resize u-layout-cell u-left-cell u-size-20 u-size-60-md u-layout-cell-1">
                                    <div class="u-container-layout u-valign-middle u-container-layout-1">
                                        <img class="u-image u-image-contain u-image-1" data-image-width="500" data-image-height="135" src="img/images/1.svg">
                                    </div>
                                </div>
                                <div class="u-container-style u-layout-cell u-size-20 u-size-30-md u-layout-cell-2">
                                    <div class="u-container-layout u-valign-middle u-container-layout-2">
                                        <img class="u-image u-image-contain u-image-2" data-image-width="500" data-image-height="135" src="img/images/2.svg">
                                    </div>
                                </div>
                                <div class="u-container-style u-layout-cell u-right-cell u-size-20 u-size-30-md u-layout-cell-3">
                                    <div class="u-container-layout u-valign-middle u-container-layout-3">
                                        <img class="u-image u-image-contain u-image-3" data-image-width="500" data-image-height="175" src="img/images/3.svg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="u-size-30">
                            <div class="u-layout-row">
                                <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-4">
                                    <div class="u-container-layout u-valign-middle u-container-layout-4">
                                        <img class="u-image u-image-contain u-image-4" data-image-width="500" data-image-height="135" src="img/images/4.svg">
                                    </div>
                                </div>
                                <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-5">
                                    <div class="u-container-layout u-container-layout-5">
                                        <img class="u-image u-image-contain u-image-5" data-image-width="500" data-image-height="135" src="img/images/5.svg">
                                    </div>
                                </div>
                                <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-5">
                                    <div class="u-container-layout u-container-layout-6">
                                        <img class="u-image u-image-contain u-image-6" data-image-width="500" data-image-height="135" src="img/images/6.svg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--    end-brands   --}}

{{--    @include('brand.brands')--}}

    @include('Direct-Chat.contact')

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<script>
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
</body>
@include('footer.footer')

</html>

@endsection()

