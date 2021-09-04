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
                      <li><a href="#"><i class="fa fa-list"></i>Danh mục</a></li>
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

                <div class="blog-author">
                 <div class="media align-items-center">
                  <img src="{{asset('nguyenphikhanh.net_template/assets/img/blog/author.png')}}" alt="">
                  <div class="media-body">
                   <a href="#">
                    <h4>Author : Harvard milan</h4>
                  </a>
                  <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                  our dominion twon Second divided from</p>
                </div>
                </div>
                </div>
                <div class="comments-area">
                 <h4>05 Comments</h4>
                 <div class="comment-list">
                  <div class="single-comment justify-content-between d-flex">
                   <div class="user justify-content-between d-flex">
                    <div class="thumb">
                     <img src="{{asset('nguyenphikhanh.net_template/assets/img/blog/comment_1.png')}}" alt="">
                   </div>
                   <div class="desc">
                     <p class="comment">
                      Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                      Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                    </p>
                    <div class="d-flex justify-content-between">
                      <div class="d-flex align-items-center">
                       <h5>
                        <a href="#">Emilly Blunt</a>
                      </h5>
                      <p class="date">December 4, 2017 at 3:12 pm </p>
                    </div>
                    <div class="reply-btn">
                     <a href="#" class="btn-reply text-uppercase">reply</a>
                   </div>
                 </div>
                </div>
                </div>
                </div>
                </div>
                <div class="comment-list">
                  <div class="single-comment justify-content-between d-flex">
                   <div class="user justify-content-between d-flex">
                    <div class="thumb">
                     <img src="{{asset('nguyenphikhanh.net_template/assets/img/blog/comment_2.png')}}" alt="">
                   </div>
                   <div class="desc">
                     <p class="comment">
                      Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                      Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                    </p>
                    <div class="d-flex justify-content-between">
                      <div class="d-flex align-items-center">
                       <h5>
                        <a href="#">Emilly Blunt</a>
                      </h5>
                      <p class="date">December 4, 2017 at 3:12 pm </p>
                    </div>
                    <div class="reply-btn">
                     <a href="#" class="btn-reply text-uppercase">reply</a>
                   </div>
                 </div>
                </div>
                </div>
                </div>
                </div>
                <div class="comment-list">
                  <div class="single-comment justify-content-between d-flex">
                   <div class="user justify-content-between d-flex">
                    <div class="thumb">
                     <img src="{{asset('nguyenphikhanh.net_template/assets/img/blog/comment_3.png')}}" alt="">
                   </div>
                   <div class="desc">
                     <p class="comment">
                      Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                      Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                    </p>
                    <div class="d-flex justify-content-between">
                      <div class="d-flex align-items-center">
                       <h5>
                        <a href="#">Emilly Blunt</a>
                      </h5>
                      <p class="date">December 4, 2017 at 3:12 pm </p>
                    </div>
                    <div class="reply-btn">
                     <a href="#" class="btn-reply text-uppercase">reply</a>
                   </div>
                 </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="comment-form">
                 <h4>Leave a Reply</h4>
                 <form class="form-contact comment_form" action="#" id="commentForm">
                  <div class="row">
                   <div class="col-12">
                    <div class="form-group">
                     <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                     placeholder="Write Comment"></textarea>
                   </div>
                 </div>
                 <div class="col-sm-6">
                  <div class="form-group">
                   <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                 </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                   <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                 </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                   <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                 </div>
                </div>
                </div>
                <div class="form-group">
                 <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post Comment</button>
                </div>
                </form>
                </div>
                </div>
                    @include('blog.layouts.detail-sidebar')
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
    </main>

@endsection

