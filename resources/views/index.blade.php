@extends('layouts.app')

@section('title', 'Kelurahan Palabuhanratu | Palabuhanratu Digital Village')

@section('content-main')
    @if ($message = Session::get('success'))
        <div class="alert alert-danger container mt-3">
            <p>{{ $message }}</p>
        </div>
    @endif

    {{-- CROUSEL --}}
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/image/alunalun.jpg" class="d-block w-100" alt="First slide" style="height: 480px; filter: brightness(50%);">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Alun Alun Palabuhanratu</h5>
                    <p>Alun-Alun Palabuhanratu juga dikenal sebagai tempat rekreasi yang populer bagi warga setempat dan wisatawan. Lapangan ini sering menjadi tempat bermain anak-anak, berkumpulnya masyarakat, serta digunakan untuk acara-acara kota seperti pasar malam dan festival.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/image/mesjid.jpg" class="d-block w-100" alt="Second slide" style="height: 480px; filter: brightness(50%);">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Masjid Agung Palabuhanratu</h5>
                    <p>Masjid Agung Palabuhanratu memiliki arsitektur yang indah dan megah dengan menara yang tinggi, serta menjadi pusat aktivitas keagamaan dan sosial bagi masyarakat Muslim di sekitarnya.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/image/event.jpg" class="d-block w-100" alt="Third slide" style="height: 480px; filter: brightness(50%);">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Event Palabuhanratu</h5>
                    <p>Acara ini dapat mencakup berbagai kegiatan seperti festival budaya, olahraga, konser musik, pameran, atau kegiatan lainnya yang bertujuan untuk mempromosikan pariwisata dan budaya lokal di Palabuhanratu.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- BUTTON --}}
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 p-4 text-center">
            <div class="col">
                <a href=""><img src="{{ asset('assets/image/layanan.png') }}" height="100px" width="100px" alt="EM"></a>
                <p class="text-secondary">Layanan Kelurahan</p>
            </div>
            <div class="col">
                <a href="{{ route('potensi') }}"><img src="{{ asset('assets/image/potensi.png') }}" height="100px" width="100px" alt="EM"></a>
                <p class="text-secondary">Potensi Kelurahan</p>
            </div>
            <div class="col">
                <a href="{{ route('umkm') }}"><img src="{{ asset('assets/image/umkm.png') }}" height="100px" width="100px" alt="EM"></a>
                <p class="text-secondary">UMKM Kelurahan</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4 mt-2">
            <div class="col col-lg-8">
                <div class="bg-white shadow-sm p-4 rounded">
                    <h5 class="border-bottom text-warning pb-3" style="max-width: 100%;">Berita Terbaru <a href="{{ route('berita') }}"><i class="bi bi-arrow-right-square-fill text-warning"></i></a></h5>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        @foreach($posts as $post)
                            <div class="col">
                                <div class="card mt-3 shadow-sm">
                                    <img src="app/public/{{ $post->gambar }}" class="card-img-top" height="250" alt="imgcard">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$post->title}}</h5>
                                        <p class="card-text"><small class="text-muted"><i class="bi bi-person-check"></i> {{$post->author}} <i class="bi bi-calendar-check"></i> {{date('Y-m-d', strtotime($post->created_at))}} </small></p>
                                        <p class="card-text">{!! Str::limit($post->body, 250) !!}<a href="{{ route('artikel', $post->slug) }}" class="stretched-link">Lihat Selengkapnya</a></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col col-lg-4">
                <div class="bg-white shadow-sm p-4 rounded">
                    <h5 class="border-bottom text-warning pb-3" style="max-width: 100%;">Informasi Website <i class="bi bi-arrow-right-square-fill text-warning"></i></h5>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Fungsi Website Kelurahan
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <small>Warga memiliki akses untuk menemukan berbagai informasi mengenai aktivitas terbaru yang dilakukan oleh Kelurahan Palabuhanratu. Masyarakat juga dapat dengan mudah menemukan kontak yang terhubung dengan pihak-pihak di dalam Kelurahan Palabuhanratu. Selain itu, mereka memiliki kemampuan untuk mengetahui beragam jenis layanan yang disediakan oleh Kelurahan Palabuhanratu bagi kepentingan dan kebutuhan mereka.</small>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Manfaat Website Kelurahan
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <small>Secara umum, pembangunan situs web bagi instansi pemerintah memberikan manfaat sebagai berikut:
                                        <ol>
                                            <li>Interaktif dalam Menyajikan Informasi dan Pembangunan Daerah:
                                                Website ini memberikan platform interaktif yang memungkinkan informasi terkait perkembangan dan pembangunan daerah disajikan secara lebih dinamis dan terkini. Hal ini membantu masyarakat dalam memahami perkembangan terbaru dan program yang sedang berlangsung.</li>
                                            <li>Mengungkapkan Potensi Daerah dalam Segala Aspek:
                                                Situs web ini menjadi wadah untuk memaparkan semua informasi tentang potensi daerah dalam berbagai aspek kehidupan dan pemerintahan. Ini mencerminkan transparansi pemerintah terhadap masyarakat, memberikan pandangan yang lebih jelas tentang potensi dan peluang yang ada.</li>
                                            <li>Mensosialisasikan Kebijakan dan Program Pemerintah:
                                                Website tersebut menjadi media utama untuk menyebarkan informasi mengenai kebijakan dan program pemerintah kepada seluruh masyarakat, khususnya mereka yang memiliki akses internet. Dengan demikian, sosialisasi dan pemahaman mengenai arah dan tujuan pemerintah menjadi lebih luas dan merata.</li>
                                        </ol>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5 class="border-bottom text-warning pb-3 mt-5" style="max-width: 100%;">Agenda Kegiatan <a href="{{ route('agenda') }}"><i class="bi bi-arrow-right-square-fill text-warning"></i></a></h5>
                    @foreach($agendas as $agenda)
                        <div class="col">
                            <div class="card border-0" style="max-width: 750px;">
                                <div class="row g-0">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">{{ $agenda->namaacara }}</h5>
                                        <small class="text-muted">
                                            <p class="card-text mb-1"><i class="bi bi-bookmark-fill"></i> {{ $agenda->jenisacara}}</p>
                                            <p class="card-text mb-1"><i class="bi bi-calendar-check-fill"></i> Waktu Mulai : {{ $agenda->tglmulai}}</p>
                                            <p class="card-text mb-1"><i class="bi bi-calendar-x-fill"></i> Waktu Selesai : {{ $agenda->tglselesai}}</p>
                                            <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> {{ $agenda->tempat}}</p>
                                            <p class="card-text mb-1"><i class="bi bi-person-fill"></i> {{ $agenda->pelaksana}}</p>
                                        </small>
                                    </div>
                                </div>
                                <hr class="border-bottom">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="bg-white p-5 mt-3 shadow-sm rounded">
            <h5 class="border-bottom text-warning pb-3 mt-3" style="max-width: 100%;">Wisata Terkini <a href=""><i class="bi bi-arrow-right-square-fill text-warning"></i></a></h5>
        </div>
    </div>

    <div class="mt-5" id="googleMap" style="height: 500px;"></div>

    <div class="text-center bg-dark text-secondary">
        <div class="container">
            <div class="row">
                <p class="pt-3"><i class="bi bi-person-workspace"></i> Visitor Count : {{ $stats->value }}</p>
                <hr>
                <div class="row row-cols-1 row-cols-md-3 pb-3">
                    <div class="col">
                        <div><i class="bi bi-person-fill"></i><b> Jumlah Laki-laki : </b></div>17.560
                    </div>
                    <div class="col">
                        <div><i class="bi bi-person-heart"></i><b> Jumlah Perempuan : </b></div>17.233
                    </div>
                    <div class="col">
                        <div><i class="bi bi-people-fill"></i><b> Jumlah Kepala Keluarga : </b></div>11.377 KK
                    </div>
                </div>
                <hr>
            </div>
            <div class="row row-cols-1 row-cols-md-3 p-4 text-secondary">
                <div class="col">
                    <img src="{{ asset('assets/image/citepus.jpeg') }}" class="rounded" height="100px" width="100px" alt="EM">
                    <p><b>Sebelah Utara dan Timur: Berbatasan dengan Desa Citepus</b></p>
                </div>
                <div class="col">
                    <img src="{{ asset('assets/image/jayanti.jpg') }}" class="rounded" height="100px" width="100px" alt="EM">
                    <p><b>Sebelah Selatan: Berbatasan dengan Desa Jayanti</b></p>
                </div>
                <div class="col">
                    <img src="{{ asset('assets/image/samudra.png') }}" class="rounded" height="100px" width="100px" alt="EM">
                    <p><b>Sebelah Barat: Berbatasan dengan Samudera Indonesia</b></p>
                </div>
            </div>
        </div>
    </div>

    {{-- GOOGLE MAPS --}}
    <script>
        function initialize() {
            var propertiPeta = {
                center:new google.maps.LatLng(-6.9916334, 106.5539935),
                zoom:9,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            
            var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
            
            // membuat Marker
            var marker=new google.maps.Marker({
                position: new google.maps.LatLng(-6.9916334, 106.5539935),
                map: peta,
                animation: google.maps.Animation.BOUNCE
            });
        }
        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    
    <style>
        .head{
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .kalimat{
            font-family: 'Didact Gothic', sans-serif;
        }
    </style>
@endsection