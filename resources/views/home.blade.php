@extends('layouts.app')

@section('content')
<div class="container-fluid" id="homepage">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4 mb-4">
            <a href="{{ url('/category/'.$category->id) }}">
                <div class="article-wrapper" style="background: url({{ $category->cover }})">
                    <div class="article-description">
                        <h4 class="article-title">{{ $category->name }}</h4>
                        <div class="article-preview-hidden">
                            <p>{{ $category->desc }}</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
