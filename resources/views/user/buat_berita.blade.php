@extends('user.layout.layout')
@section('konten')
    <form method="post" action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

        <div class="mb-3">
            <label for="gambar">gambar</label><br>
            <input type="file" name="image" class=""><br>
            <label for="" class="form-label">Judul</label><br>
            <input type="text" name="judul"><br>
            <label for="" class="form-label">Kategori</label><br>
            <select name="kategori" id="" class="form-select">
                @foreach ($kategori as $item)
                    <option value="{{ $item->kategori }}">{{ $item->kategori }}</option>
                @endforeach
            </select><br>
            <label for="" class="form-label">excerpt</label><br>
            <input type="text" name="excerpt"><br>
            <label for="body" class="form-label">Body</label>
            <input type="hidden" id="body" name="body">
            <trix-editor input="body"></trix-editor>
        </div>

        <button class="btn btn-primary mb-4" type="submit">Submit</button>

    </form>
@endsection
