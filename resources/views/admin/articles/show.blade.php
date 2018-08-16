@extends('admin.templates.master')
@section('content')
    <div class="main-panel">

        @include('admin.templates.layouts.articles-sidebar')
        @include('admin.templates.layouts.navbar')
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <button class="btn btn-danger mt-2 float-right">
                            <i class="material-icons">delete</i>
                            Delete
                        </button>
                        <a href={{ url('admin/articles/'.$articles->id).'/edit' }} class="btn btn-warning mt-2 float-right">
                            <i class="material-icons">edit</i>
                            Edit
                        </a>
                        <h3 class="card-title">{{ $articles->title }}</h3>
                        <p class="card-category">Tags: {{ $articles->categories->first()->name }}</p>
                    </div>
                    <div class="card-body">
                        <div id="typography">
                            {!! $articles->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection