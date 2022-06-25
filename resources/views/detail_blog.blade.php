@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h3 class="mb-3">{{ $posts->title }}</h3>
                <img src="https://source.unsplash.com/1200x400?{{ $posts->category->name }}" class="card-img-top"
                    alt="{{ $posts->category->name }}" class="img-fluid">
                <p>By: <a href="/blog/author/{{ $posts->author->username }}"
                        class="text-decoration-none">{{ $posts->author->name }}</a>
                    in
                    <a href="/blog/categories/{{ $posts->category->slug }}"
                        class="text-decoration-none">{{ $posts->category->name }}</a>
                </p>
                <article class="my-3 fs-5">
                    {!! $posts->body !!}
                </article>

                <div>
                    <a href="/blog" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
