@extends('layouts.app')

@section('title', 'About')

@section('content')

	<div class="mt-4 pt-3 pb-1 px-4 rounded" style="background-color: rgb(243, 243, 243)">
		<small>{{ Breadcrumbs::render('about') }}</small>
	</div>

		<div class="card mb-3 border-0 text-center">
			<div class="row g-0">
				<div class="col-md-4">
					<img src="{{ asset('assets/image/fotolurah.jpg') }}" height="400px" alt="foto lurah">
				</div>
				<div class="col-md-8 mt-5">
					<div class="card-body">
					<h3 class="card-title">LURAH</h3>
					<p class="card-text">HENDRIANA, S,IP.,M.Si</p>
					<p class="card-text"><small class="text-muted">NIP : 19810505 200801 1 006</small></p>
					</div>
				</div>
			</div>
		</div>
	<hr class="my-6">
	<div class="text-center">
		<h3 class="mt-5">PETA WILAYAH</h3>
		<img src="/assets/image/petawilayah.png" width="100%" alt="Peta Wilayah Keluarahan Palabuhanratu">
	</div>
@endsection