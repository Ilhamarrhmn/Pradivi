<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>

        {{-- BOOTSTRAP, DATATABLES, ICONS, LEAFLET --}}
        <link href="/assets/image/logo.png" rel="shortcut icon">

        <script src="http://maps.googleapis.com/maps/api/js"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Inter&family=Plus+Jakarta+Sans:wght@600&display=swap');
        </style>
    </head>
    <body>
        <!-- NAVBAR -->
        <div style="background-color: #29658d;">
            <ul class="nav container">
                <li class="nav-item">
                    <small><a class="nav-link text-white"><i class="bi bi-envelope"></i> pradivioffice@gmail.com</a></small>
                </li>
                <li class="nav-item ms-auto">
                    <small><a class="nav-link text-white" href="https://maps.app.goo.gl/mjiso3P5YC7AEAjMA"><i class="bi bi-geo-alt"></i> Kelurahan PalabuhanRatu</a></small>
                </li>
            </ul>
        </div>
        <nav class="navbar sticky-top navbar-expand-lg navbar-light p-3 shadow-sm bg-white" style="font-family: 'Didact Gothic', sans-serif;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="/assets/image/logo.png" width="35" height="35" class="d-inline-block" alt="icon"> Kelurahan Palabuhanratu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><small>PROFILE DESA</small></a>
                            <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('about') }}">Tentang Kami</a></li>
                            <li><a class="nav-link" href="{{ route('visimisi') }}">Visi & Misi</a></li>
                            <li><a class="nav-link" href="">Sejarah Desa</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="nav-link" href="">Geografis Desa</a></li>
                            <li><a class="nav-link" href="">Demogragis Desa</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><small>PEMERINTAHAN</small></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="">Struktur Organisasi</a></li>
                                <li><a class="nav-link" href="">Perangkat Desa</a></li>
                                <li><a class="nav-link" href="">Lembaga Desa</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""><small>WISATA</small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('umkm') }}"><small>UMKM</small></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><small>INFORMASI</small></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('berita') }}">Berita</a></li>
                                <li><a class="nav-link" href="">Agenda Kegiatan</a></li>
                                <li><a class="nav-link" href="{{ route('galeri') }}">Galeri</a></li>
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
                                                <a class="dropdown-item" href="{{ route('vadminDamkar') }}">Pemadam Kebakaran</a>
                                                <a class="dropdown-item" href="{{ route('vadminRsud') }}">Rumah Sakit</a>
                                                <a class="dropdown-item" href="{{ route('vadminBpbd') }}">BPBD</a>
                                            </ul>
                                        </div>
                                        <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
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
            </style>
        </nav>

        @yield('content-main')
        
        <div class="container">
            @yield('content')
        </div>

        <div class="container-fluid">
            @yield('content-fluid')
        </div>

        <!-- FOOTER -->
        <footer class="text-white" style="background-color: #29658d;">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-lg-6 mt-2">
                        <hr>
                        <h6 class="font-weight-bold">PROFILE</h6>
                        <p class="text-justify">Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                        <a href="" class="text-white">Selengkapnya >></a>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4 mt-2">
                        <hr>
                        <h6 class="text-uppercase mb-4 font-weight-bold">Informasi</h6>
                        <p><i class="bi bi-building"></i> <a href="https://goo.gl/maps/6XfSgsYF57KreM9g8" class="text-white">Pelabuhanratu, Kec. Pelabuhanratu, Kabupaten Sukabumi, Jawa Barat 43364</a></p>
                        <p><i class="bi bi-telephone-fill"></i> 087263</p>
                        <p><i class="bi bi-envelope"></i> pradivioffice@gmail.com</p>
                    </div>
                </div>
            </div>
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)"> © 2023 Copyright: <a class="text-white" href="" >Palabuhanratu Digital Village</a>
            </div>
        </footer>
        
        {{-- SCRIPT BOOTSTRAP --}}
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </body>
</html>
