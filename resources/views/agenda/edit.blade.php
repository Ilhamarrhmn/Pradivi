@extends('posts.app')

<title>{{$agenda->namaacara}}</title>

@section('content')
    <div class="card mb-5">
        <div class="card-header">{{ __('Edit Agenda Kegiatan') }}</div>
        <div class="card-body">
            <form action="{{ route('postUpdateAgenda', $agenda->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label>Nama Acara</label>
                    <input type="text" class="form-control" name="namaacara" value="{{ $agenda->namaacara }}" required>
                </div>
                <div class="form-group mt-3">
                    <label>Jenis Acara <small class="text-muted">(Acara ini bersifat)</small></label>
                    <select class="form-select" name="jenisacara" aria-label="Default select example" required>
                        <option selected>{{ $agenda->jenisacara }}</option>
                        <option value="Umum">Umum</option>
                        <option value="Undangan">Undangan</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label>Tanggal Mulai</label>
                    <input type="datetime-local" name="tglmulai" class="form-control" value="{{ $agenda->tglmulai }}" required/>
                </div>
                <div class="form-group mt-3">
                    <label>Tanggal Selesai</label>
                    <input type="datetime-local" name="tglselesai" class="form-control" value="{{ $agenda->tglselesai }}" required>
                </div>
                <div class="form-group mt-3">
                    <label>Tempat</label>
                    <input type="text" name="tempat" class="form-control" value="{{ $agenda->tempat }}" required>
                </div>
                <div class="form-group mt-3">
                    <label>Pelaksana / Penanggung Jawab</label>
                    <input type="text" name="pelaksana" class="form-control" value="{{ $agenda->pelaksana }}" required>
                </div>
                
                <div class="mt-3">
                    <a href="{{ route('dashboardagenda') }}" class="btn btn-md btn-secondary ms-auto">back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection