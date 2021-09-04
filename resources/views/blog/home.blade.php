@extends('blog.layouts.blog')


@section('title')
<title>Nguyễn Phi Khánh-Programming and Life</title>
@endsection

@section('content')
@include('blog.layouts.intro')
    <main>
        @include('blog.layouts.contenn-header',['name' => 'Trang chủ'])
        <!-- Hero Area End-->
        <!--? Blog Area Start-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            @for ($i = 1;$i <5;$i++)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{asset('nguyenphikhanh.net_template/assets/img/blog/single_blog_1.png')}}" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>15</h3>
                                        <p>Jan</p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="blog_details.html">
                                        <h2 class="blog-head" style="color: #2d2d2d;">Test bài viết tittle</h2>
                                    </a>
                                    <p>That dominion stars lights dominion divide years for fourth have don't stars is
                                        that
                                        he earth it first without heaven in place seed it second morning saying.</p>
                                    <ul class="blog-info-link">
                                        <li><a href="javascript:void(0)"><i class="fa fa-list"></i>Danh mục</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-clock-o"></i>Thời gian</a></li>
                                    </ul>
                                </div>
                            </article>
                            @endfor


                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    @include('blog.layouts.sidebar')
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
    </main>

@endsection

