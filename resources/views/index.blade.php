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
                <img src="assets/image/banner1.jpg" class="d-block w-100" alt="First slide" style="height: 480px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/image/banner2.jpg" class="d-block w-100" alt="Second slide" style="height: 480px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/image/banner3.jpg" class="d-block w-100" alt="Third slide" style="height: 480px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third</h5>
                    <p>Some representative placeholder content for the third slide.</p>
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
    <div style="background-color: #ebf0ff;">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 p-4 text-center">
                <div class="col">
                    <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><img src="{{ asset('assets/image/pp.png') }}" height="100px" width="100px" alt="EM"></a>
                    <p class="text-muted">Emergency Button</p>
                </div>
                <div class="col">
                    <a href=""><img src="{{ asset('assets/image/p.png') }}" height="100px" width="100px" alt="EM"></a>
                    <p class="text-muted">Layanan Desa</p>
                </div>
                <div class="col">
                    <a href=""><img src="{{ asset('assets/image/d.png') }}" height="100px" width="100px" alt="EM"></a>
                    <p class="text-muted">Potensi Desa</p>
                </div>
                <div class="col">
                    <a href="{{ route('umkm') }}"><img src="{{ asset('assets/image/i.png') }}" height="100px" width="100px" alt="EM"></a>
                    <p class="text-muted">UMKM</p>
                </div>
            </div>
        </div>
    </div>
  
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Emergency Button</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('emergency') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Anda" required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Lokasi</label>
                            <input id="currentlocation" type="text" name="lokasi" class="form-control" placeholder="Latitude + Longtitude" required>
                            <button class="btn btn-primary btn-sm mt-1" onclick="getLocation()">Ambil Lokasi</button>
                            <script>
                                var x = document.getElementById("currentlocation");

                                function getLocation() {
                                    if (navigator.geolocation) {
                                        navigator.geolocation.getCurrentPosition(showPosition);
                                    } else { 
                                        x.value = "Geolocation is not supported by this browser.";
                                    }
                                }

                                function showPosition(position) {
                                    x.value = position.coords.latitude + "," + position.coords.longitude;
                                }
                            </script>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Apa Yang Anda butuhkan?</label>
                            <select name="instansi" class="form-select" aria-label="Default select example">
                                <option value="rsud" selected>Rumah Sakit</option>
                                <option value="damkar">Pemadam Kebakaran</option>
                                <option value="bpbd">BPBD</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-2">
            {{-- BERITA --}}
            <div class="col mt-5">
                <h5 class="border-bottom text-primary pb-3" style="max-width: 100%;">Berita Terbaru <a href="{{ route('berita') }}"><i class="bi bi-arrow-right-square-fill"></i></a></h5>
                @foreach($posts as $post)
                <div class="card mt-3 border-0" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="img-thumbnail" src="{{ asset('assets/image/user.jpg') }}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-primary" >{{$post->title}}</h5>
                                <p class="card-text"><small class="text-muted"><i class="bi bi-person-check"></i> {{$post->author}} <i class="bi bi-calendar-check"></i> {{date('Y-m-d', strtotime($post->published_at))}} </small></p>
                                <a href="{{ route('artikel', $post->slug) }}" class="btn btn-outline-primary stretched-link">Lihat Selengkapnya <i class="bi bi-arrow-right"></i></a>
                            </div>  
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="col mt-5">
                <h5 class="border-bottom text-primary pb-3" style="max-width: 100%;">Informasi <i class="bi bi-arrow-right-square-fill"></i></h5>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Fungsi Website Kelurahan
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <small>Warga memiliki akses untuk menemukan berbagai informasi mengenai aktivitas terbaru yang dilakukan oleh Kelurahan Palabuhanratu. Masyarakat juga dapat dengan mudah menemukan kontak yang terhubung dengan pihak-pihak di dalam Kelurahan Antapani Kidul. Selain itu, mereka memiliki kemampuan untuk mengetahui beragam jenis layanan yang disediakan oleh Kelurahan Antapani Kidul bagi kepentingan dan kebutuhan mereka.</small>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
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
                <h5 class="border-bottom text-primary pb-3 mt-5" style="max-width: 100%;">Agenda Kegiatan <a href=""><i class="bi bi-arrow-right-square-fill"></i></a></h5>
                <p>Tidak ada agenda kegiatan</p>
            </div>
        </div>
    </div>

    <div class="mt-5" style="background-color: #292929;">
        <div class="container">
            <div class="row text-white">
                <p class="text-center p-3"><i class="bi bi-person-workspace"></i> Visitor Count : {{ $stats->value }}</p>
                <hr>
                <div class="row row-cols-1 row-cols-md-3 text-center pb-3">
                    <div class="col">
                        <i class="bi bi-person-fill"></i> Jumlah Laki-laki : 17.560
                    </div>
                    <div class="col">
                        <i class="bi bi-person-heart"></i> Jumlah Perempuan : 17.233
                    </div>
                    <div class="col">
                        <i class="bi bi-people-fill"></i> Jumlah Kepala Keluarga : 11.377 KK
                    </div>
                </div>
            <hr>

            </div>
            <div class="row row-cols-1 row-cols-md-4 p-4 text-center">
                <div class="col">
                    <img src="{{ asset('assets/image/citepus.jpeg') }}" class="rounded" height="100px" width="100px" alt="EM">
                    <p><b class="text-white">Sebelah Utara: Berbatasan dengan Desa Citepus</b></p>
                </div>
                <div class="col">
                    <img src="{{ asset('assets/image/citepus.jpeg') }}" class="rounded" height="100px" width="100px" alt="EM">
                    <p><b class="text-white">Sebelah Timur: Berbatasan dengan Desa Citepus</b></p>
                </div>
                <div class="col">
                    <img src="{{ asset('assets/image/jayanti.jpg') }}" class="rounded" height="100px" width="100px" alt="EM">
                    <p><b class="text-white">Sebelah Selatan: Berbatasan dengan Desa Jayanti</b></p>
                </div>
                <div class="col">
                    <img src="{{ asset('assets/image/samudra.png') }}" class="rounded" height="100px" width="100px" alt="EM">
                    <p><b class="text-white">Sebelah Barat: Berbatasan dengan Samudera Indonesia</b></p>
                </div>
            </div>
        </div>
    </div>
    <div id="googleMap" style="height: 500px;"></div>

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