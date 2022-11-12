@extends('layouts.admin.main')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $title }}</h1>
        </div>
        <h2>{{ 'Data ' . $title }}</h2>
        <a href="/dash/blog/create" class="btn btn-primary"><span data-feather="plus"></span> Tambah Data <?= $title ?></a>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Excerpt</th>
                        <th scope="col">Category</th>
                        <th scope="col">Author</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($posts as $i)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $i->title }}</td>
                            <td>{{ $i->excerpt }}</td>
                            <td>{{ $i->category->name }}</td>
                            <td>{{ $i->author->name }}</td>
                            <td class="text-center">
                                <a href="/dash/blog/{{ $i->slug }}" class="badge bg-primary" title="EDIT">
                                    <span data-feather="eye"></span>
                                </a>
                                <a href="/dash/blog/edit/{{ $i->slug }}" class="badge bg-warning" title="EDIT">
                                    <span data-feather="edit"></span>
                                </a>
                                <a href="/dash/blog/delete/{{ $i->slug }}" class="badge bg-danger" title="HAPUS">
                                    <span data-feather="trash"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </main>
@endsection
