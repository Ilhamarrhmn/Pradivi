@extends('layouts.app')

@section('title', 'Berita Terkini')

@section('content')

    <div class="mt-4 pt-3 pb-1 px-4 rounded" style="background-color: rgb(243, 243, 243)">
        <small>{{ Breadcrumbs::render('berita') }}</small>
    </div>

    <div class="bg-white shadow-sm rounded mt-3 mb-5 p-4">
        <h3 class="border-bottom text-center pb-3" style="max-width: 100%;">BERITA TERBARU <a href="{{ route('berita') }}"></a></h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($posts as $post)
                <div class="col">
                    <div class="card mt-3 shadow-sm" style="height: 500px; overflow: hidden;">
                        <img src="app/public/{{ $post->gambar }}" class="card-img-top" height="250" alt="imgcard">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text"><small class="text-muted"><i class="bi bi-person-check"></i> {{$post->author}} <i class="bi bi-calendar-check"></i> {{date('Y-m-d', strtotime($post->created_at))}} </small></p>
                            <p class="card-text">{!! Str::limit($post->body, 200) !!}<a href="{{ route('artikel', $post->slug) }}" class="stretched-link">Lihat Selengkapnya</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {!! $posts->withQueryString()->links('pagination::bootstrap-5') !!}
@endsection