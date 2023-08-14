@extends('posts.app')

@section('title', 'Dashboard Emergency BPBD')

@section('content')
    <div class="container mt-5 mb-5">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="row">
            <div class="col">
                <h4 class="lead">Dashboard Emergency BPBD</h4>
                <hr>
            </div>
        </div>
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Lokasi</th>
                    <th>Instansi</th>
                    <th>Tanggal Pembuatan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($emergency2 as $emergencys)
                <tr>
                    <td>{{ $emergencys->id }}</td>
                    <td>{{ $emergencys->nama }}</td>
                    <td>{{ $emergencys->lokasi }}</td>
                    <td>{{ $emergencys->instansi }}</td>
                    <td>{{ date('Y-m-d', strtotime($emergencys->created_at)) }}</td>
                    <td>
                    <a href="https://www.google.co.id/maps/place/{{$emergencys->lokasi}}" class="btn btn-primary">Lihat Lokasi</a>
                    <form action="{{ route('hapusEmergency', $emergencys->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin dihapus?')">
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