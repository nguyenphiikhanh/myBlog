@extends('admin.dashboard.layouts.admin')

@section('title')
<title>Chỉnh sửa thông tin</title>
@endsection

@section('css')
<style>
  .avt_image{
    width: 100%;
    max-height: 130px;
    margin-top: 10px;
    object-fit: cover;
  }
</style>
@endsection

@section('content')
@include('admin.dashboard.partials.content-header',['key'=>'Chỉnh sửa thông tin'])
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url({{asset('admin-nguyenphikhanh.net/assets/img/brand/blue.png')}}); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Chào {{$user->name}} !</h1>
            <p class="text-white mt-0 mb-5">Xem và chỉnh sửa thông tin cá nhân của bạn.<br>Thông tin cá nhân của bạn sẽ được bảo mật
                và không hiển thị đối với thành viên khác trên Blog.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">

        <div class="col-xl-12 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Chỉnh sửa thông tin </h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="{{route('user.update',['id' =>$user->id])}}" method="post" enctype="multipart/form-data">
                  @csrf
                <h6 class="heading-small text-muted mb-4">Thông tin của bạn</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" disabled class="form-control" placeholder="Username" value="{{$user->username}}">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Email</label>
                        <input name="email" type="email" class="form-control"
                        value="{{$user->email}}"
                        placeholder="Email">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Họ tên (hiển thị với mọi người)</label>
                        <input type="text" name="name" class="form-control" placeholder="Họ và tên" value="{{$user->name}}">
                      </div>
                    </div>
                  </div>


                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Thông tin liên hệ (có thể để trống)</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Địa chỉ</label>
                        <input class="form-control" name="address" placeholder="Địa chỉ" value="{{$user->address}}" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Số điện thoại</label>
                        <input type="tel" name="phone_number"
                        class="form-control" placeholder="Số điện thoại" value="{{$user->phone_number}}">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Facebook link</label>
                        <input type="text" name="facebook_link"
                        class="form-control" placeholder="Liên kết đến Facebook profile" value="{{$user->facebook_link}}">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Github link</label>
                        <input type="text" name="github_link"
                        class="form-control" placeholder="Liên kết đến Github profile" value="{{$user->github_link}}">
                      </div>
                    </div>
                  </div>
                  
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Thông tin giới thiệu</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Giới thiệu (hiển thị cuối bài viết)</label>
                    <textarea name="about"
                     rows="4" class="form-control" placeholder="Giới thiệu về bạn">{{$user->about}}</textarea>
                  </div>
                </div>
                <div class="row d-flex justify-content-center">
                    
                    <button class="btn btn-primary">Lưu thông tin</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('js')

@endsection