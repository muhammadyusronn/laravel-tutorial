@extends('layouts.main')
@section('content')
    @foreach ($posts as $i)
        <article class="mb-5">
            <h3>{{ $i['title'] }}</h3>
            <p>{{ 'Author : ' . $i['author'] }}</p>
            <p>{{ $i['content'] }}</p>
            <a href="/blog/detail/{{ $i['slug'] }}" class="btn btn-primary">Detail</a>
        </article>
    @endforeach
@endsection
