@extends('admin.dashboard.layouts.admin')

@section('title')
<title>Thêm bài viết mới</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('admin-nguyenphikhanh.net/posts/selectize.bootstrap4.css')}}" />
<link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet"
    type="text/css" />
@endsection

@section('content')

@include('admin.dashboard.partials.content-header',['key'=>'Thêm bài viết mới'])
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
                    <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">

                        <div class="col-md-7">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tiêu đề bài viết</label>
                                @error('name')
                                <div style="padding: 2px 5px;" class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <textarea name="name" placeholder="Tiêu đề bài viêt"
                                    class="form-control @error('name') is-invalid @enderror" rows="3">{{old('name')}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Ảnh Thumbnail</label>
                                @error('thumnail_image_path')
                                <div style="padding: 2px 5px;" class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input name="thumnail_image_path" type="file" class="form-control-file">
                            </div>

                            <div class="form-group">
                                <label>Chọn danh mục</label>
                                @error('category_id')
                                <div style="padding: 2px 5px;" class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <select name="category_id" class="form-control @error('category_id') is-invalid @enderror choose_cate"
                                    placeholder="--Chọn một danh mục--">
                                    <option value=""></option>
                                    @foreach ($categories as $category)
                                    <option {{old('category_id')?'selected':''}} value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
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
                                        <option {{old('tags')?'selected':''}} value="{{$tag->id}}">{{$tag->name}}</option>
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
                                    rows="30">{{old('content')}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Giới thiệu (hiển thị khi người xem chưa xem chi tiết)</label>
                                @error('description')
                                <div style="padding: 2px 5px;" class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <textarea name="description" placeholder="Nhập mô tả"
                                    class="form-control @error('description') is-invalid @enderror"
                                    rows="5"></textarea>
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
<script src="{{asset('admin-nguyenphikhanh.net/posts/selectize.min.js')}}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js">
</script>
<script src="{{asset('admin-nguyenphikhanh.net/posts/post.js')}}"></script>
@endsection