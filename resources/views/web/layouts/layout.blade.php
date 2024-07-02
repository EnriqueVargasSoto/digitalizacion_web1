<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digitalizacion</title>

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset ('web/assets/img/favicon.jpg')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset ('web/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('web/assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('web/assets/css/venobox.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('web/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('web/assets/css/keyframe-animation.css')}}">
    <link rel="stylesheet" href="{{ asset ('web/assets/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('web/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset ('web/assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('web/assets/css/main.css')}}">
</head>
<body>
    <!-- header-area-start -->
    @include('web.layouts.header')
    <!-- /.Main Header -->

    @yield('content')

    @include('web.layouts.footer')
    <!-- ./ footer-section -->

    <div id="scrollup">
        <button id="scroll-top" class="scroll-to-top"><i class="fa-regular fa-arrow-up-long"></i></button>
    </div>
    <!--scrollup-->

    <!-- JS here -->
    <script src="{{ asset ('web/assets/js/vendor/jquary-3.6.0.min.js')}}"></script>
    <script src="{{ asset ('web/assets/js/vendor/bootstrap-bundle.js')}}"></script>
    <script src="{{ asset ('web/assets/js/vendor/imagesloaded-pkgd.js')}}"></script>
    <script src="{{ asset ('web/assets/js/vendor/waypoints.min.js')}}"></script>
    <script src="{{ asset ('web/assets/js/vendor/venobox.min.js')}}"></script>
    <script src="{{ asset ('web/assets/js/vendor/odometer.min.js')}}"></script>
    <script src="{{ asset ('web/assets/js/vendor/meanmenu.js')}}"></script>
    <script src="{{ asset ('web/assets/js/vendor/jquery.isotope.js')}}"></script>
    <script src="{{ asset ('web/assets/js/vendor/nice-select.js')}}"></script>
    <script src="{{ asset ('web/assets/js/vendor/easypiechart.min.js')}}"></script>
    <script src="{{ asset ('web/assets/js/vendor/wow.min.js')}}"></script>
    <script src="{{ asset ('web/assets/js/vendor/swiper.min.js')}}"></script>
    <script src="{{ asset ('web/assets/js/vendor/smooth-scroll.js')}}"></script>
    <script src="{{ asset ('web/assets/js/ajax-form.js')}}"></script>
    <script src="{{ asset ('web/assets/js/main.js')}}"></script>
</body>
</html>
