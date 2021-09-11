@extends('blog.layouts.blog')


@section('title')
<title>{{$post->name}}</title>
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
                      <h2 style="color: #2d2d2d;">{{$post->name}}
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                      <li><a href="javascript:void(0)"><i class="fa fa-list"></i>{{$post->category->name}}</a></li>
                      <li><a href="javascript:void(0)"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}}</a></li>
                     </ul>
                     <div class="col-md-12">
                       {!!$post->content!!}
                     </div>
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
                  <div class="col-xs-3">
                    <img width="100" height="100" src="{{$post->user->avatar_image_path}}" class="rounded-circle">
                </div>
                  <div class="media-body ml-4">
                   <a href="#">
                    <h1>{{$post->user->name}} - Tác giả</h1>
                  </a>
                  <p>{{$post->user->about}}</p>
                </div>
                </div>
                </div>
                <div class="comments-area">
                 <h4>Bạn muốn góp ý về bài viết của mình, hãy để lại bình luận phía dưới.</h4>
                 <div class="fb-comments" data-href="{{route('post.show',['slug' => $post->slug])}}" data-width="" data-numposts="5"></div>
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
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0&appId=375223127380409&autoLogAppEvents=1" 
nonce="pj5UUEZB"></script>
@endsection

