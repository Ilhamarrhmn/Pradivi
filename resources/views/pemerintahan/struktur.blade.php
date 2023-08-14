@extends('layouts.app')

@section('title', 'Struktur Organisasi')

@section('content')

    <div class="mt-4 pt-3 pb-1 px-4 rounded" style="background-color: rgb(243, 243, 243)">
        <small>{{ Breadcrumbs::render('struktur') }}</small>
    </div>

    <div class="mb-5">
        <img src="assets/image/strukturorganisasi-2023.jpg" alt="Struktur Organisasi" width="100%">
    </div>
@endsection