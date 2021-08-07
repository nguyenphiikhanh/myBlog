@extends('admin.dashboard.layouts.admin')

@section('title')
<title>Thêm bài viết mới</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('admin-nguyenphikhanh.net/posts/amsify.suggestags.css')}}">
<link rel="stylesheet" href="{{asset('admin-nguyenphikhanh.net/posts/selectize.bootstrap4.css')}}"/>
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
                    <h3 class="mb-0">Thêm bài viết</h3>
                </div>
                <div class="col-md-12">
                    <form action="" method="post">

                        <div class="col-md-7">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tiêu đề bài viết</label>
                                @error('name')
                                <div style="padding: 2px 5px;" class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <textarea name="name" placeholder="Tiêu đề bài viêt"
                                    class="form-control @error('name') is-invalid @enderror" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Ảnh Thumbnail</label>
                                @error('thumnail_image_path')
                                <div style="padding: 2px 5px;" class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input name="thumnail_image_path" type="file" class="form-control-file"
                                    id="exampleFormControlFile1">
                            </div>

                            <div class="form-group">
                                <label>Chọn danh mục</label>
                                <select class="form-control choose_cate" placeholder="--Chọn một danh mục--">
                                    <option value=""></option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-md-7">
                                    <label>Tags</label>
                                    <input type="text" name="tags[]" class="form-control write_tags" multiple="multiple">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nội dung bài viết</label>
                                @error('content')
                                <div style="padding: 2px 5px;" class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <textarea id="content_editor" name="content" placeholder="Nội dung..."
                                    class="form-control @error('content') is-invalid @enderror" rows="30"></textarea>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-outline-primary">Đăng bài</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{{asset('admin-nguyenphikhanh.net/posts/jquery.amsify.suggestags.js')}}"></script>
<script src="{{asset('admin-nguyenphikhanh.net/posts/selectize.min.js')}}"></script>
<script src="{{asset('admin-nguyenphikhanh.net/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('admin-nguyenphikhanh.net/posts/post.js')}}"></script>
<script>
    CKEDITOR.replace('content_editor');
</script>
@endsection