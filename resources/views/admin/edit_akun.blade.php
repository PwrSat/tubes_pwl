@extends('admin.layout.app')
@section('konten')
    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit postingan</h1>
        </div>

        <br><br>

        <a href="/akun" class="btn btn-primary">Kembali</a>

        <br><br>
        <div class="col-10">
            <form action="{{ route('edit.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" required
                        name="name" value="{{ $user->name }}">

                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" required
                        name="email" value="{{ $user->email }}">

                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">role</label>
                    <input type="text" class="form-control @error('role') is-invalid @enderror" id="role" required
                        name="role" value="{{ $user->role }}">

                    @error('role')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
@endsection
