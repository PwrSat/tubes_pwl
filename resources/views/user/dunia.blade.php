@extends('user.layout.layout')
@section('konten')
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
@endsection
