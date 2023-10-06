@extends('posts.app')

@section('title', 'Dashboard UMKM')

@section('content')
    <div class="container mt-5 mb-5">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('error'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="row">
            <div class="col">
                <h4 class="lead">Dashboard Wisata</h4>
                <hr>
            </div>
            <div class="col-2 clearfix">
                <a href="{{ route('createWisata') }}" class="btn btn-success">Tambah</a>
            </div>
        </div>
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama Tempat</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($wisatas as $wisata)
                <tr>
                    <td>{{ $wisata->id }}</td>
                    <td>{{ $wisata->namatempat }}</td>
                    <td>{{ $wisata->deskripsi }}</td>
                    <td><img src="app/public/wisata/{{ $wisata->gambar }}" alt="fotowisata" height="50" width="50"></td>
                    <td>
                    <a href="{{ route('updateWisata', $wisata->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('deleteWisata', $wisata->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin dihapus?')">
                        {{ csrf_field() }}
                            @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection