@extends('user.layout.layout')
@section('konten')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 col-md-7">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
                    <ul class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=" "></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class=" "></li>
                    </ul>
                    <div class="carousel-inner">
                        @foreach ($beritas as $berita)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img class="d-block w-100" src="{{ asset('assets/storage/' . $berita->gambar_berita) }}"
                                    alt="{{ $berita->judul }}">
                                <div class="carousel-caption-modelku d-none d-md-block">
                                    <a href="{{ route('detail', ['id' => $berita->id]) }}">
                                        <h4>{{ $berita->judul }}</h4>
                                    </a>
                                    <p>{{ $berita->isi_berita }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="opsi col col-lg-11">
                        <h2 class="mt-3" style="text-align: center;">Kategori</h2>
                        <hr style="border-top: 1px solid grey;">
                        <div class="row">
                            <div class="col">
                                <h5 class="ml-auto">
                                    <a class="nav-item nav-link" href="{{ route('dunia') }}">
                                        <h6>Dunia</h6>
                                    </a>
                                    <a class="nav-item nav-link" href="{{ route('olahraga') }}">
                                        <h6>Olahraga</h6>
                                    </a>
                                    <a class="nav-item nav-link" href="{{ route('hiburan') }}">
                                        <h6>Hiburan</h6>
                                    </a>
                                    <a class="nav-item nav-link" href="{{ route('teknologi') }}">
                                        <h6>Teknologi</h6>
                                    </a>
                                    <a class="nav-item nav-link" href="{{ route('politik') }}">
                                        <h6>Politik</h6>
                                    </a>
                                    <a class="nav-item nav-link" href="{{ route('kriminal') }}">
                                        <h6>Kriminal</h6>
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-3">
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
                                    @foreach ($beritas as $berita)
                                    <div class="col-3 mt-2 mb-4 ml-2 zoom-effect image-container">
                                        <div class="kotak ml-3">
                                            <a href="{{ route('detail', ['id' => $berita->id]) }}">
                                                <img src="{{ asset('assets/storage/' . $berita->gambar_berita) }}" style="height: 150px;">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-7 mt-2 ml-5">
                                        <div class="row">
                                            <p style="color:black; font-weight:bold;"> Wisata </p>
                                            <p class="ml-2" style="color:black;"> {{ $berita->created_at }} </p>
                                        </div>
                                        <div class="row ">
                                            <a class="nav-item" href="{{ route('detail', ['id' => $berita->id]) }}">
                                                <h3 style="font-weight: bold;">{{ $berita->judul }}</h3>
                                            </a>
                                        </div>
                                        <div class="row">
                                            <p><span style="font-size:11pt">{{ $berita->isi_berita }}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="border-bottom mb-3"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
