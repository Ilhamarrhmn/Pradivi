@extends('posts.app')

@section('title', 'Dashboard Berita')

@section('content')
    <div class="container mt-5 mb-5">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="row">
            <div class="col">
                <h4 class="lead">Dashboard Berita</h4>
                <hr>
            </div>
            <div class="col-2 clearfix">
                <a href="{{ route('create') }}" class="btn btn-success float-right">Tambah</a>
            </div>
        </div>
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Judul</th>
                    <th>Tanggal Pembuatan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $no =>$post)
                <tr>
                    <td>{{ $no+1 }}</td>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ date('Y-m-d', strtotime($post->created_at)) }}</td>
                    <td>
                    <a href="{{ route('artikel', $post->slug) }}" class="btn btn-primary">Show</a>
                    <a href="{{ route('edit', $post->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('hapus', $post->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin dihapus?')">
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