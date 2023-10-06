@extends('layouts.app')

<title>{{$umkm->namaproduk}}</title>

@section('content')
    <div class="mt-3 mb-5 bg-white shadow-sm p-4 rounded">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col col-lg-8">
                <div class="card mb-3 border-0" style="max-width: 900px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/app/public/umkm/{{ $umkm->fotoproduk }}" class="img-fluid rounded mt-4" alt="gambarproduk">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{$umkm->namaproduk}}</h3>
                                <h1 class="fw-bold">Rp. {{$umkm->harga}}</h1>
                                <hr/>
                                <p class="text-secondary"><small class="fw-bold">Nama Umkm : {{$umkm->namaumkm}}</small></p>
                                <p class="text-secondary"><small class="fw-bold">Kategori : {{$umkm->kategori}}</small></p>
                                <p class="text-secondary"><small class="fw-bold">Berat Gram : {{$umkm->berat}} gram</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
                <h4>Deskripsi Produk</h4>
                <hr/>
                <p class="text-justify">{{$umkm->deskripsi}}</p>
            </div>
            <div class="col col-lg-4">
                <h2 class="fw-bold">Kontak</h2>
                <small class="mt-5">Jika link kontak tidak bisa maka kontak tidak tersedia!</small>
                <p class="mt-3"><a href="https://wa.me/{{$umkm->whatsapp}}" class="bi bi-whatsapp"> Whatsapp</a></p>
                <p><a href="https://www.instagram.com/{{$umkm->instagram}}" class="bi bi-instagram"> Instagram </a></p>
                <p><a href="https://web.facebook.com/{{$umkm->facebook}}" class="bi bi-facebook"> Facebook</a></p>
                <p><a href="{{$umkm->tokoonline}}" class="bi bi-shop"> Toko Online</a></p>
            </div>
        </div>
    </div>
@endsection