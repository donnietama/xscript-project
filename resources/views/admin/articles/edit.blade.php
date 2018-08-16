@extends('admin.templates.master')
@section('content')
    <div class="main-panel">

        @include('admin.templates.layouts.articles-sidebar')
        @include('admin.templates.layouts.navbar')
        <div class="content">
            <div class="container-fluid">
                <form class="card" method="POST">
                    <div class="card-header card-header-primary py-4">
                        <div class="card-title">
                            <div class="form-group pb-4">
                                <label for="exampleInput1" class="text-dark bg-warning rounded px-2 py-1">Title</label>
                                <input type="text" class="form-control text-white py-4" id="exampleInput1" value="{{ $article->title }}">
                            </div>
                            <div class="form-group pb-4">
                                <label for="excerpt" class="text-dark bg-warning rounded px-2 py-1">Excerpt</label>
                                <textarea class="form-control text-white pt-4" id="excerpt" rows="3">{{ $article->excerpt }}</textarea>
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
                                                <input class="form-check-input" type="checkbox" value="{{ $category->id }}" {{ $category->id === $article->category_id ? "checked" : null }} >
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
                </form>
            </div>
        </div>
    </div>
@endsection