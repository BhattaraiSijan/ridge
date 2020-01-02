<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ridge - Engineers and Architects</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.ico">
    <!-- CSS
        ============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.min.css')}}">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/slick.min.css')}}">
    <!-- CSS Animation CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/cssanimation.min.css')}}">
    <!-- Justified Gallery CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/justifiedGallery.min.css')}}">
    <!-- Light Gallery CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/light-gallery.min.css')}}">
    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->
    <!--
        <link rel="stylesheet" href="assets/css/vendor.min.css">
        <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
        -->
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    @include('frontend.header')
    @yield('content')
    @include('frontend.footer')
    @include('frontend.mobile_menu')
    <!--====================  scroll top ====================-->
    <button class="scroll-top" id="scroll-top">
        <i class="fa fa-angle-up"></i>
    </button>
    <!--====================  End of scroll top  ====================-->
    <!-- JS
    ============================================ -->
    <!-- Modernizer JS -->
    <script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>
    <!-- jQuery JS -->
    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Popper JS -->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <!-- Slick slider JS -->
    <script src="{{asset('assets/js/plugins/slick.min.js')}}"></script>
    <!-- Counterup JS -->
    <script src="{{asset('assets/js/plugins/counterup.min.js')}}"></script>
    <!-- Waypoint JS -->
    <script src="{{asset('assets/js/plugins/waypoint.min.js')}}"></script>
    <!-- Justified Gallery JS -->
    <script src="{{asset('assets/js/plugins/justifiedGallery.min.js')}}"></script>
    <!-- Image Loaded JS -->
    <script src="{{asset('assets/js/plugins/imageloaded.min.js')}}"></script>
    <!-- Maosnry JS -->
    <script src="{{asset('assets/js/plugins/masonry.min.js')}}"></script>
    <!-- Light Gallery JS -->
    <script src="{{asset('assets/js/plugins/light-gallery.min.js')}}"></script>
    <!-- Mailchimp JS -->
    <script src="{{asset('assets/js/plugins/mailchimp-ajax-submit.min.js')}}"></script>
    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->
    <!--
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->
    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>