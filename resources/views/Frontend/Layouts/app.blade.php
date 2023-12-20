<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/') }}/assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/odometer.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/jarallax.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/aos.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/default.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/responsive.css">
</head>
<body>

<!-- Scroll-top -->
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="fas fa-angle-up"></i>
</button>
<!-- Scroll-top-end-->

@include('Frontend.Layouts.inc.header')

@yield('content')

@include('Frontend.Layouts.inc.footer')

<!-- JS here -->
<script src="{{ url('/') }}/assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="{{ url('/') }}/assets/js/bootstrap.min.js"></script>
<script src="{{ url('/') }}/assets/js/jquery.magnific-popup.min.js"></script>
<script src="{{ url('/') }}/assets/js/jquery.odometer.min.js"></script>
<script src="{{ url('/') }}/assets/js/jquery.appear.js"></script>
<script src="{{ url('/') }}/assets/js/gsap.js"></script>
<script src="{{ url('/') }}/assets/js/ScrollTrigger.js"></script>
<script src="{{ url('/') }}/assets/js/SplitText.js"></script>
<script src="{{ url('/') }}/assets/js/gsap-animation.js"></script>
<script src="{{ url('/') }}/assets/js/jarallax.min.js"></script>
<script src="{{ url('/') }}/assets/js/jquery.parallaxScroll.min.js"></script>
<script src="{{ url('/') }}/assets/js/particles.min.js"></script>
<script src="{{ url('/') }}/assets/js/jquery.easypiechart.min.js"></script>
<script src="{{ url('/') }}/assets/js/jquery.inview.min.js"></script>
<script src="{{ url('/') }}/assets/js/swiper-bundle.min.js"></script>
<script src="{{ url('/') }}/assets/js/slick.min.js"></script>
<script src="{{ url('/') }}/assets/js/ajax-form.js"></script>
<script src="{{ url('/') }}/assets/js/aos.js"></script>
<script src="{{ url('/') }}/assets/js/wow.min.js"></script>
<script src="{{ url('/') }}/assets/js/main.js"></script>
</body>
</html>
