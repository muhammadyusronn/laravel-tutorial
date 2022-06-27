@extends('layouts.main')
@section('content')
    <style>
        img {
            filter: brightness(50%);
        }
    </style>
    <div id="carouselExampleLight" class="carousel carousel-light slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleLight" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleLight" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleLight" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="https://source.unsplash.com/1200x500?programming" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-white">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://source.unsplash.com/1200x500?programming" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-white">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1200x500?programming" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-white">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleLight" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleLight" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3">Latest Blog</h3>
                </div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                        data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    @for ($i = 0; $i < 3; $i++)
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280"
                                                    src="https://source.unsplash.com/300x200?{{ $posts[$i]->category->name }}">
                                                <div class="card-body">
                                                    <h4 class="card-title">{{ $posts[$i]->title }}</h4>
                                                    <p class="card-text">{{ $posts[$i]->excerpt }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    @for ($i = 3; $i < 6; $i++)
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280"
                                                    src="https://source.unsplash.com/300x200?{{ $posts[$i]->category->name }}">
                                                <div class="card-body">
                                                    <h4 class="card-title">{{ $posts[$i]->title }}</h4>
                                                    <p class="card-text">{{ $posts[$i]->excerpt }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    @for ($i = 6; $i < 9; $i++)
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280"
                                                    src="https://source.unsplash.com/300x200?{{ $posts[$i]->category->name }}">
                                                <div class="card-body">
                                                    <h4 class="card-title">{{ $posts[$i]->title }}</h4>
                                                    <p class="card-text">{{ $posts[$i]->excerpt }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
