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
                <form class="card" method="POST" action="/admin/articles/{{ $article->id }}">
                    @method('PATCH')
                    @csrf
                    <div class="card-header card-header-primary mb-5">
                        <div class="card-category">
                            <div class="form-group pb-4">
                                <label for="status" class="text-dark bg-warning rounded px-2 py-1">Status</label>                            
                                <select name="status" class="form-control text-white" id="status">
                                    <option value="1" class="text-dark" {{ $article->published === 1 ? 'selected' : null }}>Published</option>
                                    <option value="0" class="text-dark" {{ $article->published === 0 ? 'selected' : null }}>Draft</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group pb-4">
                                        <label for="keywords" class="text-dark bg-warning rounded px-2 py-1">Keywords</label><br>
                                        <textarea name="keywords" class="form-control text-white" id="keywords" rows="5">{{ $article->keywords }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pb-4">
                                        <label for="meta_desc" class="text-dark bg-warning rounded px-2 py-1">Meta Description</label><br>
                                        <textarea name="meta_desc" class="form-control text-white" id="meta_desc" rows="5">{{ $article->meta_desc }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header card-header-primary py-4">
                        <div class="card-title">
                            <div class="form-group pb-4">
                                <label for="exampleInput1" class="text-dark bg-warning rounded px-2 py-1">Title</label><br>
                                <input name="title" type="text" class="form-control text-white py-4" id="exampleInput1" value="{{ $article->title }}">
                            </div>
                            <div class="form-group pb-4">
                                <label for="excerpt" class="text-dark bg-warning rounded px-2 py-1">Excerpt</label><br>
                                <textarea name="excerpt" class="form-control text-white pt-4" id="excerpt" rows="3">{{ $article->excerpt }}</textarea>
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
                                                <input name="category" class="form-check-input" type="checkbox" value="{{ $category->id }}" {{ $category->id === $article->category_id ? "checked" : null }} >
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
                            <textarea name="content" id="tinymce-editor" cols="30" rows="10">
                                {{ $article->content }}
                            </textarea>
                        </div>
                    </div>
                    <div class="row pb-4">
                        <div class="col-md-2 ml-auto">
                            <button type="submit" class="btn btn-primary">
                                <i class="material-icons">update</i>
                                update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection