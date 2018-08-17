@extends('layouts.app')

@section('content')
<div class="container-fluid" id="homepage">
    <div class="row">
        @foreach ($articles as $article)
        <div class="col-md-4 mb-4">
            <a href="{{ url('/articles/'.$article->id) }}">
                <div class="article-wrapper" style="background: url({{ $article->cover }})">
                    <div class="article-description">
                        <h4 class="article-title">{{ $article->title }}</h4>
                        <div class="article-preview-hidden">
                            <p>{{ $article->excerpt }}</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
