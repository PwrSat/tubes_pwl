<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    {{-- css file --}}
    <link rel="stylesheet" href="{{ asset('css/gambar.css')}}">
    <link rel="stylesheet" href="{{ asset('css/me.css')}}">
    <link rel="stylesheet" href="{{ asset('css/tes.css')}}">
    <link rel="stylesheet" href="/code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/autocomplete.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

    {{-- ckid --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    <title>Hello, world!</title>

    <style>
        .carousel-item img {
            width: 100%;
            height: 400px;
            /* Ganti nilai ini sesuai dengan ukuran yang Anda inginkan */
            object-fit: cover;
        }

        .image-container {
            width: 150px;
            height: 150px;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

</head>

<body>

    <div class="container-fluid">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Logo</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Dropdown Item 1</a>
                            <a class="dropdown-item" href="#">Dropdown Item 2</a>
                            <a class="dropdown-item" href="#">Dropdown Item 3</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('buat_berita')}}">posting</a>
                    </li>
                    <li class="nav-item">
                        <form class="form-inline" method="GET" action="">
                            <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search"
                                aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Navbar end -->

        {{-- navbar end --}}

        {{-- content container --}}
        @yield('konten')
        {{-- content container end --}}

        <footer>
            <div class="jumbotron footer mb-auto" style="color: sagegreen;">
                <div class="container">
                    <div class="row mb-2">
                        <img src="img/logo/c.png" alt="Logo" style="width: 150px;" class="mx-auto">
                    </div>
                    <div class="row mb-3">
                        <p class="mx-auto">Copyright © 2022 Kelompok 3 KOM C </p>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h4 class="mb-2 text-center hitam ">Kategori</h4>
                            <a class="hitam text-center tambah" href="halaman.php?id_kategori=1">
                                <h6 style="font-weight:400;">Dunia</h6>
                            </a>
                            <a class="hitam text-center tambah" href="halaman.php?id_kategori=2">
                                <h6 style="font-weight:400;">Olahraga</h6>
                            </a>
                            <a class="hitam text-center tambah" href="halaman.php?id_kategori=3">
                                <h6 style="font-weight:400;">Hiburan</h6>
                            </a>
                            <a class="hitam text-center tambah" href="halaman.php?id_kategori=4">
                                <h6 style="font-weight:400;">Bisnis</h6>
                            </a>
                            <a class="hitam text-center tambah" href="halaman.php?id_kategori=5">
                                <h6 style="font-weight:400;">Teknologi</h6>
                            </a>
                            <a class="hitam text-center tambah" href="halaman.php?id_kategori=6">
                                <h6 style="font-weight:400;">Politik</h6>
                            </a>
                            <a class="hitam text-center tambah" href="halaman.php?id_kategori=7">
                                <h6 style="font-weight:400;">Wisata</h6>
                            </a>
                            <a class="hitam text-center tambah" href="halaman.php?id_kategori=8">
                                <h6 style="font-weight:400;">Kriminal</h6>
                            </a>
                        </div>
                        <div class="col-4">
                            <h4 class="mb-2 text-center hitam">Tentang</h4>
                            <a class="hitam" href="intro.php">
                                <h6 class="mb-2 text-center tambah" style="font-weight: 400;">Tentang Website</h6>
                            </a>
                            <a class="hitam" href="cs.php">
                                <h6 class="mb-2 text-center tambah" style="font-weight: 400;">Pengembang</h6>
                            </a>
                        </div>
                        <div class="col-4">
                            <h4 class="mb-2 text-center hitam ">Urutan</h4>
                            <!--
                            <a class="putih" href="terpopuler.php"><h6 class="mb-2 text-center" style="font-weight: 400;">Topik Populer</h6></a>
                                    -->
                            <a class="putih" href="terkini.php">
                                <h6 class="mb-2 text-center tambah" style="font-weight: 400;">Terkini</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>
