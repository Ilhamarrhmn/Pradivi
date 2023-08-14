@extends('posts.app')

@section('title', 'Posting UMKM')

@section('content')
    <div class="card mb-5">
        <div class="card-header">{{ __('Posting UMKM') }}</div>
        <div class="card-body">
            <form action="{{ route('postUmkm') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label class="form-label">Nama UMKM</label>
                    <input type="text" name="namaumkm" class="form-control" placeholder="Nama Umkm" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" name="namaproduk" class="form-control" placeholder="Nama Produk" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Harga</label>
                    <input type="text" name="harga" class="form-control" placeholder="Harga Satuan / Pack / Porsi" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Ketegori</label>
                    <select name="kategori" class="form-select" aria-label="Default select example" required>
                        <option selected></option>
                        <option value="kuliner">KULINER</option>
                        <option value="aksesoris">AKSESORIS</option>
                        <option value="jasa">JASA</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label class="form-label">Berat</label>
                    <input class="form-control" name="berat" placeholder="Dengan Satuan Gram" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Foto Produk</label>
                    <input class="form-control" type="file" name="fotoproduk" accept="image/*" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Deskripsi</label>
                    <textarea type="text" name="deskripsi" class="form-control" placeholder="Deskripsikan Produk Anda" required></textarea>
                </div>
                <h3 class="mt-5">Kontak</h3>
                <small>Wajib di isi salah satunya</small>
                <div class="mb-2 mt-3">
                    <input class="form-control" name="whatsapp" placeholder="No Whatsapp" required>
                </div>
                <div class="mb-2">
                    <input class="form-control" name="facebook" placeholder="Isi Dengan Link Facebook" required>
                </div>
                <div class="mb-2">
                    <input class="form-control" name="instagram" placeholder="Username Instagram" required>
                </div>
                <div class="mb-2">
                    <input class="form-control" name="tokoonline" placeholder="Isi Dengan Link Toko" required>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('dashboardumkm') }}" class="btn btn-md btn-secondary">back</a>
                </div>
            </form>
        </div>
    </div>
@endsection