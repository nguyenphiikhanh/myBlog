@extends('blog.layouts.blog')


@section('title')
<title>Nội dung bài viết</title>
@endsection

@section('content')
    <main>
        @include('blog.layouts.contenn-header',['name' => 'Bài viết'])
        <!-- Hero Area End-->
        <!--? Blog Area Start-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                  <div class="col-lg-8 posts-list">
                    <div class="single-post">
                     <div class="feature-img">
                      <img class="img-fluid" src="{{asset('nguyenphikhanh.net_template/assets/img/blog/single_blog_1.png')}}" alt="">
                    </div>
                    <div class="blog_details">
                      <h2 style="color: #2d2d2d;">Second divided from form fish beast made every of seas
                       all gathered us saying he our
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                      <li><a href="javascript:void(0)"><i class="fa fa-list"></i>Danh mục</a></li>
                      <li><a href="javascript:void(0)"><i class="fa fa-clock-o"></i>Thời gian</a></li>
                     </ul>
                     <p class="excert">
                       MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                       should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                       fraction of the camp price. However, who has the willpower
                     </p>
                     <p>
                       MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                       should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                       fraction of the camp price. However, who has the willpower to actually sit through a
                       self-imposed MCSE training. who has the willpower to actually
                     </p>
                     <div class="quote-wrapper">
                       <div class="quotes">
                        MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                        should have to spend money on boot camp when you can get the MCSE study materials yourself at
                        a fraction of the camp price. However, who has the willpower to actually sit through a
                        self-imposed MCSE training.
                      </div>
                    </div>
                    <p>
                     MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                     should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                     fraction of the camp price. However, who has the willpower
                   </p>
                   <p>
                     MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                     should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                     fraction of the camp price. However, who has the willpower to actually sit through a
                     self-imposed MCSE training. who has the willpower to actually
                   </p>
                 </div>
                </div>


                <div style="margin: 15px;" class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                    <div class="col-md-12">
                      <p class="like-info"><span class="align-middle"><i class="fa fa-share"></i></span><a style="color: #102df8" href="#"> Chia sẻ bài viết này</a> nếu bạn thấy nó hữu ích ♥</p>
                    </div>
                  </div>

                </div>

                <div style="margin-top: 30px;" class="blog-author">
                 <div class="media align-items-center">
                  <img src="{{asset('nguyenphikhanh.net_template/assets/img/blog/author.png')}}" alt="">
                  <div class="media-body ml-3">
                   <a href="#">
                    <h1>Harvard milan - Tác giả</h1>
                  </a>
                  <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                  our dominion twon Second divided from</p>
                </div>
                </div>
                </div>
                <div class="comments-area">
                 <h4>Bạn muốn góp ý về bài viết của mình, hãy để lại bình luận phía dưới.</h4>
                 <div class="fb-comments" data-href="http://localhost:8000/xem-bai-viet" data-width="560" data-numposts="3"></div>
                </div>

                </div>
                    @include('blog.layouts.detail-sidebar')
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
    </main>

@endsection

@section('js')
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0" nonce="BzaL6S9Y"></script>
@endsection

