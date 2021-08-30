<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fashion | Teamplate</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin-nguyenphikhanh.net/assets/img/brand/blue.png')}}">
    <link rel="stylesheet" href="{{asset('nguyenphikhanh.net_template/assets/css/bootstrap.min.css')}}">    
    <link rel="stylesheet" href="{{asset('nguyenphikhanh.net_template/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('nguyenphikhanh.net_template/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('nguyenphikhanh.net_template/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('nguyenphikhanh.net_template/assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('nguyenphikhanh.net_template/assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('nguyenphikhanh.net_template/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('nguyenphikhanh.net_template/assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('nguyenphikhanh.net_template/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('nguyenphikhanh.net_template/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('nguyenphikhanh.net_template/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('nguyenphikhanh.net_template/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('nguyenphikhanh.net_template/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('nguyenphikhanh.net_template/assets/css/style.css')}}">



  <!-- Vendor CSS Files -->
  <link href="{{asset('nguyenphikhanh.net_template/assets2/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('nguyenphikhanh.net_template/assets2/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('nguyenphikhanh.net_template/assets2/vendor/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('nguyenphikhanh.net_template/assets2/vendor/owl.carousel/assets2/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('nguyenphikhanh.net_template/assets2/vendor/venobox/venobox.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('nguyenphikhanh.net_template/assets2/css/style.css')}}" rel="stylesheet">

</head>

<body class="full-wrapper">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('nguyenphikhanh.net_template/assets/img/logo/loder.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    @include('blog.layouts.header')

    @yield('content')
    
    @include('blog.layouts.footer')

    <!-- Search model end -->
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/bootstrap.min.js')}}"></script>

    <!-- Slick-slider , Owl-Carousel ,slick-nav -->
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/slick.min.js')}}"></script>
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- One Page, Animated-HeadLin, Date Picker -->
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/animated.headline.js')}}"></script>
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/gijgo.min.js')}}"></script>

    <!-- Nice-select, sticky,Progress -->
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/jquery.barfiller.js')}}"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/hover-direction-snake.min.js')}}"></script>

    <!-- contact js -->
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/jquery.form.js')}}"></script>
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/mail-script.js')}}"></script>
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/jquery.ajaxchimp.min.js')}}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/plugins.js')}}"></script>
    <script src="{{asset('nguyenphikhanh.net_template/assets/js/main.js')}}"></script>


      <!-- Vendor JS Files -->
  <script src="{{asset('nguyenphikhanh.net_template/assets2/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('nguyenphikhanh.net_template/assets2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('nguyenphikhanh.net_template/assets2/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('nguyenphikhanh.net_template/assets2/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('nguyenphikhanh.net_template/assets2/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('nguyenphikhanh.net_template/assets2/vendor/counterup/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('nguyenphikhanh.net_template/assets2/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('nguyenphikhanh.net_template/assets2/vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{asset('nguyenphikhanh.net_template/assets2/vendor/venobox/venobox.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('nguyenphikhanh.net_template/assets2/js/main.js')}}"></script>
</body>

</html>