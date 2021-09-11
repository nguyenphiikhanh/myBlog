@extends('admin.dashboard.layouts.admin')

@section('title')
<title>Danh mục bài viết</title>
@endsection

@section('content')

@include('admin.dashboard.partials.content-header',['key'=>'Danh mục bài viết'])
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Danh mục bài viết</h3>
                </div>
                <div class="col-md-12">
                    <a class="btn btn-outline-primary float-right" href="{{route('category.create')}}"
                        role="button">Thêm danh mục</a>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="name">Tên danh mục</th>
                                <th scope="col" class="sort" data-sort="budget">Số bài viết</th>
                                <th scope="col">Tuỳ chọn</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($categories as $category)
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">PK_M{{$category->id}}</span>
                                        </div>
                                    </div>
                                </th>

                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$category->name}}</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                    {{$category->posts->count()}} bài viết
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="{{route('category.edit',['id' => $category->id])}}">Sửa danh mục</a>
                                            <a class="dropdown-item action_delete"
                                            data-url="{{route('category.delete',['id' => $category->id])}}"
                                            href="">Xoá danh mục</a>
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
                    {{$categories->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{asset('vendor/sweetAlert/sweetalert2@11.js')}}"></script>
    <script src="{{asset('JsModel/deleteCate.js')}}"></script>
@endsection