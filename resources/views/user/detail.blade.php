@extends('user.layout.layout')
@section('konten')
    <div class="content">
        <div class="row">
            <div class="col">
                <img class="foto" src="{{ asset('assets/storage/' . $beritas->gambar_berita) }}">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card kartu mx-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mx-4 mx-4 my-4 tengah">
                                <p class="judul2 ">{{ $beritas->judul }}</p>
                                <div class="border-bottom mb-3"></div>
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-person-fill mb-1" viewBox="0 0 16 16">
                                        <path
                                            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg> {{ $beritas->author }} |
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-calendar-week-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM9.5 7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zM2 10.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                                    </svg> {{ $beritas->created_at }}|
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg>
                                    @if (!empty($beritas->dilihat))
                                        {{ $beritas->dilihat }}
                                    @else
                                        0
                                    @endif
                                </p>
                                <div class="border-bottom mb-3"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <br>
                                <p>
                                    {{ $beritas->isi_berita }}
                                </p>
                                <div class="border-bottom mb-3"></div>
                                <div class="comment">
                                    <form method="post" action="simpan-komentar.php">
                                        <label>
                                            <h2>Tinggalkan Komentar</h2>
                                        </label>
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" name="id_berita" value="60">
                                            <input type="hidden" name="status" value="0">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama:</label>
                                            <input type="" name="nama" class="form-control"
                                                value="Muhammad Luthfi" required disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input type="email" name="email" class="form-control"
                                                value="luthfim904@gmail.com" required disabled>
                                        </div>

                                        <div class="form-group">
                                            <label>Komentar:</label>
                                            <textarea class="form-control" name="komentar" rows="5"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="form_komentar" class="btn btn-info"
                                                value="Kirim Komentar">
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                </div>
                            </div>
                            <div class="col mt-2 ml-2 col-lg-4 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="col">
                                            <h4>Kategori</h4>
                                            <div class="border-bottom mb-3"></div>
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
                                            <div class="border-bottom mb-3"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-2 mt-5">
                                    <h4 class="mb-3" style="font-weight: bold;">Topik Populer</h4>
                                </div>

                                <div class="row ml-3 mr-5">
                                    <img src="img/berita/wapres.jpeg" style="height: 200px; width: 80%;">
                                </div>
                                <div class="row mt-1 ml-3">
                                    <a href="konten.php?id_berita=78">
                                        <h5 style="font-weight: bold;">Isu Reshuffle Kabinet, Wapres Ma’ruf: Kita Tunggu
                                            Saja </h5>
                                    </a>
                                </div>
                                <div class="row ml-3">
                                    <p style="color:black; font-weight:bold;"> Politik </p>
                                    <p class="ml-2" style="color:black;"> 2022-12-27 </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
