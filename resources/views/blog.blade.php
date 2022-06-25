@extends('layouts.main')
@section('content')
    <h2 class="mb-3">{{ $title }}</h2>
    <div class="row justify-content-center mb-3">
        <div class="col-md-4">
            <form action="/blog" method="GET">
                <div class="input-group mb-3">
                    @if (request('category'))
                        <input type="hidden" class="form-control" name="category" value="{{ request('category') }}">
                    @endif
                    <input type="text" class="form-control" name="search" placeholder="Search..."
                        value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="{{ $posts[0]->category->name }}">
            <div class="card-body">
                <h3 class="card-title">{{ $posts[0]->title }}</h3>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <p>
                    <small class="text-muted">
                        By: <a href="/blog/author/{{ $posts[0]->author->username }}"
                            class="text-decoration-none">{{ $posts[0]->author->name }}</a> in
                        <a href="/blog?category={{ $posts[0]->category->slug }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        Last Updated {{ $posts[0]->updated_at->diffForHumans() }}
                    </small>
                </p>
                <a href="/blog/detail/{{ $posts[0]->slug }}" class="btn btn-primary mb-2">Read More</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $i)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2 text-white"
                                style="background-color: rgba(21, 36, 241, 0.4)">
                                <a href="/blog?category={{ $i->category->slug }}"
                                    class="text-white text-decoration-none">
                                    {{ $i->category->name }}
                                </a>
                            </div>
                            <img src="https://source.unsplash.com/500x400?{{ $i->category->name }}" class="card-img-top"
                                alt="{{ $i->category->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $i->title }}</h5>
                                <p class="card-text">{{ $i->excerpt }}</p>
                                <p>
                                    <small class="text-muted">
                                        By: <a href="/blog/author/{{ $i->author->username }}"
                                            class="text-decoration-none">{{ $i->author->name }}</a>
                                        Last Updated {{ $i->updated_at->diffForHumans() }}
                                    </small>
                                </p>
                                <a href="/blog/detail/{{ $i->slug }}" class="btn btn-primary mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post found</p>
    @endif
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
@endsection
