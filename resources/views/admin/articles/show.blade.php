@extends('admin.templates.master')
@section('content')
    <div class="main-panel">

        @include('admin.templates.layouts.articles-sidebar')
        @include('admin.templates.layouts.navbar')
        <div class="content">
            <div class="container-fluid">
                <div class="pb-2">
                    <a href="{{ route('admin.articles.index') }}" class="btn btn-info">Back to articles</a>
                    <a href={{ url("admin/articles/".$articles->id).'/edit' }} class="btn btn-warning mt-2 float-right">
                        <i class="material-icons">edit</i>
                        Edit
                    </a>
                    <button class="btn btn-danger mt-2 float-right">
                        <i class="material-icons">delete</i>
                        Delete
                    </button>
                </div>
                @if (!empty($articles->cover))
                <div class="article-cover" style="background: url({{ $articles->cover }});"></div>
                @else
                <figure class="not-found">
                    <i class="material-icons">sentiment_very_dissatisfied</i>
                    <h3>Oops... We could not find any cover for this article.</h3>
                    <a href={{ url("admin/articles/".$articles->id). "/edit" }} class="btn btn-info">Add now!</a>
                </figure>
                @endif
                <div class="card">
                    <div class="card-header card-header-info">
                        <h3 class="card-title">{{ $articles->title }}</h3>
                        <p class="card-category">Tags: {{ $articles->categories->first()->name }}</p>
                    </div>
                    <div class="card-body p-5">
                        <div id="typography">
                            {!! $articles->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection