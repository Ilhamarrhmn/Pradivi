@extends('layouts.app')

@section('title', 'About')

@section('content')
		<div class="container text-center">
			<img src="{{ asset('assets/image/user.jpg') }}" width="230" class="rounded-circle">
			<h2 class="font-weight-light" style="margin:25px;">Ilham Arrahman</h2>
			<p>Teknik Informatika</p>
			<p>Universitas Muhamadiyah Sukabumi</p>
			<hr class="my-6">
		</div>

	<div class="container">
		<div class="row">
			<div class="col text-center">
				<h1 id="About"></h1>
				<h1>About</h1>
			</div>
		</div>
		<div class="row">
			<div class="col text-justify">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="col text-justify">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
@endsection