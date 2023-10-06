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
                <h4 class="lead">Dashboard Agenda</h4>
                <hr>
            </div>
            <div class="col-2 clearfix">
                <a href="{{ route('createAgenda') }}" class="btn btn-success">Tambah</a>
            </div>
        </div>
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama Acara</th>
                    <th>Jenis Acara</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Tempat</th>
                    <th>Pelaksana</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($agendas as $agenda)
                <tr>
                    <td>{{ $agenda->id }}</td>
                    <td>{{ $agenda->namaacara }}</td>
                    <td>{{ $agenda->jenisacara }}</td>
                    <td>{{ $agenda->tglmulai }}</td>
                    <td>{{ $agenda->tglselesai }}</td>
                    <td>{{ $agenda->tempat }}</td>
                    <td>{{ $agenda->pelaksana }}</td>
                    <td>
                    <a href="{{ route('updateAgenda', $agenda->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('deleteAgenda', $agenda->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin dihapus?')">
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