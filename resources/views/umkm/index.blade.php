@extends('posts.app')

@section('title', 'Dashboard UMKM')

@section('content')
    <div class="container mt-5 mb-5">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="row">
            <div class="col">
                <h4 class="lead">Dashboard UMKM</h4>
                <hr>
            </div>
            <div class="col-2 clearfix">
                <a href="{{ route('createumkm') }}" class="btn btn-success">Tambah</a>
            </div>
        </div>
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Berat</th>
                    <th>Deskripsi</th>
                    <th>Foto Produk</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($umkms as $umkm)
                <tr>
                    <td>{{ $umkm->id }}</td>
                    <td>{{ $umkm->namaproduk }}</td>
                    <td>{{ $umkm->harga }}</td>
                    <td>{{ $umkm->berat }}</td>
                    <td>{{ $umkm->deskripsi }}</td>
                    <td><img src="images/umkm/{{ $umkm->fotoproduk }}" alt="Foto Produk" width="50px" height="50px"></td>
                    <td>
                    <form action="{{ route('hapusEmergency', $umkm->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin dihapus?')">
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