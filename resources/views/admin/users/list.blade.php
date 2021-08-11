@extends('admin.dashboard.layouts.admin')

@section('title')
<title>Danh sách thành viên</title>
@endsection

@section('content')

@include('admin.dashboard.partials.content-header',['key'=>'Danh sách thành viên trên blog'])
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Danh sách thành viên</h3>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="name">Username</th>
                                <th scope="col" class="sort" data-sort="name">Tên</th>
                                <th scope="col" class="sort" data-sort="name">Vai trò</th>
                                <th scope="col" class="sort" data-sort="budget">Số bài viết trên blog</th>
                                <th scope="col">Tuỳ chọn</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">U#0{{$user->id}}</span>
                                        </div>
                                    </div>
                                </th>

                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$user->username}}</span>
                                        </div>
                                    </div>
                                </th>

                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$user->name}}</span>
                                        </div>
                                    </div>
                                </th>

                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$user->role_on_blog=="admin"?"Admin":"Thành viên"}}</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                    {{$user->posts()->count()}} bài viết
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            @if ($user->role_on_blog == "content_writer")
                                            <a class="dropdown-item" href="">Set quyền Admin</a>
                                            @elseif ($user->role_on_blog == "admin")
                                            <a class="dropdown-item" href="">Thu hồi quyền</a>
                                            @endif

                                            <a class="dropdown-item" href="">Đặt lại mật khẩu</a>
                                            <a class="dropdown-item action_delete"
                                            data-url=""
                                            href="">Xoá thành viên</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4">
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{asset('vendor/sweetAlert/sweetalert2@11.js')}}"></script>
    <script src="{{asset('JsModel/deleteTag.js')}}"></script>
@endsection