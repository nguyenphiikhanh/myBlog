@extends('admin.dashboard.layouts.admin')

@section('title')
<title>Sửa danh mục bài viết</title>
@endsection



@section('content')

@include('admin.dashboard.partials.content-header',['key'=>'Sửa danh mục'])
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Sửa danh mục</h3>
                </div>

                <div class="col-md-5">
                    <form action="{{route('category.update',['id'=> $category->id])}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            @error('name')
                            <div style="padding: 2px 5px;" class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            value="{{$category->name}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection