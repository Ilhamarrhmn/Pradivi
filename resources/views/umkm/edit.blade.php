@extends('posts.app')

<title>{{$umkm->namaproduk}}</title>

@section('content')
    <div class="card mb-5">
        <div class="card-header">{{ __('Edit UMKM') }}</div>
        <div class="card-body">
            <form action="{{ route('postUpdateUmkm', $umkm->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-2">
                    <label class="form-label">Nama Umkm</label>
                    <input type="text" name="namaumkm" class="form-control" value="{{$umkm->namaumkm}}" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" name="namaproduk" class="form-control" value="{{$umkm->namaproduk}}" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Harga</label>
                    <input type="text" name="harga" class="form-control" value="{{$umkm->harga}}" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Ketegori</label>
                    <select name="kategori" class="form-select" aria-label="Default select example" required>
                        <option selected>{{$umkm->kategori}}</option>
                        <option value="kuliner">KULINER</option>
                        <option value="aksesoris">AKSESORIS</option>
                        <option value="jasa">JASA</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label class="form-label">Berat</label>
                    <input class="form-control" name="berat" value="{{$umkm->berat}}" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Foto Produk</label>
                    <input class="form-control" type="file" name="fotoproduk" value="{{$umkm->fotoproduk}}" accept="image/*">
                </div>
                <div class="mb-2">
                    <label class="form-label">Deskripsi</label>
                    <textarea type="text" name="deskripsi" class="form-control" required>{{$umkm->deskripsi}}</textarea>
                </div>
                <h3 class="mt-5">Kontak</h3>
                <small>Wajib di isi salah satunya</small>
                <div class="mb-2 mt-3">
                    <input class="form-control" name="whatsapp" value="{{$umkm->whatsapp}}" required>
                </div>
                <div class="mb-2">
                    <input class="form-control" name="facebook" value="{{$umkm->facebook}}">
                </div>
                <div class="mb-2">
                    <input class="form-control" name="instagram" value="{{$umkm->instagram}}">
                </div>
                <div class="mb-2">
                    <input class="form-control" name="tokoonline" value="{{$umkm->tokoonline}}">
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('dashboardumkm') }}" class="btn btn-md btn-secondary">back</a>
                </div>
            </form>
        </div>
    </div>
@endsection