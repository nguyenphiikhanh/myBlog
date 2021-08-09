@extends('admin.dashboard.layouts.admin')

@section('title')
<title>Thêm danh mục bài viết</title>
@endsection

@section('title')
@endsection

@section('content')

@include('admin.dashboard.partials.content-header',['key'=>'Thêm tag mới'])
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Thêm tag mới</h3>
                </div>

                <div class="col-md-5">
                    <form action="{{route('tags.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tag</label>
                            @error('name')
                            <div style="padding: 2px 5px;" class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input name="name" type="text" 
                            class="form-control @error('name') is-invalid @enderror" placeholder="Nhập tag">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nội dung tag</label>

                            <textarea name="tag_content" rows="3" placeholder="Nhập mô tả tag"
                            class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm tag</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection