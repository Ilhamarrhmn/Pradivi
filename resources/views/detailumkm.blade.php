@extends('layouts.app')

<title>{{$umkm->namaproduk}}</title>

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-8">
            <div class="card mb-3 border-0" style="max-width: 900px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/umkm/{{ $umkm->fotoproduk }}" class="img-fluid" alt="gambarproduk">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">{{$umkm->namaproduk}}</h3>
                            <h1 class="fw-bold">Rp. {{$umkm->harga}}</h1>
                            <hr/>
                            <p class="text-secondary"><small class="fw-bold">Kategori : {{$umkm->kategori}}</small></p>
                            <p class="text-secondary"><small class="fw-bold">Berat Gram : {{$umkm->berat}} gram</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <hr/>
                <h4>Deskripsi Produk</h4>
                <hr/>
                <p class="text-justify">{{$umkm->deskripsi}}</p>
            </div>
        </div>
        <div class="col-4">
            <h2 class="fw-bold">Kontak</h2>
            <p><i class="bi bi-whatsapp"></i> {{$umkm->whatsapp}}</p>
            <p><i class="bi bi-instagram"></i> {{$umkm->instagram}}</p>
            <p><a href="{{$umkm->facebook}}"><i class="bi bi-facebook"></i> Facebook</a></p>
            <p><a href="{{$umkm->tokoonline}}"><i class="bi bi-shop"></i> Toko Online</a></p>
        </div>
    </div>
@endsection