<!doctype html>
<html class="no-js" data-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MKpratidin | Newspaper</title>
    <meta name="author" content="Tnews">
    <meta name="description" content="Tnews - News & Magazine HTML Template">
    <meta name="keywords" content="Tnews - News & Magazine HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets')}}/img/favicon.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets')}}/img/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets')}}/img/favicon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets')}}/img/favicon.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets')}}/img/favicon.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets')}}/img/favicon.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets')}}/img/favicon.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets')}}/img/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets')}}/img/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets')}}/img/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets')}}/img/favicon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets')}}/img/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets')}}/img/favicon.png">
    <link rel="manifest" href="{{asset('assets')}}/img/favicon.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('assets')}}/img/favicon.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>
<body class="bg-gray-100 font-sans">

    @include('partials.topbar')
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <script src="{{asset('assets')}}/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Slick Slider -->
    <script src="{{asset('assets')}}/js/slick.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="{{asset('assets')}}/js/jquery.counterup.min.js"></script>
    <!-- Range Slider -->
    <script src="{{asset('assets')}}/js/jquery-ui.min.js"></script>
    <!-- Isotope Filter -->
    <script src="{{asset('assets')}}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('assets')}}/js/isotope.pkgd.min.js"></script>
    <!-- Vimeo Player -->
    <script src="{{asset('assets')}}/js/vimeo_player.js"></script>

    <!-- Main Js File -->
    <script src="{{asset('assets')}}/js/main.js"></script>

</body>
</html>
