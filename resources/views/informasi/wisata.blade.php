@extends('layouts.app')

@section('title', 'Rekomendasi Tempat Wisata')

@section('content')

    <div class="mt-4 pt-3 pb-1 px-4 rounded" style="background-color: rgb(243, 243, 243)">
        <small>{{ Breadcrumbs::render('wisata') }}</small>
    </div>

    <div class="mt-3 mb-5 bg-white shadow-sm p-4 rounded">
        <div class="row row-cols-1 row-cols-md-1 g-4">
            @foreach($wisatas as $wisata)
            <div class="col">
                <div class="row row-cols-1">
                    <div class="col-7">
                        <div class="card text-bg-dark border-0">
                            <img src="app/public/wisata/{{$wisata->gambar}}" class="card-img" alt="fotowisata" height="350px">
                            <div class="card-img-overlay">
                              <h5 class="card-title">{{$wisata->namatempat}}</h5>
                              <p class="card-text">{{$wisata->deskripsi}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                        {!! $wisata->titiklokasi !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection