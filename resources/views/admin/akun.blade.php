@extends('admin.layout.app')
@section('konten')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Table akun</h1>
    </div>

    <br><br>

    <a href="/tambah" class="btn btn-primary">Tambah akun</a>

    <br><br>

    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil</strong> {{session('status')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <br><br>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nama</th>
                <th scope="col">email</th>
                <th scope="col">role</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1; @endphp
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $i }}</th>
                    <td>{{ $user->name }}</td>
                    <td class="cal-lg-3">{{ $user->email }}</td>
                    <td class="col-lg-3">{{ $user->role }}</td>
                    <td>
                        <div class="row">
                            <div class="col-6">
                                <a href="{{ route('edit', ['id' => $user->id]) }}" class="btn btn-warning">Edit</a>
                            </div>
                            <div class="col-6" >
                                <form action="{{ route('posts.delete', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @php $i++; @endphp
            @endforeach
        </tbody>
    </table>

</div>

@endsection
