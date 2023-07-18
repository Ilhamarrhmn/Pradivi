@extends('layouts.app')

@section('title', 'Palabuhan Ratu Digital Village')

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
                <img src="assets/image/banner1.jpg" class="d-block w-100" alt="First slide" style="height: 500px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/image/banner2.jpg" class="d-block w-100" alt="Second slide" style="height: 500px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/image/banner3.jpg" class="d-block w-100" alt="Third slide" style="height: 500px">
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
                    <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><img src="{{ asset('assets/image/p.png') }}" height="100px" width="100px" alt="EM"></a>
                    <p class="text-muted">Emergency Button</p>
                </div>
                <div class="col">
                    <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop1"><img src="{{ asset('assets/image/pp.png') }}" height="100px" width="100px" alt="EM"></a>
                    <p class="text-muted">Pengaduan</p>
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
                            <label class="form-label">Kontak</label>
                            <input type="text" name="kontak" class="form-control" placeholder="Kontak Yang Aktif" required>
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
                            <label class="form-label">Foto Kejadian</label>
                            <input class="form-control" type="file" name="image" accept="image/*" required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Apa Yang Anda butuhkan?</label>
                            <select name="instansi" class="form-select" aria-label="Default select example">
                                <option value="rsud" selected>Rumah Sakit</option>
                                <option value="damkar">Pemadam Kebakaran</option>
                                <option value="bpbd">BPBD</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsikan secara singkat masalah anda!" required>
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
    
    {{-- MODAL PENGADUAN --}}
    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Pengaduan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="title" placeholder="Nama Anda">
                        </div>
                        <div class="form-group mt-3">
                            <label for="content">Keluhan Anda</label>
                            <textarea name="body" class="form-control" rows="5" required></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row row row-cols-1 row-cols-md-2">
            {{-- BERITA --}}
            <div class="col mt-5">
                <h5 class="border-bottom text-primary pb-3" style="max-width: 540px;">Berita Terbaru <a href="{{ route('berita') }}"><i class="bi bi-arrow-right-square-fill"></i></a></h5>
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
                <h5 class="border-bottom text-primary pb-3" style="max-width: 540px;">Pengumuman <a href=""><i class="bi bi-arrow-right-square-fill"></i></a></h5>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                             #1
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                             #2
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                             #3
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                        </div>
                    </div>
                </div>
                <h5 class="border-bottom text-primary pb-3 mt-5" style="max-width: 540px;">Agenda Kegiatan <a href=""><i class="bi bi-arrow-right-square-fill"></i></a></h5>
                <p>Tidak ada agenda kegiatan</p>
            </div>
        </div>
    </div>
    
    <div id="googleMap" class="mt-5" style="height: 500px;"></div>

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