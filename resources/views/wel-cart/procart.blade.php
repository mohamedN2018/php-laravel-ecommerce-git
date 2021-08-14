<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="$95">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">

    <link rel="stylesheet" href="css/cell3.css" media="screen">
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.11.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <script type="application/ld+json">
    {
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html",
		"sameAs": []
}
</script>
    <meta property="og:title" content="Contact">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">

</head>


<section class="u-clearfix u-gradient u-section-1" id="sec-19fb">

    @if( session()->has('success'))
        <br><div class="alert alert-success" style="text-align: center; margin: auto"> {{ session()->get('success') }}</div><br>
    @endif
    <div class="u-layout-row">
        @foreach( $latestProducts as $product)
            <br>
            <div class="col-md-2">
                <div class="card text-white mb-2" style="text-align: center; margin: auto;">

                    <a href="{{ $product->id }}" data-url>
                        <img src="{{ $product->image }}" alt="" class="u-image u-image-default u-image-1" data-image-width="200" data-image-height="200">
                    </a>
                    <div class="card-body">

                        <p class="u-align-center u-text u-text-1" href="#">{{ $product->title }}</p>

                        <h1 class="u-align-center u-text u-text-grey-50 u-text-2">EG-{{ $product->price }}</h1>

                        <a href="{{ route('cart.add',$product)}}" class="u-btn u-btn-round u-button-style u-palette-1-base u-radius-50 u-btn-1">BUY NOW</a>
                    </div>
                    <br>
                </div>
            </div>
            <br>
        @endforeach
    </div>
</section><br><br>
