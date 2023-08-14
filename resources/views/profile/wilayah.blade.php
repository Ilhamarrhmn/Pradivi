@extends('layouts.app')

@section('title', 'Wilayah Kelurahan')

@section('content')

    <div class="mt-4 pt-3 pb-1 px-4 rounded" style="background-color: rgb(243, 243, 243)">
        <small>{{ Breadcrumbs::render('wilayah') }}</small>
    </div>

    <h3 class="mt-3">Wilayah Kelurahan</h3>
    <div class="mb-5 text-muted" style="text-align: justify;">
        <ol class="mt-3">
            <li>Karakteristik Geografis:
                <p>
                    Luas wilayah Kelurahan Palabuhanratu adalah 850,20 hektar (Ha). Secara administratif, kelurahan ini memiliki batas-batas wilayah sebagai berikut:                
                    <ul>
                        <li>Sebelah Utara: Berbatasan dengan Desa Citepus</li>
                        <li>Sebelah Timur: Berbatasan dengan Desa Citepus</li>
                        <li>Sebelah Selatan: Berbatasan dengan Desa Jayanti</li>
                        <li>Sebelah Barat: Berbatasan dengan Samudera Indonesia</li>
                    </ul>
                </p>
            </li>
            <li>
                Karakteristik Topografis:
                <p>
                    Secara topografis, wilayah Kelurahan Palabuhanratu memiliki ketinggian antara 1 hingga 20 meter di atas permukaan laut (dpl). Topografi ini cenderung datar atau berombak di bagian pesisir pantai. Kondisi ini mempengaruhi jenis aktivitas yang dominan di wilayah ini, seperti nelayan dan buruh perikanan yang berhubungan dengan laut.
                </p>
            </li>
            <li>Karakteristik Demografis:
                <p>
                    Kelurahan Palabuhanratu pada Desember tahun 2022 memiliki jumlah penduduk sebanyak 34.793 jiwa, yang terdiri dari 17.560 laki-laki dan 17.233 perempuan. Jumlah kepala keluarga (KK) di wilayah ini adalah sebanyak 11.377 KK.
                </p>
            </li>
        </ol>
    </div>
	<h3>PETA WILAYAH</h3>
	<img src="/assets/image/petawilayah.png" alt="Peta Wilayah Keluarahan Palabuhanratu" width="100%">
@endsection