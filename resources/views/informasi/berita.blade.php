@extends('layouts.app')

@section('title', 'Berita Terkini')

@section('content')
    <div class="mt-5 mb-5" id="Artikel">
        <h3 class="text-center head">BERITA TERBARU</h3>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach($posts as $post)
            <div class="col">
                <div class="card shadow mt-4">
                <img class="card-img-top img-thumbnail" src="{{ asset('assets/image/user.jpg') }}">
                    <div class="card-body" style="height:80px; overflow:hidden;">
                        <h5 class="card-title" >{{$post->title}}</h5>
                        <p class="card-text"><small class="text-muted"><i class="bi bi-person-check"></i> {{$post->author}}, <i class="bi bi-calendar-check"></i> {{date('Y-m-d', strtotime($post->published_at))}}</small></p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('artikel', $post->slug) }}" class="btn btn-outline-primary stretched-link">Lihat</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {!! $posts->withQueryString()->links('pagination::bootstrap-5') !!}
@endsection