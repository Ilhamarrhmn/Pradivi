@extends('layouts.app')

@section('title', 'Visi & Misi')

@section('content')

    <div class="mt-4 pt-3 pb-1 px-4 rounded" style="background-color: rgb(243, 243, 243)">
        <small>{{ Breadcrumbs::render('visimisi') }}</small>
    </div>

	<div class="bg-white p-5 shadow-sm mt-3 mb-5 rounded">
		<h2 class="text-center mt-3">VISI</h2>
        <p class="text-center">"Terwujudnya Kabupaten Sukabumi yang Religius dan Mandiri"</p>
        <h2 class="text-center mt-5">MISI</h2>
        <div class="row row-cols-1 row-cols-md-2 g-4 fs-5">
            <div class="col">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="border rounded-end d-inline-block p-4 bg-warning text-dark">1</h5>
                        <p class="border border-2 p-4">Meningkatkan kemandirian ekonomi masyarakat berbasis ekonomi lokal melalui bidang agribisnis, pariwisata dan industri yang berwawasan lingkungan.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="border rounded-end d-inline-block p-4 bg-warning text-dark">2</h5>
                        <p class="border border-2 p-4">Mewujudkan sumber daya manusia yang berdaya saing dan religius.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="border rounded-end d-inline-block p-4 bg-warning text-dark">3</h5>
                        <p class="border border-2 p-4">Mewujudkan tata kelola pemerintah yang bersih dan professional.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="border rounded-end d-inline-block p-4 bg-warning text-dark">4</h5>
                        <p class="border border-2 p-4">Optimasi pelayanan kesehatan, pendidikan dan infrastruktur daerah.</p>
                    </div>
                </div>
            </div>
        </div>
	</div>
@endsection