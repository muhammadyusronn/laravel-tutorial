@extends('layouts.admin.main')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-8">
                    <h3 class="mb-3">{{ $posts->title }}</h3>
                    <a href="" class="btn btn-warning mb-2" title="EDIT"><span data-feather="edit"></span>EDIT</a>
                    <a href="" class="btn btn-danger mb-2" title="EDIT"><span data-feather="trash"></span>HAPUS</a>
                    <img src="https://source.unsplash.com/1200x400?{{ $posts->category->name }}" class="card-img-top"
                        alt="{{ $posts->category->name }}" class="img-fluid">
                    <article class="my-3 fs-5">
                        {!! $posts->body !!}
                    </article>
                </div>
            </div>
        </div>
    </main>
@endsection
