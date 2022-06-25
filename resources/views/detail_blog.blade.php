@extends('layouts.main')
@section('content')
    <article>
        <h3>{{ $posts->title }}</h3>
        <p>By: <a href="/blog/author/{{ $posts->author->username }}"
                class="text-decoration-none">{{ $posts->author->name }}</a>
            in
            <a href="/blog/categories/{{ $posts->category->slug }}"
                class="text-decoration-none">{{ $posts->category->name }}</a>
        </p>
        <p>{{ $posts->excerpt }}</p>
        {!! $posts->body !!}
        <div>
            <a href="/blog" class="btn btn-primary">Back</a>
        </div>
    </article>
@endsection
