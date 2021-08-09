@extends('admin.dashboard.layouts.admin')

@section('title')
<title>Sửa bài viết</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('admin-nguyenphikhanh.net/posts/selectize.bootstrap4.css')}}" />
<link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet"
    type="text/css" />
    <style>
        .image_post{
            width: 100%;
            margin-top:15px;
            height: 130px;
            object-fit: cover; 
        }
    </style>
@endsection

@section('content')

@include('admin.dashboard.partials.content-header',['key'=>'Sửa bài viết'])
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Sửa bài viết</h3>
                </div>
                <div class="col-md-12">
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="col-md-7">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tiêu đề bài viết</label>
                                @error('name')
                                <div style="padding: 2px 5px;" class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <textarea name="name" placeholder="Tiêu đề bài viêt"
                                    class="form-control @error('name') is-invalid @enderror" rows="3">{{$post->name}}</textarea>
                                </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Ảnh Thumbnail</label>
                                @error('thumnail_image_path')
                                <div style="padding: 2px 5px;" class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input name="thumnail_image_path" type="file" class="form-control-file @error('thumnail_image_path') is-invalid @enderror">

                                <div class="col-md-3">
                                    <div class="row">
                                        <img class="image_post" src="{{$post->thumnail_image_path}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Chọn danh mục</label>
                                <select name="category_id" class="form-control @error('category_id') is-invalid @enderror choose_cate"
                                    placeholder="--Chọn một danh mục--">
                                    <option value=""></option>
                                    @foreach ($categories as $category)
                                    <option {{$post_category->id == $category->id ?'selected' :''}}
                                     value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>

                                @error('category_id')
                                <div style="padding: 2px 5px;" class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-md-7">
                                    <label>Tags</label>
                                    <select name="tags[]" placeholder="thêm tags" class="form-control tags_init"
                                        multiple="multiple">
                                        <option value=""></option>

                                        @foreach ($tags as $tag)
                                        <option {{$post_tags->contains('id', $tag->id) ?'selected' :''}} value="{{$tag->id}}">{{$tag->name}}</option>
                                        @endforeach


                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nội dung bài viết</label>
                                @error('content')
                                <div style="padding: 2px 5px;" class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <textarea id="content_editor" name="content" placeholder="Nội dung..."
                                    class="form-control @error('content') is-invalid @enderror content-editor"
                                    rows="30">{{$post->content}}</textarea>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-outline-primary">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{{asset('admin-nguyenphikhanh.net/posts/selectize.min.js')}}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js">
</script>
<script src="{{asset('admin-nguyenphikhanh.net/posts/post.js')}}"></script>
@endsection