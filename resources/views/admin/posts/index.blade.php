@extends('admin.dashboard.layouts.admin')

@section('title')
<title>Danh sách bài viết</title>
@endsection

@section('css')
@endsection

@section('content')

@include('admin.dashboard.partials.content-header',['key'=>'Chỉnh sửa thông tin'])
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Danh sách bài viết trên blog</h3>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                            
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="name">Tên bài viết</th>
                                <th scope="col" class="sort" data-sort="name">Danh mục</th>
                                <th scope="col" class="sort" data-sort="budget">Lượt xem</th>
                                <th scope="col" class="sort" data-sort="budget">Tác giả</th>
                                <th scope="col">Tuỳ chọn</th>
                            </tr>
                        </thead>
                        @foreach ($posts as $post)
                        <tbody class="list">

                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">P{{$post->id}}T</span>
                                        </div>
                                    </div>
                                </th>

                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm"><strong>{{$post->name}}</strong></span>
                                        </div>
                                    </div>
                                </th>

                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$post->category->name}}</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                    {{$post->view_count}} lượt xem
                                </td>

                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$post->user->name}}</span>
                                        </div>
                                    </div>
                                </th>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Xem bài viêt</a>
                                            <a class="dropdown-item" href="{{route('posts.edit',['id'=>$post->id])}}">Sửa bài viết</a>
                                            <a class="dropdown-item action_delete" data-url="{{route('posts.delete',['id'=>$post->id])}}" href="">Xoá bài viết</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                </td>
                            </tr>

                        </tbody>
                        @endforeach
                    </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4">
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{asset('vendor/sweetAlert/sweetalert2@11.js')}}"></script>
    <script src="{{asset('JsModel/deletePost.js')}}"></script>
@endsection