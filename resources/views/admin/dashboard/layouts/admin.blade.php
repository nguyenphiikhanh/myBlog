<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Quản lý nội dung trên Blog">
    <meta name="author" content="Nguyen Phi Khanh">

    @yield('title')

    <!-- Favicon -->
    <link rel="icon" href="{{asset('admin-nguyenphikhanh.net/assets/img/brand/loder.png')}}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('admin-nguyenphikhanh.net/assets/vendor/nucleo/css/nucleo.css')}}"
        type="text/css">
    <link rel="stylesheet"
        href="{{asset('admin-nguyenphikhanh.net/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}"
        type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{asset('admin-nguyenphikhanh.net/assets/css/argon.css')}}?v=1.2.0" type="text/css">

    @yield('css')
</head>

<body>

    @include('admin.dashboard.partials.sidenav')

    <!-- Main content -->
    <div class="main-content" id="panel">

        @include('admin.dashboard.partials.topnav')

        @yield('content')

        @include('admin.dashboard.partials.footer')
        
    </div>

    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{asset('admin-nguyenphikhanh.net/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('admin-nguyenphikhanh.net/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}">
    </script>
    <script src="{{asset('admin-nguyenphikhanh.net/assets/vendor/js-cookie/js.cookie.js')}}"></script>
    <script src="{{asset('admin-nguyenphikhanh.net/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('admin-nguyenphikhanh.net/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}">
    </script>
    <!-- Argon JS -->
    <script src="{{asset('admin-nguyenphikhanh.net/assets/js/argon.js')}}?v=1.2.0"></script>

    @yield('js')
</body>

</html>