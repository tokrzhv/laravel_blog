@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-cyan">Update <b class="text-green">{{ $post->title }}</b></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.post.update', $post->id ) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group col-6">
                                <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{ $post->title }}">
                                @error('title')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="form-group col-6">
                                <textarea id="summernote" name="content">{{ $post->content }}</textarea>
                                @error('content')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="row">
                                <div class="form-group  col-4">
                                    <label>Select Category</label>
                                    <select  name="category_id" class="custom-select">
                                        <option selected disabled></option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? ' selected' : '' }}>{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>
                                <div class="form-group col-4">
                                    <label>Select multiple tags</label>
                                    <div class="select2-info">
                                        <select name="tag_ids[]" class="select2" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-info" style="width: 100%;">
                                            @foreach($tags as $tag)
                                                <option {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? ' selected' : "" }}
                                                        value="{{ $tag->id }}" {{$tag->id == $post->tags->pluck('id')->toArray() ? ' selected' : ''}}>{{ $tag->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('tag_ids')<div class="text-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-4">
                                    <label>Add Preview</label>
                                    <div class="text-center">
                                        <img src="{{ Storage::url($post->preview_image) }}" alt="preview_image" class="w-75 h-50 mb-2">
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="preview_image">
                                            <label class="custom-file-label" >Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    @error('preview_image')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>
                                <div class="form-group col-4">
                                    <label>Add Main Image</label>
                                    <div class="text-center">
                                        <img src="{{ Storage::url($post->main_image) }}" alt="main_image" class= "w-75 mb-2">
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="main_image">
                                            <label class="custom-file-label" >Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    @error('main_image')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
