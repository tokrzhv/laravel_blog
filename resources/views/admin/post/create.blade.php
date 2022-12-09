@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-cyan">Addition Posts</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.post.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-6">
                                <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{ old('title') }}">
                                @error('title')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="form-group col-6">
                                <textarea id="summernote" name="content">{{ old('content') }}</textarea>
                                @error('content')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="row">
                                <div class="form-group  col-4">
                                    <label>Select Category</label>
                                    <select  name="category_id" class="custom-select">
                                        <option selected disabled></option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? ' selected' : '' }}>{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>
                                <div class="form-group col-4">
                                    <label>Select multiple tags</label>
                                    <div class="select2-info">
                                        <select name="tag_ids[]" class="select2" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-info" style="width: 100%;">
                                            @foreach($tags as $tag)
                                            <option {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? ' selected' : "" }}
                                                    value="{{ $tag->id }}" {{$tag->id == old('tag_id') ? ' selected' : ''}}>
                                                {{ $tag->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('tag_ids')<div class="text-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-4">
                                    <label>Add Preview</label>
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
                                <input type="submit" class="btn btn-success" value="Create">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
