@extends('layouts.app')

@section('title', 'Agenda Kegiatan')

@section('content')

    <div class="mt-4 pt-3 pb-1 px-4 rounded" style="background-color: rgb(243, 243, 243)">
        <small>{{ Breadcrumbs::render('agenda') }}</small>
    </div>

    <div class="row row-cols-1 row-cols-md-2 mb-5">
        <div class="col col-lg-8 mt-3">
            <div class="bg-white shadow-sm rounded p-4">
                <h4 class="text-center border-bottom pb-3">AGENDA TERBARU</h4>
                <div class="row row-cols-1 row-cols-md-1 g-4">
                    @foreach($agendas as $agenda)
                        <div class="col">
                            <div class="card border-0" style="max-width: 750px;">
                                <div class="row g-0">
                                    <img src="app/public/agenda/{{ $agenda->foto }}" class="card-img-top" height="250" alt="imgcard">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">{{ $agenda->namaacara }}</h5>
                                        <small class="text-muted">
                                            <p class="card-text mb-1"><i class="bi bi-bookmark-fill"></i> {{ $agenda->jenisacara}}</p>
                                            <p class="card-text mb-1"><i class="bi bi-calendar-check-fill"></i> Waktu Mulai : {{ $agenda->tglmulai}}</p>
                                            <p class="card-text mb-1"><i class="bi bi-calendar-x-fill"></i> Waktu Selesai : {{ $agenda->tglselesai}}</p>
                                            <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> {{ $agenda->tempat}}</p>
                                            <p class="card-text mb-1"><i class="bi bi-person-fill"></i> {{ $agenda->pelaksana}}</p>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col col-lg-4 mt-3">
            <div class="bg-white shadow-sm rounded p-4">
                <h5 class="border-bottom pb-3" style="max-width: 100%;">Berita Terkini <a href="{{ route('berita') }}"><i class="bi bi-arrow-right-square-fill text-warning"></i></a></h5>
                <div class="row row-cols-1 row-cols-md-1 g-4">
                    @foreach($posts as $post)
                        <div class="col">
                            <div class="card mt-3 shadow-sm">
                                <img src="app/public/{{ $post->gambar }}" class="card-img-top" height="100" alt="imgcard">
                                <div class="card-body">
                                    <h5 class="card-title">{{$post->title}}</h5>
                                    <p class="card-text"><small class="text-muted"><i class="bi bi-person-check"></i> {{$post->author}} <i class="bi bi-calendar-check"></i> {{date('Y-m-d', strtotime($post->created_at))}} </small></p>
                                    <p class="card-text">{!! Str::limit($post->body, 100) !!}<a href="{{ route('artikel', $post->slug) }}" class="stretched-link">Lihat Selengkapnya</a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {!! $agendas->withQueryString()->links('pagination::bootstrap-5') !!}
@endsection