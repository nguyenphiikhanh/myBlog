@extends('admin.dashboard.layouts.admin')

@section('title')
<title>Danh sách bài viết</title>
@endsection

@section('content')

@include('admin.dashboard.partials.content-header',['key'=>'Danh sách bài viết'])
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
                                <th scope="col">Tuỳ chọn</th>
                            </tr>
                        </thead>
                        <tbody class="list">

                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">PK_Mss</span>
                                        </div>
                                    </div>
                                </th>

                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">Tên bài viêt</span>
                                        </div>
                                    </div>
                                </th>

                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">danh mục</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                    2500 lượt xem
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Xem bài viêt</a>
                                            <a class="dropdown-item" href="">Sửa</a>
                                            <a class="dropdown-item" href="#">Xoá bài viết</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4">
                    {{-- {{$categories->links()}} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection