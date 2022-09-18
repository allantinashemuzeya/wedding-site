<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title >{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Wedding Site Styles -->

        <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}" />
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144098545-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-144098545-1');
        </script>

        <!-- Scripts -->
        @routes
        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body class="font-sans antialiased">


        <!-- Preloader -->
        <div class="preloader">
            <div class="lds-heart">
                <div></div>
            </div>
        </div>

        <!-- Main -->
        <div id="oliven-page">

            @inertia

            <!-- jQuery -->
            <script src="{{asset('js/jquery.min.js')}}"></script>
            <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
            <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
            <script src="{{asset('js/bootstrap.min.js')}}"></script>
            <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
            <script src="{{asset('js/sticky-kit.min.js')}}"></script>
            <script src="{{asset('js/isotope.js')}}"></script>
            <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
            <script src="{{asset('js/owl.carousel.min.js')}}"></script>
            <script src="{{asset('js/main.js')}}"></script>

        </div>

    </body>
</html>
