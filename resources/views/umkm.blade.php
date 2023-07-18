@extends('layouts.app')

@section('title', 'Etalase Produk')

@section('content')
    <div class="text-center mt-5">
        <h2>ETALASE PRODUK</h2>
        <p class="text-muted">Temukan berbagai jenis oleh-oleh khas Palabuhan Ratu</p>
    </div>
    
    <div class="row row-cols-1 row-cols-md-5 g-4 mb-5">
        @foreach($umkms as $umkm)
        <div class="col">
            <div class="card border-0 shadow mt-4">
                <img class="card-img-top img-thumbnail" src="images/umkm/{{ $umkm->fotoproduk }}">
                <div class="card-body">
                    <p class="card-title text-muted" style="font-size: 13px">Kategori : {{$umkm->kategori}}</p>
                    <h4 class="card-text fw-bold"><a href="{{ route('detailumkm', $umkm->id) }}">{{$umkm->namaproduk}}</a></h4>
                    <p class="text-warning">Rp. {{$umkm->harga}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {!! $umkms->withQueryString()->links('pagination::bootstrap-5') !!}

    <style>
        a {
            text-decoration: none;
        }
    </style>
@endsection