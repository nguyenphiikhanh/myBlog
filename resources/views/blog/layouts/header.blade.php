@php
    use App\User;

    $me = User::latest()->first();

@endphp

<header>
    <!-- Header Start -->
    <div class="header-area ">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper d-flex align-items-center justify-content-between">
                    <div class="header-left d-flex align-items-center">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{route('page.index')}}"><img src="{{asset('nguyenphikhanh.net_template/assets/img/logo/logo.png')}}" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{route('page.index')}}">Trang chủ</a></li>
                                    @foreach ($categories as $category)
                                    <li><a href="{{route('category.show',['slug' => $category->slug])}}">{{$category->name}}</a></li>
                                    @endforeach
                                    <li><a href="contact.html">Mình là ai?</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-right1 d-flex align-items-center">
                        <!-- Social -->
                        <div class="header-social d-none d-md-block">
                            <a href="{{$me->facebook_link}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="mailto:{{$me->email}}" target="_blank"><i class="fas fa-envelope"></i></a>
                            <a href="tel:{{$me->phone_number}}"><i class="fas fa-phone-square"></i></a>
                            <a href="{{$me->github_link}}" target="_blank"><i class="fab fa-github"></i></a>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>