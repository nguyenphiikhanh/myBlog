@extends('admin.dashboard.layouts.admin')

@section('title')
<title>Thêm thành viên</title>
@endsection

@section('title')
@endsection

@section('content')

@include('admin.dashboard.partials.content-header',['key'=>'Thêm thành viên mới'])
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Thêm thành viên</h3>
                </div>

                <div class="col-md-5">
                    <form action="{{route('user.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            @error('username')
                            <div style="padding: 2px 5px;" class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input name="username" type="text" value="{{ old('username')}}"
                            class="form-control @error('username') is-invalid @enderror" placeholder="Tên đăng nhập">
                        </div>

                        <div class="form-group">
                            <label>Mật khẩu</label>
                            @error('password')
                            <div style="padding: 2px 5px;" class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input name="password" type="password" 
                            class="form-control @error('password') is-invalid @enderror" placeholder="Mật khẩu">

                        </div>

                        <div class="form-group">
                            <label >Họ tên</label>
                            @error('name')
                            <div style="padding: 2px 5px;" class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input name="name" type="text" value="{{ old('name')}}"
                            class="form-control @error('name') is-invalid @enderror" placeholder="Họ tên">

                        </div>

                        <div class="form-group">
                            <label >Địa chỉ email</label>
                            @error('email')
                            <div style="padding: 2px 5px;" class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input name="email" type="email" value="{{ old('email')}}"
                            class="form-control @error('email') is-invalid @enderror" placeholder="Địa chỉ email">

                        </div>
                        <button type="submit" class="btn btn-primary">Đăng ký</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection