@extends('posts.app')

@section('title', 'Posting Wisata')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Wisata') }}</div>
        <div class="card-body">
            <form action="{{ route('postWisata') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama Tempat</label>
                    <input type="text" name="namatempat" class="form-control" value="{{ old('namatempat') }}" required>
                </div>
                <div class="form-group mt-3">
                    <label>Deskripsi</label>
                    <input type="textarea" name="deskripsi" class="form-control" value="{{ old('deskripsi') }}" required>
                </div>
                <div class="form-group mt-3">
                    <label>Lokasi</label>
                    <input type="text" name="titiklokasi" class="form-control" value="{{ old('titiklokasi') }}" required>
                </div>
                <div class="form-group mt-3">
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control" value="{{ old('gambar') }}" required>
                </div>
                <div class="mt-3">
                    <a href="{{ route('dashboardwisata') }}" class="btn btn-md btn-secondary ms-auto">back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection