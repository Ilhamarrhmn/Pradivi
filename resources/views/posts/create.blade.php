@extends('posts.app')

@section('title', 'Posting Artikel / Berita')

@section('content')
    <div class="card mb-5">
        <div class="card-header">{{ __('Posting Artikel / Berita') }}</div>
        <div class="card-body">
            <form action="{{ route('postArtikel') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group mt-3">
                    <label>Highlight</label>
                    <input type="file" name="gambar" class="form-control" required/>
                </div>
                <div class="form-group mt-3">
                    <label>Penulis</label>
                    <input type="text" name="author" class="form-control" required/>
                </div>
                <div class="form-group mt-3">
                    <label>Konten</label>
                    <textarea id="editor" name="body" class="form-control"></textarea>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('dashboard') }}" class="btn btn-md btn-secondary">back</a>
                </div>
            </form>
        </div>
    </div>
@endsection