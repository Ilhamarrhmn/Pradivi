<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>

        <script src="http://maps.googleapis.com/maps/api/js"></script>

        {{-- BOOTSTRAP, ICONS --}}
        <link href="/assets/image/logo.png" rel="shortcut icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Inter&family=Plus+Jakarta+Sans:wght@600&display=swap');
        </style>
    </head>
    <body style="background-image: url('{{ asset('assets/image/grey1.jpg')}}');">
        <!-- NAVBAR -->
        <div class="bg-warning">
            <div class="nav container">
                <div class="nav-item ms-auto">
                    <small><a class="nav-link text-white" href="https://maps.app.goo.gl/mjiso3P5YC7AEAjMA"><i class="bi bi-geo-alt"></i> Lokasi</a></small>
                </div>
            </div>
        </div>
        <nav class="navbar sticky-top navbar-expand-lg navbar-light p-3 shadow-sm" style="font-family: 'Didact Gothic', sans-serif; background-color:#f9f9f9;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="/assets/image/kel.png" width="200" height="43" class="d-inline-block" alt="icon"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><small>PROFILE KELURAHAN</small></a>
                            <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('about') }}">Tentang Kami</a></li>
                            <li><a class="nav-link" href="{{ route('visimisi') }}">Visi & Misi</a></li>
                            <li><a class="nav-link" href="{{ route('sejarah') }}">Sejarah Kelurahan</a></li>
                            <li><a class="nav-link" href="{{ route('wilayah') }}">Wilayah Kelurahan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><small>PEMERINTAHAN</small></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('struktur') }}">Struktur Organisasi</a></li>
                                <li><a class="nav-link" href="{{ route('lembaga') }}">Lembaga Kelurahan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('wisata') }}"><small>WISATA</small></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><small>INFORMASI</small></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('berita') }}">Berita Kelurahan</a></li>
                                <li><a class="nav-link" href="{{ route('agenda') }}">Agenda Kelurahan</a></li>
                                <li><a class="nav-link" href="{{ route('galeri') }}">Galeri Kelurahan</a></li>
                            </ul>
                        </li>
                        @guest
                        @else
                            @if(auth()->user()->type == 'superadmin')
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <div class="dropstart">
                                            <a class="dropdown-item nav-link dropdown-toggle bg-danger text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Emergency</a>
                                            <ul class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('vDamkar') }}">Pemadam Kebakaran</a>
                                                <a class="dropdown-item" href="{{ route('vRsud') }}">Rumah Sakit</a>
                                                <a class="dropdown-item" href="{{ route('vBpbd') }}">BPBD</a>
                                            </ul>
                                        </div>
                                        <a class="dropdown-item" href="{{ route('dashboard') }}">Berita</a>
                                        <a class="dropdown-item" href="{{ route('dashboardwisata') }}">Wisata</a>
                                        <a class="dropdown-item" href="{{ route('dashboardagenda') }}">Agenda</a>
                                        <a class="dropdown-item" href="{{ route('dashboardumkm') }}">UMKM</a>
                                    </div>
                                </li>
                                <a class="nav-link bi bi-box-arrow-right" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            @endif
                            @if(auth()->user()->type == 'damkar')
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('vadminDamkar') }}">Dashboard</a>
                                    </div>
                                </li>
                                <a class="nav-link bi bi-box-arrow-right" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            @endif
                            @if(auth()->user()->type == 'rsud')
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('vadminRsud') }}">Dashboard</a>
                                </div>
                            </li>
                            <a class="nav-link bi bi-box-arrow-right" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            @endif
                            @if(auth()->user()->type == 'bpbd')
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('vadminBpbd') }}">Dashboard</a>
                                    </div>
                                </li>
                                <a class="nav-link bi bi-box-arrow-right" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            @endif
                        @endguest
                    </ul>
                </div>
            </div>
            <style type="text/css">
                .dropdown:hover > .dropdown-menu{
                    display: block;
                }

                a {
                    text-decoration: none;
                }

                @media (min-width: 1200px) {
                    .container{
                        max-width: 1150px;
                    }
                }
            </style>
        </nav>

        @yield('content-main')
        
        <div class="container">
            @yield('content')
        </div>

        <div class="container-fluid">
            @yield('content-fluid')
        </div>

        <!-- Modal Emergency Button -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Emergency Button <small class="text-danger">(Laporkan Masalah Anda!)</small></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('emergency') }}" id="PM" method="POST" enctype="multipart/form-data">
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
                                <select name="instansi" id="instansi" class="form-select" aria-label="Default select example">
                                    <option value="rsud" selected>Rumah Sakit</option>
                                    <option value="damkar">Pemadam Kebakaran</option>
                                    <option value="bpbd">BPBD</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="openem()">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <a class="floating" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <img src="{{ asset('assets/image/em.png') }}" height="65px" width="65px" alt="EM">
        </a>

        <style>
            .floating {
                    position: fixed;
                    height: 65px;
                    width: 65px;
                    bottom: 40px;
                    right: 40px;
                    color: #fff;
                    border-radius: 50px;
                    box-shadow: 2px 2px 3px #737373;
                    z-index: 100;
                }
        </style>

        <!-- FOOTER -->
        <footer class="bg-dark text-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mt-2 text-justify">
                        <hr>
                        <h6 class="text-warning">PROFILE</h6>
                        <p style="text-align: justify;">Kelurahan Palabuhanratu pada masa penjajahan Belanda sekitar tahun 1940 berstatus Desa Palabuhanratu yang kantornya berlokasi di Kp.Buni Wangi, sesudah tahun 1940 Kantor Kelurahan pindah ke Palabuhanratu yang lokasi kantornya disamping Kantor Koramil yang sekarang dibangun untuk kantor BPR, pada tahun 1945 Desa Palabuhanratu dipimpin oleh almarhum Bapak ATMAWIJAYA yang memba...<a class="text-secondary" href="{{ route('sejarah') }}">selengkapnya >></a></p>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4 mt-2">
                        <hr>
                        <h6 class="mb-4 text-warning">INFORMASI</h6>
                        <p><i class="bi bi-building"></i> <a href="https://goo.gl/maps/6XfSgsYF57KreM9g8" class="nav-link">Pelabuhanratu, Kec. Pelabuhanratu, Kabupaten Sukabumi, Jawa Barat 43364</a></p>
                        <p><i class="bi bi-telephone-fill"></i> 087263</p>
                        <p><i class="bi bi-envelope"></i> pradivioffice@gmail.com</p>
                        <div class="row text-center pb-3">
                            <div class="col">
                                <a href=""><i class="bi bi-instagram text-danger fs-4"></i></a>
                            </div>
                            <div class="col">
                                <a href=""><i class="bi bi-facebook text-primary fs-4"></i></a>
                            </div>
                            <div class="col">
                                <a href=""><i class="bi bi-twitter text-info fs-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="text-center text-secondary p-3" style="background-color: rgba(0, 0, 0, 0.2)"> © 2023 Copyright: <a href="" class="text-white">Palabuhanratu Digital Village</a><a href="" class="text-primary"> (Supported By  Diskominfo Kabupaten Sukabumi)</a></div>
            </div>
        </footer>
        
        {{-- CHART JS --}}
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        @yield('scripts')
        
        <script>
            function openem() {
                let tel, type = document.querySelector('#instansi').value;
                if (type == 'rsud') tel = '+5315';
                else if (type == 'damkar') tel = '+6433';
                else if (type == 'bpbd') tel = '+97585';
                window.location = 'tel:' + tel;
                document.getElementById('PM').submit();
                document.getElementById('staticBackdrop').hide();
            }
        </script>

        {{-- SCRIPT BOOTSTRAP --}}
        {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    </body>
</html>
