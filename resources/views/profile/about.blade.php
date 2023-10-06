@extends('layouts.app')

@section('title', 'About')

@section('content')

	<div class="mt-4 pt-3 pb-1 px-4 rounded" style="background-color: rgb(243, 243, 243)">
		<small>{{ Breadcrumbs::render('about') }}</small>
	</div>

	<div class="card mt-3 mb-5 border-0 p-4 text-center">
		<img src="{{ asset('assets/image/fotolurah.jpg') }}" class="mx-auto d-block" height="400px" width="300px" alt="foto lurah">
		<h3 class="card-title">LURAH</h3>
		<p class="card-text">HENDRIANA, S,IP.,M.Si</p>
		<p class="card-text"><small class="text-muted">NIP : 19810505 200801 1 006</small></p>
		<hr>
		<h3 class="mt-5">PETA WILAYAH</h3>
		<img src="/assets/image/petawilayah.png" width="100%" alt="Peta Wilayah Keluarahan Palabuhanratu">
	</div>
	<div class="text-center">
		
	</div>
@endsection