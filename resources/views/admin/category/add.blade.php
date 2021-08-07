@extends('admin.dashboard.layouts.admin')

@section('title')
<title>Thêm danh mục bài viết</title>
@endsection

@section('title')
@endsection

@section('content')

@include('admin.dashboard.partials.content-header',['key'=>'Thêm danh mục'])
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Thêm danh mục</h3>
                </div>

                <div class="col-md-5">
                    <form action="{{route('category.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            @error('name')
                            <div style="padding: 2px 5px;" class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nhập tên danh mục">
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection