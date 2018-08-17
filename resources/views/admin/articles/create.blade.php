@extends('admin.templates.master')
@section('content')
    <div class="main-panel">

        @include('admin.templates.layouts.articles-sidebar')
        @include('admin.templates.layouts.navbar')
        <div class="content">
            <div class="container-fluid">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="card" method="POST" action="{{ route('admin.articles.store') }}" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="card-header card-header-info mb-5">
                        <div class="card-category">
                            <h3 class="text-white">Article & SEO Configuration</h3>
                            <div class="input-group text-white">
                                <span class="input-group-btn">
                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-warning">
                                        <i class="fa fa-picture-o"></i>&nbsp;&nbsp;add cover
                                    </a>
                                </span>
                                <input name="cover" id="thumbnail" class="form-control text-white" type="text">
                            </div>
                            <img id="holder" style="margin-top:15px;max-height:100px;">
                            <div class="form-group">
                                <label for="published" class="bmd-label-floating text-white">Status</label>                            
                                <select name="published" class="form-control text-white" id="published">
                                    <option value="1" class="text-dark" selected>Published</option>
                                    <option value="0" class="text-dark">Draft</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="keywords" class="bmd-label-floating text-white">Keywords</label>
                                        <textarea name="keywords" class="form-control text-white" id="keywords" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="meta_desc" class="bmd-label-floating text-white">Meta Description</label>
                                        <textarea name="meta_desc" class="form-control text-white" id="meta_desc" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header card-header-info">
                        <div class="card-title">
                            <h3 class="text-white">Article Content</h3>
                            <div class="form-group">
                                <label for="exampleInput1" class="bmd-label-floating text-white">Title</label>
                                <input name="title" type="text" class="form-control text-white" id="exampleInput1">
                            </div>
                            <div class="form-group">
                                <label for="excerpt" class="bmd-label-floating text-white">Excerpt</label>
                                <textarea name="excerpt" class="form-control text-white" id="excerpt" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="card-category">
                            <div class="text-white mr-1">Tags :</div>
                            <div class="form-check form-check-inline">
                                <div class="container px-5">
                                    <div class="row">
                                        @foreach ($listCategory as $key => $category)
                                        <div class="col-md-4 pb-3">
                                            <label class="form-check-label text-white">
                                                <input name="category_id" class="form-check-input" type="checkbox" value="{{ $category->id }}">
                                                {{ $category->name }}
                                                <span class="form-check-sign">
                                                    <span class="check border-white"></span>
                                                </span>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="typography">
                            <textarea name="content" id="tinymce-editor" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="row pb-4">
                        <div class="col-md-2 ml-auto">
                            <button type="submit" class="btn btn-primary">
                                submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection