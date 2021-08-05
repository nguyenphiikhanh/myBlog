@extends('admin.layouts.admin')

@section('title')
<title>Đăng nhập để quản lý nội dung của bạn</title>
@endsection

@section('content')
<!-- Navbar -->
<nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="dashboard.html">
            <img src="{{asset('admin-nguyenphikhanh.net/assets/img/brand/loder.png')}}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
            aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="dashboard.html">
                            <img src="{{asset('admin-nguyenphikhanh.net/assets/img/brand/blue.png')}}">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <span class="nav-link-inner--text">Quay trở lại Blog</span>
                    </a>
                </li>


            </ul>
            <hr class="d-lg-none" />
            <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank"
                        data-toggle="tooltip" data-original-title="Mình ở trên Facebook">
                        <i class="fab fa-facebook-square"></i>
                        <span class="nav-link-inner--text d-lg-none">Facebook</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial" target="_blank"
                        data-toggle="tooltip" data-original-title="Mình ở trên Github">
                        <i class="fab fa-github"></i>
                        <span class="nav-link-inner--text d-lg-none">Github</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- Main content -->
<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <h1 class="text-white">Chào mừng bạn!</h1>
                        <p class="text-lead text-white">Đăng nhập để quản lý nội dung của bạn trên Blog</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-muted text-center mt-2 mb-3"><small>Đăng nhập bằng</small></div>
                        <div class="btn-wrapper text-center">
                            <a href="#" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon"><img
                                        src="{{asset('admin-nguyenphikhanh.net/assets/img/icons/common/github.svg')}}"></span>
                                <span class="btn-inner--text">Github</span>
                            </a>
                            <a href="#" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon"><img
                                        src="{{asset('admin-nguyenphikhanh.net/assets/img/icons/common/google.svg')}}"></span>
                                <span class="btn-inner--text">Google</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>Hoặc sử dụng tài khoản của bạn</small>
                        </div>
                        <form action="{{route('to_login')}}" method="post">
                            @csrf
                            @error('username')
                            <div class="alert alert-danger">{{ $message }}
                    </div>
                    @enderror

                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        Sai tên đăng nhập hoặc mật khẩu
                    </div>
                    @endif --}}

                    <div class="form-group mb-3">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                            </div>
                            <input class="form-control @error('username') is-invalid @enderror" name="username"
                                placeholder="Tên đăng nhập" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input class="form-control @error('password') is-invalid @enderror" name="password"
                                placeholder="Mật khẩu" type="password">
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary my-4">Đăng nhập</button>
                    </div>
                    <div class="text-center">
                        <span class="text-muted text-center">Nếu bạn quên mật khẩu,hoặc chưa có tài khoản vui
                            lòng<a href="https://www.facebook.com/nguyenphiikhanh" class="font-weight-bold ml-1"
                                target="_blank">liên hệ với mình</a></span>
                    </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<!-- Footer -->
<footer class="py-5" id="footer-main">
    <div class="container">
        <div class="row align-items-center justify-content-xl-between">
            <div class="col-md-2"></div>
            <div class="col-md-7 copyright text-center text-xl-left text-muted">
                &copy; 2021 <a href="https://www.facebook.com/nguyenphiikhanh" class="font-weight-bold ml-1"
                    target="_blank">Nguyễn Phi Khánh</a>
            </div>
        </div>

    </div>
    </div>
</footer>

@endsection

</html>