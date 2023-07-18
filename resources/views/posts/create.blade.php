@extends('posts.app')

@section('title', 'Posting Artikel / Berita')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Posting Artikel / Berita') }}</div>
        <div class="card-body">
            <form action="{{ route('postArtikel') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}" required>
                </div>
                <div class="form-group mt-3">
                    <label>Penulis</label>
                    <input type="text" name="author" class="form-control" value="{{ old('author') }}" required/>
                </div>
                <div class="form-group mt-3">
                    <label for="content">Konten</label>
                    <textarea name="body" id="summary-ckeditor" class="form-control" rows="5" required>{{ old('content') }}</textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="">Tanggal Publikasi</label>
                    <input type="date" name="published_at" class="form-control" value="{{ old('published_at') }}" required>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('dashboard') }}" class="btn btn-md btn-secondary">back</a>
                </div>
            </form>
        </div>
    </div>
@endsection