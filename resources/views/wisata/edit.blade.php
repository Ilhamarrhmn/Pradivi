@extends('posts.app')

<title>{{$wisata->namatempat}}</title>

@section('content')
    <div class="card mb-5">
        <div class="card-header">{{ __('Edit Wisata') }}</div>
        <div class="card-body">
            <form action="{{ route('postUpdateWisata', $wisata->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label>Nama Tempat</label>
                    <input type="text" class="form-control" name="namatempat" value="{{ $wisata->namatempat }}" required>
                </div>
                <div class="form-group mt-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3">{{ $wisata->deskripsi }}</textarea>
                </div>
                <div class="form-group mt-3">
                    <label>Lokasi</label>
                    <textarea name="titiklokasi" class="form-control" rows="4">{{ $wisata->titiklokasi }}</textarea>
                </div>
                
                <div class="mt-3">
                    <a href="{{ route('dashboardwisata') }}" class="btn btn-md btn-secondary ms-auto">back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection