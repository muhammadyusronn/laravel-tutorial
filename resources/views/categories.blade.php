@extends('layouts.main')

@section('content')
    <h3>Blog Categories</h3>
    @foreach ($categories as $i)
        <ul>
            <li>
                <a href="/blog/categories/{{ $i->slug }}" class="btn btn-primary">{{ $i->name }}</a>
            </li>
        </ul>
    @endforeach
@endsection
