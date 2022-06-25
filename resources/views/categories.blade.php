@extends('layouts.main')

@section('content')
    <h3>Blog Categories</h3>
    <div class="container">
        <div class="row">
            @foreach ($categories as $i)
                <div class="col-md-4 mb-3">
                    <a href="/blog?category={{ $i->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/500x500?{{ $i->name }}" class="card-img"
                                alt="{{ $i->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4 fs-3"
                                    style="background-color: rgba(36, 130, 219, 0.7)">
                                    {{ $i->name }}
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
