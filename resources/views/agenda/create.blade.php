@extends('posts.app')

@section('title', 'Posting Agenda')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Buat Agenda Kegiatan') }}</div>
        <div class="card-body">
            <form action="{{ route('postAgenda') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama Acara</label>
                    <input type="text" class="form-control" name="namaacara" value="{{ old('namaacara') }}" required>
                </div>
                <div class="form-group mt-3">
                    <label>Jenis Acara</label>
                    <select class="form-select" name="jenisacara" aria-label="Default select example" required>
                        <option selected>Umum</option>
                        <option value="Undangan">Undangan</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label>Tanggal Mulai</label>
                    <input type="datetime-local" name="tglmulai" class="form-control" value="{{ old('tglmulai') }}" required/>
                </div>
                <div class="form-group mt-3">
                    <label>Tanggal Selesai</label>
                    <input type="datetime-local" name="tglselesai" class="form-control" value="{{ old('tglselesai') }}" required>
                </div>
                <div class="form-group mt-3">
                    <label>Tempat</label>
                    <input type="text" name="tempat" class="form-control" value="{{ old('tempat') }}" required>
                </div>
                <div class="form-group mt-3">
                    <label>Pelaksana / Penanggung Jawab</label>
                    <input type="text" name="pelaksana" class="form-control" value="{{ old('pelaksana') }}" required>
                </div>
                <div class="form-group mt-3">
                    <label>Brosur Kegiatan / Banner Kegiatan</label>
                    <input type="file" name="foto" class="form-control" value="{{ old('foto') }}" required>
                </div>
                <div class="mt-3">
                    <a href="{{ route('dashboardagenda') }}" class="btn btn-md btn-secondary ms-auto">back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection