@extends('layouts.main')
@section('content')
    <h2 class="mb-3">{{ $title }}</h2>
    <hr>
    @foreach ($posts as $i)
        <div class="mb-2 border-bottom">
            <article>
                <h3>{{ $i->title }}</h3>
                <p>By: <a href="/blog/author/{{ $i->author->username }}"
                        class="text-decoration-none">{{ $i->author->name }}</a> in
                    <a href="/blog/categories/{{ $i->category->slug }}"
                        class="text-decoration-none">{{ $i->category->name }}</a>
                </p>
                <p>{{ $i->excerpt }}</p>
                <a href="/blog/detail/{{ $i->slug }}" class="btn btn-primary mb-2">Read More...</a>
            </article>
        </div>
    @endforeach
@endsection
