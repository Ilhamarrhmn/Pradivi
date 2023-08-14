@extends('posts.app')

<title>{{$post->title}}</title>

@section('content')
    <div class="card mb-5">
        <div class="card-header">{{ __('Edit') }}</div>
        <div class="card-body">
            <form action="{{ route('postUpdate', $post->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="title" class="form-control" value="{{$post->title}}" required>
                </div>
                <div class="form-group mt-3">
                    <label>Penulis</label>
                    <input type="text" name="author" class="form-control" value="{{$post->author}}" required>
                </div>
                <div class="form-group mt-3">
                    <label for="">Konten</label>
                    <textarea name="body" id="summary-ckeditor" cols="30" rows="10" class="ckeditor form-control" required>{{$post->body}}</textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="">Tanggal Publikasi</label>
                    <input type="date" name="published_at" class="form-control" value="{{ date('Y-m-d', strtotime($post->published_at)) }}" required>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('dashboard') }}" class="btn btn-md btn-secondary">back</a>
                </div>
            </form>
        </div>
    </div>
@endsection