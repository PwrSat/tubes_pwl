@extends('admin.layout.app')
@section('konten')
    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah akun</h1>
        </div>

        <br><br>

        <a href="/akun" class="btn btn-primary">Kembali</a>

        <br><br>
        <div class="col-10">
            <form action="/admin/store_post" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="1" name="author_id">
                <div class="mb-3">
                    <label for="name" class="form-label">nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" required
                        name="name" value="{{ old('name') }}">

                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" required
                        name="email" value="{{ old('email') }}">

                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                        required name="password" value="{{ old('password') }}">

                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">role</label>
                    <input type="text" class="form-control @error('image') is-invalid @enderror" id="role"
                        name="role" value="{{ old('role') }}">

                    @error('role')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
@endsection
