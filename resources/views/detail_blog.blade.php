@extends('layouts.main')
@section('content')
    <article>
        <h3>{{ $posts['title'] }}</h3>
        <p>Author : {{ $posts['author'] }}</p>
        <p>{{ $posts['content'] }}</p>
        <a href="/blog" class="btn btn-primary">Back</a>
    </article>
@endsection
