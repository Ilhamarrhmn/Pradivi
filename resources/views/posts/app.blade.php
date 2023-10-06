<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>

        <link href="/assets/image/logo.png" rel="shortcut icon">
        
        {{-- BOOTSTRAP, DATATABLES, ICONS, CKEditor --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

        {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <script>tinymce.init({selector:'#mytextarea'});</script> --}}

    </head>
    <body>
        <nav class="navbar sticky-top navbar-expand-lg navbar-light p-4 shadow-sm bg-white" style="font-family: 'Didact Gothic', sans-serif;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="/assets/image/logo.png" width="35" height="35" class="d-inline-block" alt="icon"> Palabuhanratu Digital Village</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
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
                        @else
                            <p class="nav-link">Selamat Datang {{ Auth::user()->name }}!</p>
                            <a class="nav-link bi bi-box-arrow-right" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endif
                    </ul>
                </div>
            </div>
            <style type="text/css">
                .dropdown:hover > .dropdown-menu{
                    display: block;
                }
            </style>
        </nav>

        <div class="container mt-5">
            @yield('content')
        </div>
        
        {{-- SCRIPT CKEDITOR --}}
        <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ),{
                    ckfinder: {
                        uploadUrl: '{{route('uploadImage').'?_token='.csrf_token()}}',
            }
                })
                .catch( error => {
                    console.error( error );
                } );
        </script>
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
    </body>
</html>
