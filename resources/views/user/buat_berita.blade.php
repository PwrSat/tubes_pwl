@extends('user.layout.layout')
@section('konten')
    <form method="post" action="{{route('store_berita')}}">

        <div class="mb-3">
            <label for="" class="form-label">Body</label>
            <input id="" type="hidden" name="">
            <trix-editor input="body"></trix-editor>
        </div>

        <input type="submit">

    </form>
@endsection
