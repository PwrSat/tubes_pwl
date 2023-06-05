<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gambar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/me.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/autocomplete.css') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container-fluid">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Portal Berita
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://vapor.laravel.com">Vapor</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <!-- Konten Berita -->
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($beritas as $index => $berita)
                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                        <a href="{{ route('detail', ['id' => $berita->id]) }}">
                                            <img src="{{ asset('assets/storage/' . $berita->gambar_berita) }}"
                                                class="d-block w-100 carousel-image" alt="Berita {{ $index + 1 }}">
                                        </a>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>{{ $berita->judul }}</h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row mb-5">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <div class="col">
                                <div class="row my-4 ml-4">
                                    <h3>Berita Terkini
                                        <hr style="height:6px;border-width:0;  ;background-color: #5EA6E5">
                                    </h3>
                                </div>
                                <div class="row">
                                    @foreach ($beritas as $beritaa)
                                    <div class="col-3 mt-2 mb-4 ml-2 zoom-effect">
                                        <div class="kotak ml-3">
                                            <img src="{{ asset('assets/storage/' . $beritaa->gambar_berita) }}" style="height: 150px;">
                                        </div>
                                    </div>
                                    <div class="col-7 mt-2 ml-5">
                                        <div class="row">
                                            <p class="ml-2" style="color:black;"> {{ $beritaa->created_at }}</p>
                                        </div>
                                        <div class="row ">
                                            <a href="{{ route('detail', ['id' => $beritaa->id]) }}">
                                                <h3 style="font-weight: bold;">{{ $beritaa->judul }}</h3>
                                            </a>
                                        </div>
                                        <div class="row">
                                            <p>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom mb-3"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
